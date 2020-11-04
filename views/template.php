<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="google-site-verification" content="ISY-wStc-I5GbbM2Ho1pzIzGLNmqYeotXdOhXFHgFwU" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" href="assets/images/ligo-icone.png" />
	<link rel="stylesheet" type="text/css" href="<?php BASE_URL?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php BASE_URL?>assets/css/estilo.css">
		<link rel="stylesheet" type="text/css" href="<?php BASE_URL?>assets/css/home.css">
		<link rel="stylesheet" type="text/css" href="<?php BASE_URL?>assets/css/sobre.css">
		<link rel="stylesheet" type="text/css" href="<?php BASE_URL?>assets/css/novidades.css">
		<link rel="stylesheet" type="text/css" href="<?php BASE_URL?>assets/css/contato.css">
		<link rel="stylesheet" type="text/css" href="<?php BASE_URL?>assets/css/casamento.css">
    <link rel="stylesheet" type="text/css" href="<?php BASE_URL?>assets/css/animacoes.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL?>assets/css/logo_creditos.css">

   <?php if(!isset($viewData['teste']) && !empty($viewData['teste'])): ?>
<title><?php print_r($viewData['teste']); ?></title>
    <?php else:  ?>
<title>Floricultura na cidade de Salto</title>
    <?php endif;  ?>
	 
	
</head>
<body>


<!--whats flutuante-->

<div class="divWhatsapp">


<div class="img">
    <a title="Fale Conosco via whatsapp" href= "">
              <img height="60" class="img-fluid"   src="assets/images/ico-whatsapp2.png">
            

            </a>
</div>
  
</div>

<!--whats flutuante-->





<header style="border-bottom: 2px solid #6B0401">
   


 <div class="container-fluid topo">
 	<div class="container">
 		 <div class="topo-info" ><img src="assets/images/phone-with-buttons.png"> (11) 9 9687-2349 <img src="assets/images/email.png">E-mail: contato@floriculturasalto.com</div>
      <div style="clear: both;"></div>
 	</div>

     
 	
 </div>
 <div class="container-fluid menu">
 	  <div class="menu-info">
 	 <div class="row">
 	 	<div class="col-sm-4">
 	 		 <img class="img-fluid" src="assets/images/logo-flores.png">
 	 	</div>
 	 	<div class="col-sm-8">
 	 		 
 	 		
 	 		 	

           <ul>
           	<li style=" 
    border-bottom-right-radius: 20px;
     border-bottom-left-radius: 20px;
     
background-color: #6B0401;" ><a style="color: #fff" href="<?php echo BASE_URL?>home">Inicial</a></li>
           <a href="<?php echo BASE_URL?>sobre">	<li>Sobre</li></a>
           <a href="<?php echo BASE_URL?>casamento">	<li>Casamento</li></a>
            <a href="<?php echo BASE_URL?>novidades">	<li>Novidades</li></a>
          	<a href="<?php echo BASE_URL?>contato"><li>Contato</li></a>
           	
           		 
           </ul>

 	 		 </div>



 	 	</div>
 	 	
 	 </div>  
    
  




 </div>
 
  <div class="menu-mobile">
    	  <button>Menu</button>
    	  <div style="clear: both;"></div>

 <div class="menu-mobile-info">
   <ul>
   	<a href="<?php echo BASE_URL?>home"><li>Inicio</li></a>
   	 	<a href="<?php echo BASE_URL?>sobre"><li>Sobre</li></a>
   	 	 	<a href="<?php echo BASE_URL?>casamento"><li>Casamento</li></a>
   	 	 	 	<a href="<?php echo BASE_URL?>novidades"><li>Novidades</li></a>
   	 	 	 	 	<a href="<?php echo BASE_URL?>contato"><li>Contato</li></a>
   </ul>

   	
   </div>

    </div>
      
  
 </header>
<?php  $this->loadViewInTemplate($viewName,$viewData);   ?>


<footer class="container-fluid rodape">

<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<strong><h4>Menu</h4></strong><br>
			<a href="<?php echo BASE_URL?>home">Inicial</a><br>
			<a href="<?php echo BASE_URL?>sobre">Sobre</a><br>
			<a href="<?php echo BASE_URL?>casamento">Casamento</a><br>
			<a href="<?php echo BASE_URL?>novidades">Novidades</a><br>
			<a href="<?php echo BASE_URL?>contato">Contato</a><br>
		</div>
          <div class="col-sm-4">
          	<strong><h4>Atendimento</h4></strong>
              fone:(11) 9 9687-2349 <br>
             E-mail: contato@floriculturasalto.com     	
          </div>
          <div class="col-sm-4">
          	<strong><h4>Formas de Pagamento</h4></strong>
          	<img class="img-fluid" src="assets/images/pagamento.png">

          </div>           

		
	</div>
	
</div>

	
</footer>

<!--desenvolvido por r7webdesign -->
<div class="container-fluid logo_rodape_info" >
<center><div class="container ">
		
		<a target="_blank" href="https://r7webdesign.com">Desenvolvido por <img height="20" src="assets/images/logo_rodape_preto.png"></a>
	</div></center>
	
</div>
<!--desenvolvido por r7webdesign -->




<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>