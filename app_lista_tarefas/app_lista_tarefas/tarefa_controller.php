<?php
	require "../../app_lista_tarefas/tarefa.model.php";
	require "../../app_lista_tarefas/tarefa.service.php";
	require "../../app_lista_tarefas/conexao.php";

$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

if($acao == 'inserir') {
	$tarefa = new Tarefa();
	$tarefa->__set('tarefa', $_POST['tarefa']);

	$conexao = new Conexao();
	
	$tarefaService = new TarefaService($conexao, $tarefa);

	$tarefaService->inserir();
	
	header('Location:nova_tarefa.php?inclusao=1');

} else if($acao == 'recuperar') {
	
	$tarefa = new Tarefa();
	$conexao = new Conexao();

	$tarefaService = new TarefaService($conexao, $tarefa);

	$tarefas = $tarefaService->recuperar();

	function dados() {
		

		foreach ($GLOBALS['tarefas'] as $indice => $tarefa) { ?>
				
			<div class="row mb-3 d-flex align-items-center tarefa">
				<div class="col-sm-9" id="tarefa_<?=$tarefa->id?>">
					<?= $tarefa->tarefa ?>(<?=$tarefa->status?>)
				</div>
					<div class="col-sm-3 mt-2 d-flex justify-content-between">
						<i class="fas fa-trash-alt fa-lg text-danger" onclick="remover(<?=$tarefa->id ?>)"></i>
						<?php if($tarefa->status == 'pendente'){ ?>

							<i class="fas fa-edit fa-lg text-info" onclick="editar(<?= $tarefa->id ?>, '<?=$tarefa->tarefa?>')"></i>
							<i class="fas fa-check-square fa-lg text-success" onclick="marcarRealizada(<?= $tarefa->id ?>)"></i>
					
					<?php	} ?>
					</div>
			</div>

	<?php } 

	}
}else if($acao == 'atualizar'){
	$tarefa = new Tarefa();
	$tarefa->__set('id', $_POST['id']);
	$tarefa->__set('tarefa', $_POST['tarefa']);

	$conexao = new Conexao();

	$tarefaService = new TarefaService($conexao, $tarefa);
	if($tarefaService->atualizar()){

		if(isset($_GET['pag']) and $_GET['pag'] == 'todas_tarefas'){
			header('Location: todas_tarefas.php');
		}else if(isset($_GET['pag']) and $_GET['pag'] == 'index'){
			header('Location: index.php');
		}
		
	}

}else if($acao == 'remover'){
	$tarefa = new Tarefa();
	$tarefa->__set('id', $_GET['id']);

	$conexao = new Conexao();

	$tarefaService = new TarefaService($conexao, $tarefa);
	
	$tarefaService->remover();
	
	if(isset($_GET['pag']) and $_GET['pag'] == 'todas_tarefas'){
		header('Location: todas_tarefas.php');
	}else if(isset($_GET['pag']) and $_GET['pag'] == 'index'){
		header('Location: index.php');
	}
	
}else if($acao == 'marcarRealizada'){
	$tarefa = new Tarefa();
	$tarefa->__set('id', $_GET['id'])->__set('id_status', 2);

	$conexao = new Conexao();

	$tarefaService = new TarefaService($conexao, $tarefa);
	$tarefaService->marcarRealizada();
		
	if(isset($_GET['pag']) and $_GET['pag'] == 'todas_tarefas'){
		header('Location: todas_tarefas.php');
	}else if(isset($_GET['pag']) and $_GET['pag'] == 'index'){
		header('Location: index.php');
	}

}else if($acao == 'pendente'){
	$tarefa = new Tarefa();

	$conexao = new Conexao();

	$tarefaService = new TarefaService($conexao, $tarefa);

	$tarefas = $tarefaService->pendente();
	
	//Função para pegar os dados e lançar na página:
	function dados() {
		foreach ($GLOBALS['tarefas'] as $indice => $tarefa) { ?>
				
			<div class="row mb-3 d-flex align-items-center tarefa">
				<div class="col-sm-9" id="tarefa_<?=$tarefa->id?>">
					<?= $tarefa->tarefa ?>
				</div>
					<div class="col-sm-3 mt-2 d-flex justify-content-between">
						<i class="fas fa-trash-alt fa-lg text-danger" onclick="remover(<?=$tarefa->id ?>)"></i>
							<i class="fas fa-edit fa-lg text-info" onclick="editar(<?= $tarefa->id ?>, '<?=$tarefa->tarefa?>')"></i>
							<i class="fas fa-check-square fa-lg text-success" onclick="marcarRealizada(<?= $tarefa->id ?>)"></i>
					</div>
			</div>

	<?php } 

	}
}

?>