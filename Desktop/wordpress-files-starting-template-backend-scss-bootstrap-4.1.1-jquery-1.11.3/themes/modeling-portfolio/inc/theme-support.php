<?php 

/*
	@package modeling-portfolio-theme

	=============================
		THEME SUPPORT OPTIONS
	=============================
*/
//Modeling Theme Options START
//Activates all the post format in dasboard posts -> Format bar on the right. TO ACTIVATE POST FORMATS GO TO newly created MODELING -> THEME OPTIONS -> select -> save changes and go to the posts.

/*
$options =  get_option( 'post_formats' );
$formats = array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat');
$output = array();
foreach ($formats as $format){
	$output[] = ( @$options[$format] == 1 ? $format : '');
}

if( !empty($options) ){
	add_theme_support('post-formats', $output );
}
*/

//Simplified version of the code above. TO ACTIVATE POST FORMATS GO TO newly created MODELING -> THEME OPTIONS -> select -> save changes and go to the posts.
$options = get_option('post_formats'); 
if (!empty($options)) { 
	add_theme_support('post-formats', array_keys($options)); 
}

//Activating theme Options MODELING->THEME OPTIONS
//Theme support Custom Header. Check the boxes in Modeling -> Theme Options and it will appear in dashboard Appearance
$header =  get_option( 'custom_header' );//function modeling_custom_header function-admin.php 
if(@$header == 1) {
	add_theme_support('custom-header');
}

//Theme support Custom Background. Check the boxes in Modeling -> Theme Options and it will appear in dashboard Appearance
$background =  get_option( 'custom_background' );//function modeling_custom_background function-admin.php
if(@$background == 1) {
	add_theme_support('custom-background');
}
//Modeling Theme Options END


/*Activate the post thumbnails START*/
add_theme_support( 'post-thumbnails' );//post-thumbnails - Lets to set Featured Image in Wordpress dashboard -> Posts. Developing content.php
/*Activate the post thumbnails END*/


/*Activate Nav Menu Option in WP dashboard START*/
function modeling_register_nav_menu(){
	register_nav_menu( 'primary', 'Header Navigation Menu' );//First parameter - location unique name. For two word use _, but do not use -   . Second parameter - description. 
}//add a walker.php file and require in functions.php

add_action('after_setup_theme', 'modeling_register_nav_menu');//call an action to activate a function.

/*Activate Nav Menu Option END*/


/*Initialize global Mobile Detect START*/
function mobileDetectGlobal(){//CALL THE FUNCTION IN ALL THE CONTENT as example in content-image.php 		global $detect;

	global $detect;

	$detect = new Mobile_Detect;
}

add_action('after_setup_theme', 'mobileDetectGlobal');//after_setup_theme - WordPress built in action 

/*Initialize global Mobile Detect END*/