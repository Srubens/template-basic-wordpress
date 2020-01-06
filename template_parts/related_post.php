<!-- POSTS RELACIONADOS BASEADO NO ARQUIVO POST -->
<article>

	<h1>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
 	</h1>

 	<?php if( has_post_thumbnail() ){ ?>
	<!-- PARA COLOCAR MINIATURA -->
 		<a href="<?php the_permalink(); ?>">
 		<?php the_post_thumbnail('full', array('class' => 'post_miniatura')); ?>
 		</a>

 	<?php } ?>

 	<p>
 		<!-- COMMENTARIOS 
 			0 comentarios um comentario ou % comentarios -->
 		<?php comments_number(''); ?>
 	</p>

</article>