<?php 

   if( post_password_required() ){
   	 return;
   }

   if( have_comments() ){

   	 foreach($comments as $comment){

?>
	<div class="comentario">
		<div class="comentario_foto">
			<?php echo get_avatar($comment, 60); ?>
		</div>
		<div class="comentario_area">
			<strong><?php comment_author(); ?></strong> - <?php comment_date(); ?>
			<?php comment_text(); ?>
		</div>
	</div>

<?php

   	 }

   	 //PAGINAÇÃO DE COMENTARIOS
   	 the_comments_pagination();
   
   }

//COLOCANDO OS CAMPOS DOS COMENTARIOS
comment_form(array(
	'comment_field' => '<textarea name="comment"></textarea>',
	'fields' => array(
		'author' => '<input type="text" name="author" placeholder="seu nome"/>',
		'email' => '<input type="email" name="email" placeholder="seu email"/>',
		'url' => '<input type="text" name="url" placeholder="seu site"/>'
	),
	'class_submit' => 'botao',
	'label_submit' => 'Enviar comentario',
	'title_reply' => 'Deixe um comentario'
));