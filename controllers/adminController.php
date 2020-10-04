<?php
class adminController extends controller {

	public function __construct(){
		if (empty($_SESSION['cLogin'])) {
			header('Location: '.BASE.'login');
		}
	}

	public function index() {
		$dados = array();		
		$this->loadTemplate('dashboard', $dados);
	}
	//menu
	public function menuAdmin(){
		$dados = array();
		$u = new Usuarios();

		$dados['get'] = $u->get($_SESSION['cLogin']);
		$this->loadView('menuAdmin', $dados);
	}
	//cadastro de usuario
	public function usuario(){
		$dados = array();
		$u = new Usuarios();	
		$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
		//cadastrar usuarios
		if (!empty($post)) {
			if ($u->set($post)) {
				header('Location: '.BASE.'admin/usuario');
			} else {
				$dados['error'] = true;
			}
		}
		$this->loadTemplate('usuario', $dados);
	}
	//listar todos os usuarios
	public function usuarios_lista(){
		$dados = array();
		$u = new Usuarios();	
		
		$dados['lista'] = $u->getAll();
		$this->loadTemplate('usuarios_lista', $dados);
	}
	//editar usuario
	public function usuario_up($id){
		if (!empty($id)) {
			$dados = array();
			$u = new Usuarios();	

			$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
			//cadastrar usuarios
			if (!empty($post)) {
				$post['id'] = $id;
				$u->up($post);
				header('Location: '.BASE.'admin/usuario_up/'.$id);
			}

			$dados['status'] = array(
				'1'=>'Ativo',
				'2'=>'Inativo'
			);			
			$dados['get'] = $u->get($id);
			$this->loadTemplate('usuarios_up', $dados);
		} else {
			header('Location: '.BASE.'admin');
		}
	}

	//cadastro de categorias
	public function categorias(){
		$dados = array();
		$c = new Categorias();	
		$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
		//cadastrar usuarios
		if (!empty($post)) {
			if ($c->set($post)) {
				header('Location: '.BASE.'admin/categorias');
			} else {
				$dados['error'] = true;
			}
		}
		$this->loadTemplate('categorias', $dados);
	}
	//listar todas as categorias
	public function categorias_lista(){
		$dados = array();
		$c = new Categorias();	
		
		$dados['lista'] = $c->getAll();
		$this->loadTemplate('categorias_lista', $dados);
	}
	//editar categoria
	public function categorias_up($id){
		if (!empty($id)) {
			$dados = array();
			$c = new Categorias();	

			$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
			//cadastrar usuarios
			if (!empty($post)) {
				$post['id'] = $id;
				$c->up($post);
				header('Location: '.BASE.'admin/categorias_up/'.$id);
			}

			$dados['get'] = $c->get($id);
			$this->loadTemplate('categorias_up', $dados);
		} else {
			header('Location: '.BASE.'admin');
		}
	}

	//cadastro de produtos
	public function produtos(){
		$dados = array();
		$p = new Produtos();
		$c = new Categorias();	
		$i = new Imagem();

		$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
		//cadastrar usuarios
		if (!empty($post)) {
			//verificando se imagem esta preenchida
			if (!empty($_FILES['imagem']['name'])) {
				//se a imagem for em png
				if ($_FILES['imagem']['type'] == 'image/png') {
					$url = 'assets/img/produtos/';
					$imagem = md5($_FILES['imagem']['tmp_name'].time().rand(0,999)).'.png';
					$post['imagem'] = $imagem;
					$i->png(600, 600, $url, $imagem);
					$p->set($post);
					header('Location: '.BASE.'admin/produtos');
				} else {
					$dados['error'] = true;
				}
			} else {
				$p->set($post);
				header('Location: '.BASE.'admin/produtos');
			}
		}

		$dados['categorias'] = $c->getAll();
		$this->loadTemplate('products', $dados);
	}
	//listar todas as categorias
	public function produtos_lista(){
		$dados = array();
		$p = new Produtos();	
		
		$dados['lista'] = $p->getAll();
		$this->loadTemplate('produtos_lista', $dados);
	}
	//editar categoria
	public function produtos_up($id){
		if (!empty($id)) {
			$dados = array();
			$c = new Categorias();	

			$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
			//cadastrar usuarios
			if (!empty($post)) {
				$post['id'] = $id;
				$c->up($post);
				header('Location: '.BASE.'admin/categorias_up/'.$id);
			}

			$dados['get'] = $c->get($id);
			$this->loadTemplate('categorias_up', $dados);
		} else {
			header('Location: '.BASE.'admin');
		}
	}

	//deslogar usuario
	public function logout(){
		//deslogar administrador
		if (!empty($_SESSION['cLogin'])) {
			unset($_SESSION['cLogin']);
			header('Location: '.BASE.'login');
		}
	}
}