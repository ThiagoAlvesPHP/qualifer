<?php
class Categorias extends model{
	//atualizar configurações
	public function up($post){
		$fields = [];
        foreach ($post as $key => $value) {
            $fields[] = "$key=:$key";
        }
        $fields = implode(', ', $fields);
		$sql = $this->db->prepare("UPDATE config SET {$fields}");

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