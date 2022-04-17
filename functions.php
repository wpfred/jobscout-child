<?php 
	 add_action( 'wp_enqueue_scripts', 'jobscout_child_wpfred_enqueue_styles' );
	 function jobscout_child_wpfred_enqueue_styles() {
 		  	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
		}

		require_once get_theme_file_path( 'inc/job_manager.php' );
