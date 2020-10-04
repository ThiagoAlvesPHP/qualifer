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
	//cadastrar usuarios
	public function set($post){
		$sql = $this->db->query("SELECT * FROM usuarios WHERE email = '{$post['email']}' ");

		if ($sql->rowCount() == 0) {
			$fields = [];
	        foreach ($post as $key => $value) {
	            $fields[] = "$key=:$key";
	        }
	        $fields = implode(', ', $fields);
			$sql = $this->db->prepare("INSERT INTO usuarios SET {$fields}");

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
		$sql = $this->db->prepare("UPDATE usuarios SET {$fields} WHERE id = '{$post['id']}' ");

		foreach ($post as $key => $value) {
            $sql->bindValue(":{$key}", $value);
        }
		$sql->execute();
	}
	//selecionar todas os usuarios
	public function getAll(){
		$sql = $this->db->query("SELECT * FROM usuarios");
		return $sql->fetchAll(PDO::FETCH_ASSOC);
	}
	//selecionar usuario
	public function get($id){
		$sql = $this->db->query("SELECT * FROM usuarios WHERE id = '{$id}' ");
		return $sql->fetch(PDO::FETCH_ASSOC);
	}

}