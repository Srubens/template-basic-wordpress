<!-- IDENTICO A PAGINA SINGLE COM ALGUMAS ALTERAÇÕES -->
<?php get_header(); ?>

<section>

   <div>
      
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
       	 		<!-- CONTEUDO DO TEXTO -->
       	 		<?php the_content(); ?>
       	 	</p>

   	 	</article>
   	<?php } ?>


   </div>

   <!-- A SIDEBAR PODE OU NÃO EXISTIR	 -->
   <?php get_sidebar(); ?>  

</section>


<?php get_footer(); ?>