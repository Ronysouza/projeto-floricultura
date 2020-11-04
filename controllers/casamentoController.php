<?php


class casamentoController extends controller{

	public function index(){
	 

		$dados = array(
             'teste'=>array()
		);
            

             $dados['teste'] = 'Floricultura em Salto';

		$this->loadTemplate('casamento',$dados);
		

	}









}