<?php
  
// include the simple sidebar class
include_once( 'simple-wp-sidebar-class.php' );

// create a book sidebar
$book_sidebar = new Simple_Sidebar( array( 
  'name'        => 'Book', 
  'id'          => 'book-sidebar-1' 
  ) );

// create a recipe sidebar with description and aside container
$recipe_sidebar = new Simple_Sidebar( array( 
  'name'        => 'Recipe', 
  'id'          => 'recipe-sidebar-1',
  'description' => 'A description',
  'container'   => 'aside' 
  ) );
  
// create a country sidebar with description and div container
$country_sidebar = new Simple_Sidebar( array( 
  'id'          => 'country-sidebar-1',
  'description' => 'A description',
  'container'   => 'div'
  ) );