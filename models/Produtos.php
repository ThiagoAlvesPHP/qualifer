<?php
class Produtos extends model{
	//cadastrar produtos
	public function set($post){
		$fields = [];
        foreach ($post as $key => $value) {
            $fields[] = "$key=:$key";
        }
        $fields = implode(', ', $fields);
		$sql = $this->db->prepare("INSERT INTO produtos SET {$fields}");

		foreach ($post as $key => $value) {
            $sql->bindValue(":{$key}", $value);
        }
		$sql->execute();
	}
	//atualizar configurações
	public function up($post){
		$fields = [];
        foreach ($post as $key => $value) {
            $fields[] = "$key=:$key";
        }
        $fields = implode(', ', $fields);
		$sql = $this->db->prepare("UPDATE produtos SET {$fields} WHERE id = '{$post['id']}'");

		foreach ($post as $key => $value) {
            $sql->bindValue(":{$key}", $value);
        }
		$sql->execute();
	}
	//selecionar todas as categorias
	public function getAll(){
		$sql = $this->db->query("
			SELECT 
			produtos.*, 
			categorias.nome as categoria 
			FROM produtos
			INNER JOIN categorias
			ON produtos.id_categoria = categorias.id
			");
		return $sql->fetchAll(PDO::FETCH_ASSOC);
	}
	//selecionar configurações
	public function get($id){
		$sql = $this->db->query("SELECT * FROM produtos WHERE id = '{$id}' ");
		return $sql->fetch(PDO::FETCH_ASSOC);
	}
	//lista de produtos por categorias
	public function getAllProdutos($id_categoria){
		$sql = $this->db->query("SELECT * FROM produtos WHERE id_categoria = '{$id_categoria}'");
		return $sql->fetchAll(PDO::FETCH_ASSOC);
	}

}