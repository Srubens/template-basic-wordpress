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
 		<?php echo get_the_date(); ?> |
		<a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ) ?>"><?php the_author(); ?></a> 
		| <?php the_category(' ') ?>
 	</p>

 	<p>
 		<!-- CONTEUDO DO TEXTO -->
 		<?php the_excerpt(); ?>
 	</p>

 	<p>
 		<!-- COMMENTARIOS 
 			0 comentarios um comentario ou % comentarios -->
 		<?php comments_number(''); ?>
 		<a href="<?php the_permalink(); ?>">Leia Mais</a>
 	</p>

</article>