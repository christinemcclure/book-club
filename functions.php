<?php

// enqueue parent styles in child theme
function example_enqueue_styles() {
	
	// enqueue parent styles
	wp_enqueue_style('kotha', get_template_directory_uri() .'/style.css');
	
}
add_action('wp_enqueue_scripts', 'example_enqueue_styles');





