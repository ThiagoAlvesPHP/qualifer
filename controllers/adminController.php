<?php
class adminController extends controller {

	public function __construct(){
		if (empty($_SESSION['cLogin'])) {
			header('Location: '.BASE.'login');
		}
	}

	public function index() {
		$dados = array();		

		$this->loadTemplate('home', $dados);
	}

	public function logout(){
		//deslogar administrador
		if (!empty($_SESSION['cLogin'])) {
			unset($_SESSION['cLogin']);
			header('Location: '.BASE.'login');
		}
	}
}