<?php

require get_template_directory() . "/include/setup.php";

/**
AS FUNÇÕES ESTAO DENTRO DO ARQUIVO SETUP
*/


add_action('wp_enqueue_scripts','rt_theme_styles');
add_action('after_setup_theme','rt_after_setup');
add_action('widgets_init','rt_widgets');