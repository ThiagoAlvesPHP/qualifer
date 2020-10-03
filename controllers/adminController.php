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
			
		$this->loadTemplate('usuario', $dados);
	}

	public function logout(){
		//deslogar administrador
		if (!empty($_SESSION['cLogin'])) {
			unset($_SESSION['cLogin']);
			header('Location: '.BASE.'login');
		}
	}
}