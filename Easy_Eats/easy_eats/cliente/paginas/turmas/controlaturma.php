   <?php

   	$sql_turma = "SELECT * FROM login";
    $conn_turma = mysqli_query($conexao, $sql_turma) or die('Erro de conexão');
?>
  
   <title>EasyEats - <?php 
            //print_r($conn_turma);
                while($dados_turma = mysqli_fetch_array($conn_turma)){
                
                if($dados_turma['perfil_id'] == $valor and $dados_turma['perfil_id'] != 1) {
                   echo $dados_turma['turma'];
                }
            }
                ?>
    
   
</title>
