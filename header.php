<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<!--O BODY CLASS SERVE PARA CRIAR CLASSES NO NOSSO BODY PERSONALIZANDO O NOSSO TEMA COM O CSS
 PARA COLOCAR UMA NOVA CLASS É SO COLOCAR O NOME DA CLASS DENTRO DA FUNÇÃO BODY_CLASS -->
<body <?php body_class(); ?> >
   <header>

      <!-- COLOCANDO LOGO NO TEMA -->
      <?php 

         if( has_custom_logo() ){
            the_custom_logo();
         } 

       ?>
      
   	<h1><a href="<?= home_url('/') ?>"><?php bloginfo('name'); ?></a></h1>

   	<?php 
   	   // PARA O MENU FICAR ATIVADO
      	   if( has_nav_menu('primary') ){
      	   	  wp_nav_menu( array(
      	   	  	'theme_location' => 'primary',
      	   	  	'container' => 'nav',
      	   	  	'container_class' => 'class1',
      	   	  	'fallback_cb' => false
      	   	  ));
      	   }	
   	 ?>
   </header>