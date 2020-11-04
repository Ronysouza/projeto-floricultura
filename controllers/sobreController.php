<?php


class sobreController extends controller{

	public function index(){
	 

		
		$dados = array(
             'teste'=>array()
		);
            

             $dados['teste'] = 'floricultura em salto';

		$this->loadTemplate('sobre',$dados);
		

	}









}