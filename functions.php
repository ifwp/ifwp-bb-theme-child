<?php

 // --------------------------------------------------

	add_action('wp_enqueue_scripts', function(){
		wp_enqueue_style('ifwp-bb-theme-child', get_stylesheet_uri(), [], '1.0');
	});

 // --------------------------------------------------
