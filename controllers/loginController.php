<?php
class loginController extends controller {

	public function __construct(){
		if (!empty($_SESSION['cLogin'])) {
			header('Location: '.BASE);
		}
	}

	public function index() {
		$dados = array();

		$this->loadView('login', $dados);
	}
}