<?php get_header(); ?>

<section>

   <div>
      
		<?php if( have_posts() ){ ?>
           	<?php while( have_posts() ){ ?>
           	 	<?php the_post(); ?>

           	 	<article>

           	 		<h1>
	           	 		<?php the_title(); ?>
	           	 	</h1>

	           	 	<?php if( has_post_thumbnail() ){ ?>
						<!-- PARA COLOCAR MINIATURA -->
	           	 		<?php the_post_thumbnail('full'); ?>
	           	 	<?php } ?>

	           	 	<p>
	           	 		<?php echo get_the_date(); ?> |
							<a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ) ?>"><?php the_author(); ?></a> 
							| <?php the_category(' ') ?>
	           	 	</p>

	           	 	<p>
	           	 		<!-- CONTEUDO DO TEXTO -->
	           	 		<?php the_content(); ?>
	           	 	</p>

	           	 	<p>
	           	 		<!-- COMMENTARIOS 
	           	 			0 comentarios um comentario ou % comentarios -->
	           	 		<?php comments_number(''); ?>
	           	 	</p>

           	 	</article>
           	<?php } ?>
        <?php } ?>

		<!-- tamanho das imagens thumbnail, medium, large, orginal é a full    -->

		<div>
			<!-- PAGINAÇÃO PARA PROXIMOS POSTS OU POSTS ANTERIORES -->
			<div><?php previous_post_link() ?></div>
			<div><?php next_post_link() ?></div>
			<?php  ?>
		</div>

   </div>

   <?php get_sidebar(); ?>  

</section>


<?php get_footer(); ?>