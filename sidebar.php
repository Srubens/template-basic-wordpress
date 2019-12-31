<div>
  <h1>conteudo da siderbar!</h1>
  <p>Este conteudo esta em outro arquivo</p>

  <?php 
     
     //CHAMA O SIDEBAR 
     if( is_active_sidebar('rt_sidebar') ){
     	dynamic_sidebar('rt_sidebar');
     }

   ?>
</div> 