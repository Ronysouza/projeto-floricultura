<?php


class contatoController extends controller{

	public function index(){
	 

		
		$dados = array(
             'teste'=>array()
		);
            

             $dados['teste'] = 'Decorações e floricultura em salto';

		$this->loadTemplate('contato',$dados);
		

	}









}