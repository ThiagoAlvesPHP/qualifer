<?php
class Config extends model{
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
	public function get(){
		$sql = $this->db->query("SELECT * FROM config");

		return $sql->fetch(PDO::FETCH_ASSOC);
	}
	//registrar email
	public function setEmail($post){
		$fields = [];
        foreach ($post as $key => $value) {
            $fields[] = "$key=:$key";
        }
        $fields = implode(', ', $fields);
		$sql = $this->db->prepare("INSERT INTO config_emails SET {$fields}");

		foreach ($post as $key => $value) {
            $sql->bindValue(":{$key}", $value);
        }
		$sql->execute();
	}
	//selecionar emails
	public function getAllEmails(){
		$sql = $this->db->query("SELECT * FROM config_emails");
		return $sql->fetchAll(PDO::FETCH_ASSOC);
	}
	//deletar email
	public function delEmail($id){
		$sql = $this->db->query("DELETE FROM config_emails WHERE id = '{$id}'");
	}
}