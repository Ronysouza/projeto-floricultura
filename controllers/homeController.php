<?php


class homeController extends controller{

	public function index(){
	 

		$dados = array(
             'teste'=>array()
		);
            

             $dados['teste'] = 'floricultura na cidade de salto';

		$this->loadTemplate('home',$dados);
		

	}









}