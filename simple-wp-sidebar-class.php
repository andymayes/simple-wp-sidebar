<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Simple_Sidebar {
  
  public $args;  
  
	function __construct( $args = array() ) {
  	
  	$this->args = $args;
  	
    add_action( 'widgets_init', array( $this, 'register_sidebar' ) );
  }  
	
	/**
	 * Register the Sidebar
	 *
	 * @author Andy Mayes
	 * @since  1.0.0
	 *
	 */
	function register_sidebar() {
    $args = array_merge(
      array(
      	'name'				  => __( isset( $args['name'] ) ? $args['name'] : 'Sidebar' ),
      	'id'            => isset( $args['id'] ) ? $args['id'] : '',
      	'description'   => __( isset( $args['description'] ) ? $args['description'] : '' ),
        'class'         => '',
      	'before_widget' => '<section id="%1$s" class="widget %2$s">',
      	'after_widget'  => '</section>',
      	'before_title'  => '<h2 class="widget-title">',
      	'after_title'   => '</h2>', 
      ),
      $this->args
    );
		
		register_sidebar( $args );
	}
}