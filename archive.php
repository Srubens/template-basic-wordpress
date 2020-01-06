<?php get_header(); ?>
<!-- O ARCHIVE É IDENTICO AO CATEGORY SERVE PARA VC FAZER ESTILOS DIFERENTES -->
<section>

   <div>
    
   		<?php echo "<h1>", the_archive_title() ,"</h1>"; ?>
      
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