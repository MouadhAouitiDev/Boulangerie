<?php

				//Bread and Cake Child Theme

				add_action( 'wp_enqueue_scripts', 'load_child_theme_enqueue_scripts' );


				function load_child_theme_enqueue_scripts(){


					//Bread and Cake child theme stylesheet css file

					wp_enqueue_style('child-theme-css', get_stylesheet_uri());


					//Bread and Cake child theme javascript js file

					wp_enqueue_script('child-theme-js', get_stylesheet_directory_uri() . '/script.js', array( 'jquery' ), '1.0', true );

				}


				/* CUSTOM PHP CODE GOES HERE */


				