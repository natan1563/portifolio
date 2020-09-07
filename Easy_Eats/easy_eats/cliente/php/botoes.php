<?php
 
include_once "conexao.php";

session_start();

//Botão de cadastrar
    
 if(isset($_POST['btn-cadastrar'])){
    $erros = [];
    $login = mysqli_escape_string($conexao, $_POST['email']);
    $nome = mysqli_escape_string($conexao, $_POST['nome']);
    $senha = mysqli_escape_string($conexao, $_POST['senha']);
    $conf_senha = mysqli_escape_string($conexao, $_POST['conf-senha']);
    $telefone = mysqli_escape_string($conexao, $_POST['telefone']);
    $id = mysqli_escape_string($conexao, $_POST['id']);
    $perfil_id = mysqli_escape_string($conexao, $_POST['perfil_id']);
    $turma = mysqli_escape_string($conexao, $_POST['turma']);
    $projeto = mysqli_escape_string($conexao, $_POST['projeto']);

    if(empty($login) || empty($nome) || empty($senha) || empty($conf_senha) || empty($telefone)){
        $erros[] = "Os campos não podem ficar em branco";
    }else{
        
        if(!($senha == $conf_senha)){
           
            $erros[] = "As senhas não conferem";    
        
        }else{
            
            $sql = "SELECT usuario FROM login WHERE usuario = '$login'";
            $result = mysqli_query($conexao, $sql);

            if(mysqli_num_rows($result) > 0){
                             
                $erros[] = "Usuário já cadastrado";
            
            }else{

            $senha = md5($senha);
            $telefone = str_replace(' ', '.', $telefone);
            $sql = "INSERT INTO login (nome, usuario, senha, telefone, perfil_id, turma, projeto) VALUES ('$nome', '$login','$senha', $telefone, $perfil_id, '$turma', '$projeto')";


            if(mysqli_query($conexao, $sql)){
                $_SESSION['perfil_id'] = $perfil_id;
                echo "Cadastrado com sucesso";
                header('Location: login.php');

            }else{
                echo "Erro ao cadastrar";
                
            }

        }
            }

        }
    
    }

//Botão de enviar do login
if(isset($_POST['btn-enviar'])){
$login = mysqli_escape_string($conexao, $_POST['NLog']);
$senha = mysqli_escape_string($conexao, $_POST['NPass']);
$perfil_id = null;
$erro = [];
    if(empty($login) or empty($senha)){
      $_SESSION['logado'] = 'NAO';
      $erro[] = 'Preencha com seu login e senha!';
    }else{
        
        $sql = "SELECT usuario FROM login WHERE usuario = '$login'";
                
        $result = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

        if(mysqli_num_rows($result)){
          $senha = md5($senha);


          $sql = "SELECT * FROM login WHERE usuario = '$login' and senha = '$senha'";
          $result = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));


        if(mysqli_num_rows($result)){
          $linha = mysqli_fetch_array($result);        
          $_SESSION['perfil_id'] = $linha['perfil_id']; 
          $_SESSION['id_user'] = $linha['id'];
          $_SESSION['logado'] = 'SIM';
          mysqli_close($result);
          header('Location: index.php');
        }else{
          $_SESSION['logado'] = 'NAO';
          $erro[] = 'Senha Incorreta ';
        }
        }else{
          $_SESSION['logado'] = 'NAO';
          $erro[] = 'Usuario Inexistente ';
        }
    }
  }


//Delete Inserção de produtos 
if(isset($_POST['btn-deletar'])){

$id_delete = mysqli_escape_string($conexao, $_POST['id_produto']);

$sql_delete = "DELETE FROM produtos WHERE id = '$id_delete'";

    if(mysqli_query($conexao, $sql_delete)){
       
        header('Location: inserir_produtos.php?id_produto=deletado');
    
    }else{
    
        header('Location: inserir_produtos.php?id_produto=erro');
    }
}

//Delete do Pedido 

if(isset($_POST['deletar-pedido'])){


$pedido_delete = mysqli_escape_string($conexao, $_POST['id_pedido']);

$sql_registra = "SELECT * FROM pedidos WHERE id_pedido = $pedido_delete";
$quebra = mysqli_fetch_array(mysqli_query($conexao, $sql_registra));

$insert = "INSERT INTO pedidos_realizados(id_pedido, produto, valor, ingredientes, id_cliente, nome, id_vendedor) VALUES ($quebra[0], '$quebra[1]', $quebra[2], '$quebra[3]', $quebra[4],' $quebra[5]', $quebra[6])";

$delete_pedido = "DELETE FROM pedidos WHERE id_pedido = $pedido_delete";

    if(mysqli_query($conexao, $insert)){

        mysqli_query($conexao, $delete_pedido);
        
        header('Location: pedido.php?id_produto=deletado');
    
    }else{
    
        header('Location: pedido.php?id_produto=erro');
    }
}



?>
