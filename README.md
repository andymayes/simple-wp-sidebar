# Simple Sidebar for WordPress
This is a simple helper class to easily register WordPress sidebars in the WordPress admin screen.

**Version:** 1.0.0

## Installation
Download and include the class file into your theme's `functions.php` like so:

    include_once( 'simple-wp-sidebar-class.php' );

and you're ready to go!

## Creating a new Sidebar
    $book_sidebar = new Simple_Sidebar( array( 
      'name'        => 'Book', 
      'id'          => 'book-sidebar-1' 
    ) );

### Accepted Parameters
`name`: Name of the sidebar, this is the human readable label in the WordPress admin. 

`id`: Super important to follow these guidlines. Each ID should be unique to the sidebar and appear in lowercase with no spaces. If you want to separate words then use a hyphen in between each word. The ID is used to call the sidebar within you theme templates.

`description`: The description for the sidebar, this is the human readable description for the sidebar in the WordPress admin. It allows you to describe the purpose of the sidebar with in your theme.

## Displaying the Sidebar in your Theme
    <?php if ( is_active_sidebar( 'book-sidebar-1' )  ) : ?>
	    <aside id="secondary" class="sidebar widget-area" role="complementary">
		    <?php dynamic_sidebar( 'book-sidebar-1' ); ?>
	    </aside><!-- .sidebar .widget-area -->
    <?php endif; ?>

This code snippet checks to see if the sidebar is active. The `is_active_sidebar` conditional tag is a boolean function that returns either TRUE or FALSE. If the sidebar contains widgets it returns TRUE and outputs the `<aside>` and the widget contents, otherwise it returns FALSE and nothing it outputted. 
