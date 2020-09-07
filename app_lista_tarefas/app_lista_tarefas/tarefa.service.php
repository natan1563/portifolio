<?php

class TarefaService{

	private $conexao;
	private $tarefa;

	public function __construct(Conexao $conexao, Tarefa $tarefa){
		$this->conexao = $conexao->conectar();	
		$this->tarefa = $tarefa;
	}

	public function inserir() { //create
		
		$query = 'INSERT INTO tb_tarefas(tarefa)VALUES(:tarefa)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
		$stmt->execute();
	
	}

	public function recuperar() {//read
		$query = 'SELECT 
					t.id, s.status, tarefa 
				FROM 
					tb_tarefas 
				as 
					t
				left join
					tb_status as s
				on (t.id_status = s.id)';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
		
	}

	public function atualizar() {//update
		$query = "UPDATE tb_tarefas set tarefa = :tarefa where id = :id";
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
		$stmt->bindValue(':id', $this->tarefa->__get('id')); 
		return $stmt->execute();
	}

	public function remover() {//delete
		$query = "DELETE FROM tb_tarefas WHERE id = :id";
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id', $this->tarefa->__get('id'));
		return $stmt->execute();
	}

	public function marcarRealizada(){
		$query = "UPDATE tb_tarefas SET id_status = :id_status WHERE id = :id";
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id_status', $this->tarefa->__get('id_status'));
		$stmt->bindValue(':id', $this->tarefa->__get('id'));
		return $stmt->execute();
	}

	public function pendente(){
		$query = "SELECT t.id, t.id_status, tarefa, data_cadastrado, s.status FROM tb_tarefas as t left join tb_status as s on(t.id_status = s.id) WHERE id_status = :id_status ORDER BY data_cadastrado ASC";
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id_status', 1);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}
}

?>