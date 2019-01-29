<?php
/*
Plugin Name:  BloggerNET
Plugin URI:   https://ikbendani.nl
Description: Een overzichtelijke blog plugin. Simpel te gebruiken en perfect voor de bloggers onder ons.
Version:      1.0
Author:       Dani Aragones
Author URI:   https://ikbendani.nl
License:      das
License URI:  https://ikbendani.nl
Text Domain:  BloggerNET
Domain Path:  /nederlands
*/

// Exit if accessed directly.
if( !defined( 'ABSPATH' ) ) exit;

function test_register_post_type() {

        $labels = array( 'name' => _x( 'Blog', 'Post type general name', 'BloggerNET' ), 'singular_name' => _x( 'Blog Item', 'Post type singular name', 'BloggerNET' ),
            'menu_name' => _x( 'Blog Items', 'Admin Menu text', 'BloggerNET' ),
            'name_admin_bar' => _x( 'Blog Items', 'Add New on Toolbar', 'BloggerNET' ),
    );


 $args = array(
	    'labels'             => $labels,
	    'public'             => true,
	    'publicly_queryable' => true,
	    'show_ui'            => true,
	    'show_in_menu'       => true,
	    'query_var'          => true,
	    'rewrite'            => array( 'slug' => 'Blog' ),
	    'capability_type'    => 'post',
	    'has_archive'        => true,
	    'hierarchical'       => false,
	    'menu_position'      => null,
	    'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	    'menu_icon'			 => 'dashicons-screenoptions',
    );




register_post_type( 'dani', $args );
}
add_action( 'init', 'test_register_post_type' );


function portfolio_taxonomy() {

	$labels = array(
		'name' => _x( 'Item Types', 'taxonomy general name', 'test-blog' ),
		'singular_name' => _x( 'Item Type', 'taxonomy singular name', 'test-blog' ),
		);
		
		$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'item-type' ),
		);		

  register_taxonomy( 'blog-type', 'test-blog', $args );
}
add_action( 'init', 'blog_taxonomy' );



