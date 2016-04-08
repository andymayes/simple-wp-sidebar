<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Simple_Sidebar {
  
  public $args = array();
  
  /**
	 * Construct
	 *
	 * @author Andy Mayes
	 * @since  1.0.0
	 *
	 */
	function __construct( $args ) {
  	  $container = $this->use_container( $args );
  		$this->args = array(
      	'name'				  => __( isset( $args['name'] ) ? $args['name'] : 'Sidebar' ),
      	'id'            => isset( $args['id'] ) ? $args['id'] : '',
      	'description'   => __( isset( $args['description'] ) ? $args['description'] : '' ),
        'class'         => '',
      	'before_widget' => '<'.$container.' id="%1$s" class="widget %2$s">',
      	'after_widget'  => '</'.$container.'>',
      	'before_title'  => '<h2 class="widget-title">',
      	'after_title'   => '</h2>',      
      );
      
      add_action( 'widgets_init', array( $this, 'register_sidebar' ) );
  }  
	/**
	 * Container
	 *
	 * @author Andy Mayes
	 * @since  1.1.0
	 *
	 */
	function use_container( $args ) {
  	$this->container = $args['container'];
  	
  	if ( $this->container == 'div') {
    	$this->container = 'div';
  	}
    else if ( $this->container == 'aside') {
    	$this->container = 'aside';
  	}
  	else {
    	$this->container = 'section';
  	}

  	return $this->container;
  }
  	
	/**
	 * Register the Sidebar
	 *
	 * @author Andy Mayes
	 * @since  1.0.0
	 *
	 */
	function register_sidebar() {
		register_sidebar( $this->args );
	}
}