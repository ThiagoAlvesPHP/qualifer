<?php
class Usuarios extends model{
	//login de usuarios
	public function login($post){
		$sql = $this->db->prepare('
			SELECT id FROM usuarios 
			WHERE email = :email
			AND senha = :senha
			AND status = 1');
		$sql->bindValue(':email', $post['email']);
		$sql->bindValue(':senha', md5($post['senha']));
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$dados = $sql->fetch(PDO::FETCH_ASSOC);
			$_SESSION['cLogin'] = $dados['id'];			
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