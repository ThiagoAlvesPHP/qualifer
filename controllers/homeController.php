<?php
class homeController extends controller {

	public function index() {
		$dados = array();		

		$this->loadTemplate('home', $dados);
	}

	//pagina empresa
	public function empresa(){
		$dados = array();		

		$this->loadTemplate('empresa', $dados);
	}
	//pagina de produtos por categorias
	public function produtos($id){
		if (!empty($id)) {
			$dados = array();
			$cat = new Categorias();		

			$dados['categoria'] = $cat->get($id);
			$this->loadTemplate('produtos', $dados);
		} else {
			header('Location: '.BASE);
		}
	}

	//pagina servico
	public function servico(){
		$dados = array();		

		$this->loadTemplate('servico', $dados);
	}
	//pagina contato
	public function contato(){
		$dados = array();		

		$this->loadTemplate('contato', $dados);
	}
	//pagina orcamento
	public function orcamento(){
		$dados = array();		

		$this->loadTemplate('orcamento', $dados);
	}

	//menu
	public function menu(){
		$dados = array();
		$dados['categorias'] = (new Categorias())->getAll();
		$this->loadView('menu', $dados);
	}

	public function logout(){
		//deslogar administrador
		if (!empty($_SESSION['cLogin'])) {
			unset($_SESSION['cLogin']);
			header('Location: '.BASE.'login');
		}
	}
}