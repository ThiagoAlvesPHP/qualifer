<?php
class Categorias extends model{
	//cadastrar categoria
	public function set($post){
		$sql = $this->db->query("SELECT * FROM categorias WHERE nome = '{$post['nome']}' ");

		if ($sql->rowCount() == 0) {
			$fields = [];
	        foreach ($post as $key => $value) {
	            $fields[] = "$key=:$key";
	        }
	        $fields = implode(', ', $fields);
			$sql = $this->db->prepare("INSERT INTO categorias SET {$fields}");

			foreach ($post as $key => $value) {
	            $sql->bindValue(":{$key}", $value);
	        }
			$sql->execute();

			return true;
		} else {
			return false;
		}
	}
	//atualizar configurações
	public function up($post){
		$fields = [];
        foreach ($post as $key => $value) {
            $fields[] = "$key=:$key";
        }
        $fields = implode(', ', $fields);
		$sql = $this->db->prepare("UPDATE categorias SET {$fields} WHERE id = '{$post['id']}' ");

		foreach ($post as $key => $value) {
            $sql->bindValue(":{$key}", $value);
        }
		$sql->execute();
	}
	//selecionar todas as categorias
	public function getAll(){
		$sql = $this->db->query("SELECT * FROM categorias");
		return $sql->fetchAll(PDO::FETCH_ASSOC);
	}
	//selecionar configurações
	public function get($id){
		$sql = $this->db->query("SELECT * FROM categorias WHERE id = '{$id}' ");
		return $sql->fetch(PDO::FETCH_ASSOC);
	}

}