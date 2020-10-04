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
	public function usuarios_lista(){
		$dados = array();
		$u = new Usuarios();	
		
		$dados['lista'] = $u->getAll();
		$this->loadTemplate('usuarios_lista', $dados);
	}

	public function logout(){
		//deslogar administrador
		if (!empty($_SESSION['cLogin'])) {
			unset($_SESSION['cLogin']);
			header('Location: '.BASE.'login');
		}
	}
}