<?php


class novidadesController extends controller{

	public function index(){
	 

		$dados = array(
             'teste'=>array()
		);
            

             $dados['teste'] = 'flores ornamentais em salto';

		$this->loadTemplate('novidades',$dados);
		

	}


public function cestas(){


 
		$dados = array();

		$this->loadTemplate('cestas',$dados);




}

public function coracoes(){


 
		$dados = array();

		$this->loadTemplate('coracoes',$dados);




}



public function coroas(){


 
		$dados = array();

		$this->loadTemplate('coroas',$dados);




}



public function cubos(){


 
		$dados = array();

		$this->loadTemplate('cubos',$dados);




}



public function presentes(){


 
		$dados = array();

		$this->loadTemplate('presentes',$dados);




}






public function rosas(){


 
		$dados = array();

		$this->loadTemplate('rosas',$dados);




}


public function spray(){


 
		$dados = array();

		$this->loadTemplate('spray',$dados);




}

 

public function vasos(){


 
		$dados = array();

		$this->loadTemplate('vasos',$dados);




}





}