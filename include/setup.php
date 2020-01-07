<?php 

/**
ADD O STYLE O SCRIPT DO SITE
*/
function rt_theme_styles(){
	/**
	 priemrio o nome
	 segundo o diretorio
	*/
	wp_enqueue_style('theme_css', get_template_directory_uri() . '/assets/css/theme.css');
	wp_enqueue_script('theme_js', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '', true);
}

/**
ADD MENUS AO TEMA
*/
function rt_after_setup(){

	// SUPORTE PARA IMAGENS 
	add_theme_support('post-thumbnails');

	//SUPORTE PARA TITLE DO TEMA
	add_theme_support('title-tag');

	//LOGO CUSTOMIZADA
	add_theme_support('custom-logo');

	//SUPORTE PARA MENUS
	add_theme_support('menus');

	register_nav_menu('primary', __('Primary Menu','temaOne'));
	register_nav_menu('footer', 'Menu Rodapé');

}

/***
CRIANDO WIDGETS
*/
function rt_widgets(){
	//CRIA A FUNÇÃO SIDEBAR
	/* SE QUISERMOS COLOCAR TAGS E CSS DIFERENTES COLOCAMOS AQUI NO BEFORE OU AFTER TITLE
	   AO MESMO SE QUISERMO COLOCAR ANTES OU DEPOIS DO WIDGETS 
	   - %1$s ISSO IRA FAZER COM QUE AUTOMATICAMENTE ELE COLOCOQUE QUANDO FOR EXIBIR OS WIDGETS 
	   O ID PADRÃO DO WIDGET ESPECIFICO O MESMO FUNCIONA COM CLASSE TB
	   EX: class="widget %2$s"
	 */
	register_sidebar(array(
		'name' => __('Meu Primeiro Sidebar', 'temaone'),
		'id' => 'rt_sidebar',
		'description' => __('Sidebar para o tema', 'temaone'),
		'before_title' => '',
		'after_title' => '',
		'before_widget' => '',
		'after_widget' => '',
	));
}
