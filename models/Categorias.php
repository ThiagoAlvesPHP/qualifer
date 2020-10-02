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
	//selecionar configurações
	public function getAll(){
		$sql = $this->db->query("SELECT * FROM categorias");

		return $sql->fetchAll(PDO::FETCH_ASSOC);
	}

}