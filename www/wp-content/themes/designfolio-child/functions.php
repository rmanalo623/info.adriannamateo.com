<?php

/* Designfolio Child Theme.
 *
 * v1.0.
 */

//add_action('get_header', 'new_test2');

add_action( 'after_setup_theme', 'override_parent_theme_main_features', 11 );
add_action( 'after_setup_theme', 'override_parent_theme_lower_level_features', 13 );

/* Remove features added in the parent theme functions.php file. */
function override_parent_theme_main_features() {

	/* e.g. Remove color scheme support. */
	remove_theme_support( 'color-schemes' );

	/* e.g. Remove Google font support. */
	//remove_theme_support( 'google-fonts' );
}

/* Alter lower level features in the framework itself. */
function override_parent_theme_lower_level_features() {

	/* Add code here.. */
	//add_action('pc_after_get_header', 'testing');

	//add_action('pc_after_container', 'new_test');
}

/* Add other hooks/functions below.. */

function testing() {

	echo 'hello world';
}

function new_test() {
	echo 'hiii';
}

function new_test2() {
	echo 'hello';
}





?>