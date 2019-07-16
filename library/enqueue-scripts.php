<?php
/**
 * Enqueue all styles and scripts
 *
 * Learn more about enqueue_script: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_script}
 * Learn more about enqueue_style: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_style }
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */


// Check to see if rev-manifest exists for CSS and JS static asset revisioning
//https://github.com/sindresorhus/gulp-rev/blob/master/integration.md

if ( ! function_exists( 'foundationpress_asset_path' ) ) :
	function foundationpress_asset_path( $filename ) {
		$filename_split = explode( '.', $filename );
		$dir            = end( $filename_split );
		$manifest_path  = dirname( dirname( __FILE__ ) ) . '/dist/assets/' . $dir . '/rev-manifest.json';

		if ( file_exists( $manifest_path ) ) {
			$manifest = json_decode( file_get_contents( $manifest_path ), true );
		} else {
			$manifest = array();
		}

		if ( array_key_exists( $filename, $manifest ) ) {
			return $manifest[ $filename ];
		}
		return $filename;
	}
endif;


if ( ! function_exists( 'foundationpress_scripts' ) ) :
	function foundationpress_scripts() {

		if ( is_page( 'home' ) ) {
		// Static page style
			wp_enqueue_style( 'aos', 'https://unpkg.com/aos@next/dist/aos.css' );
			wp_enqueue_style( 'flickity', 'https://unpkg.com/flickity@2/dist/flickity.min.css' );
			wp_enqueue_style( 'home-page-style', get_stylesheet_directory_uri() . '/dist/assets/css/' . foundationpress_asset_path( 'home-page.css' ) );
			wp_enqueue_script( 'flickity-script', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js', array(), '2.2.1', true );
			wp_enqueue_script( 'aos-script', 'https://unpkg.com/aos@next/dist/aos.js', array(), '2.2.1', true );
			wp_enqueue_script( 'home-page', get_stylesheet_directory_uri() . '/dist/assets/js/' . foundationpress_asset_path( 'home-page.js' ), array(), '2', true );
			
		} else if ( is_page( 'news' ) ) {
		// Static page style
			wp_enqueue_style( 'news-page-style', get_stylesheet_directory_uri() . '/dist/assets/css/' . foundationpress_asset_path( 'news-page.css' ) );

		} else if ( is_page( 'about-us' ) ) {
		// Static page style
			wp_enqueue_style( 'aos', 'https://unpkg.com/aos@next/dist/aos.css' );
			wp_enqueue_style( 'flickity', 'https://unpkg.com/flickity@2/dist/flickity.min.css' );
			wp_enqueue_style( 'about-us-style', get_stylesheet_directory_uri() . '/dist/assets/css/' . foundationpress_asset_path( 'about-page.css' ) );
			wp_enqueue_script( 'flickity-script', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js', array(), '2.2.1', true );
			wp_enqueue_script( 'aos-script', 'https://unpkg.com/aos@next/dist/aos.js', array(), '2.2.1', true );
			wp_enqueue_script( 'about-page', get_stylesheet_directory_uri() . '/dist/assets/js/' . foundationpress_asset_path( 'about-page.js' ), array(), '2', true );

		} else if ( is_page( 'solutions' ) ) {
    	// Static page style
		wp_enqueue_style( 'solutions-page-style', get_stylesheet_directory_uri() . '/dist/assets/css/' . foundationpress_asset_path( 'solutions-page.css' ) );
		wp_enqueue_script( 'scroll-magic', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.js', array());
		wp_enqueue_script( 'tween-max', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js', array());
		wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.js', array());
		wp_enqueue_script( 'indicators', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js', array());
		} else if ( is_page( 'case-studies' ) ) {
		// Static page style
		wp_enqueue_style( 'flickity', 'https://unpkg.com/flickity@2/dist/flickity.min.css' );
		wp_enqueue_script( 'flickity-script', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js', array(), '2.2.1', true );
		wp_enqueue_style( 'solutions-page-style', get_stylesheet_directory_uri() . '/dist/assets/css/' . foundationpress_asset_path( 'case-studies-page.css' ) );
		wp_enqueue_script( 'case-studies-page', get_stylesheet_directory_uri() . '/dist/assets/js/' . foundationpress_asset_path( 'case-studies-page.js' ), array(), '2', true );

		} else {
		// Enqueue the main Stylesheet.
		wp_enqueue_style( 'main-stylesheet', get_stylesheet_directory_uri() . '/dist/assets/css/' . foundationpress_asset_path( 'app.css' ), array(), '2.10.4', 'all' );
		/** Call regular enqueue */
		}

		// Deregister the jquery version bundled with WordPress.
		wp_deregister_script( 'jquery' );

		// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
		wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '3.2.1', false );

		// Deregister the jquery-migrate version bundled with WordPress.
		wp_deregister_script( 'jquery-migrate' );

		// CDN hosted jQuery migrate for compatibility with jQuery 3.x
		wp_register_script( 'jquery-migrate', '//code.jquery.com/jquery-migrate-3.0.1.min.js', array('jquery'), '3.0.1', false );

		// Enqueue jQuery migrate. Uncomment the line below to enable.
		// wp_enqueue_script( 'jquery-migrate' );

		// Enqueue Foundation scripts
		wp_enqueue_script( 'foundation', get_stylesheet_directory_uri() . '/dist/assets/js/' . foundationpress_asset_path( 'app.js' ), array( 'jquery' ), '2.10.4', true );


	
		// Enqueue FontAwesome from CDN. Uncomment the line below if you need FontAwesome.
		//wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/5016a31c8c.js', array(), '4.7.0', true );

		


		// Add the comment-reply library on pages where it is necessary
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

	}

	add_action( 'wp_enqueue_scripts', 'foundationpress_scripts' );
endif;
