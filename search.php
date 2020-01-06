<?php get_header(); ?>

<section>

   <div>

        <h1>Você pesquisou por: <?php echo get_search_query(); ?> </h1>
      
		<?php if( have_posts() ){ ?>
           	<?php while( have_posts() ){ ?>
           	 	<?php the_post(); ?>

				<!-- FOI PARA PASTA TEMPLATE_PARTS -->
				<?php get_template_part('template_parts/post'); ?>
           	 	
           	<?php } ?>
        <?php } ?>

		<!-- tamanho das imagens thumbnail, medium, large, orginal é a full    -->

		<div>
			<!-- PAGINAÇÃO -->
			<div><?php previous_posts_link('Post Anterior') ?></div>
			<div><?php next_posts_link('Proxima Pagina') ?></div>
			<?php  ?>
		</div>

   </div>

   <?php get_sidebar(); ?>  

</section>


<?php get_footer(); ?>