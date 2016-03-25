<?php
  
// include the simple sidebar class
include_once( 'simple-wp-sidebar-class.php' );

// create a book sidebar
$book_sidebar = new Simple_Sidebar( array( 
  'name'        => 'Book', 
  'id'          => 'book-sidebar-1' 
  ) );

// create a recipe sidebar with description
$recipe_sidebar = new Simple_Sidebar( array( 
  'name'        => 'Recipe', 
  'id'          => 'recipe-sidebar-1',
  'description' => 'A description' 
  ) );