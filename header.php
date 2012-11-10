<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

	<title>

	<?php if ( is_tag() ) {

			echo 'Tag Archive for &quot;'.$tag.'&quot; | '; bloginfo( 'name' );

		} elseif ( is_archive() ) {

			wp_title(); echo ' Archive | '; bloginfo( 'name' );

		} elseif ( is_search() ) {

			echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );

		} elseif ( is_home() ) {

			bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );

		}  elseif ( is_404() ) {

			echo 'Error 404 Not Found | '; bloginfo( 'name' );

		} else {

			echo wp_title( ' | ', false, right ); bloginfo( 'name' );

		} ?>

	</title>

	<!--

		Semi dynamic meta keywords and meta description. Google likes meta info that changes for each page.

		While these meta keywords are not ideal and the meta description could be better, they are better than nothing.

	-->

	<meta name="keywords" content="<?php wp_title(); echo ' , '; bloginfo( 'name' ); echo ' , '; bloginfo( 'description' ); ?>" />

	<meta name="description" content="<?php wp_title(); echo ' | '; bloginfo( 'description' ); ?>" />

	<meta charset="<?php bloginfo( 'charset' ); ?>" />


	<link rel="shortcut icon" type="image/x-icon" href="http://hairlab.net/favicon.ico">

	<link rel="profile" href="http://gmpg.org/xfn/11" />

	<link rel="index" title="<?php bloginfo( 'name' ); ?>" href="<?php echo get_option('home'); ?>/" />

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />

	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />

	<!-- The HTML5 Shim is required for older browsers, mainly older versions IE -->

	<!--[if lt IE 9]>

		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

	<![endif]-->

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/prettyPhoto.css" />

  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/grid.css" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/custom.css" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/mobile.css" />



	<?php

		/* We add some JavaScript to pages with the comment form

		 * to support sites with threaded comments (when in use).

		 */

		if ( is_singular() && get_option( 'thread_comments' ) )

			wp_enqueue_script( 'comment-reply' );

	

		/* Always have wp_head() just before the closing </head>

		 * tag of your theme, or you will break many plugins, which

		 * generally use this hook to add elements to <head> such

		 * as styles, scripts, and meta tags.

		 */

		wp_head();

	?>

  <style type="text/css">

  	

		.button, .button-alt {

			behavior:url(<?php bloginfo('stylesheet_directory'); ?>/PIE.php)

			}

		

  </style>

  <script type="text/javascript">

  	// initialise plugins

		jQuery(function(){

			// main navigation init

			jQuery('ul.sf-menu').superfish({

				animation:   {opacity:'show', height:'show'},

				autoArrows:  false,

        dropShadows: false 

			});

			

			// prettyphoto init

			jQuery("#gallery .portfolio a[rel^='prettyPhoto']").prettyPhoto({

				animationSpeed:'slow',

				theme:'facebook',

				slideshow:false,

				autoplay_slideshow: false,

				show_title: true,

				overlay_gallery: false

			});

			

			//faded slider init

			jQuery("#faded").faded({

				speed: 500,

				crossfade: true,

				bigtarget: false,

				loading: true,

				autoplay: 5000,

				autorestart: 2000,

				autopagination:false

			});

		});

  </script>

  <?php if (is_page(57)){ ?>

<style type="text/css">

div.wpcf7-response-output {margin:-26px 0 0 105px;padding:0;border:none;font:normal 10px Arial, Helvetica, sans-serif;color:#990000;text-align:left;width:365px;}

div.wpcf7 .watermark{ color:#7a7a7a;}

</style>

<?php } ?>

</head>



<body <?php body_class(); ?>>



<div id="main"><!-- this encompasses the entire Web site -->

	<div id="main-wrapper">

    <header>

      <div class="container_16">

        <div class="logo">

          <?php if( is_front_page() || is_home() ) { ?>

            <h1><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/site-image/logo.gif" width="279" height="80" title="<?php bloginfo('description'); ?>" alt="<?php bloginfo('description'); ?>" /></a></h1>

          <?php } else { ?>

            <h1><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/site-image/logo.gif" width="279" height="80" title="<?php bloginfo('description'); ?>" alt="<?php bloginfo('description'); ?>" /></a></h1>

          <?php } ?>

        </div>

        <p class="description"><?php bloginfo('description'); ?></p>
        <p class="header_guarantee"><a href="http://www.hairlab.net/guarantee/">Read our Guarantee</a></p>

        <p class="contact_no">
<br />Call Today for a<br />FREE Consultation<br /><span><?php echo get_site_phone() ?></span></p>

        <nav class="primary">

          <?php wp_nav_menu( array(

            'container'       => 'ul', 

            'menu_class'      => 'sf-menu', 

            'menu_id'         => 'topnav',

            'depth'           => 0,

            'theme_location' => 'header_menu' 

            )); 

          ?>

        </nav><!--.primary-->

        <?php if ( ! dynamic_sidebar( 'Social Sidebar' ) ) : ?>

          <!-- Wigitized Header -->

        <?php endif ?>

      </div><!--.container-->

    </header>

    <?php if( is_front_page() || is_home() ) { ?>

    <section id="slider">

      <div class="container">

        <?php include_once(TEMPLATEPATH . '/slider.php'); ?>

      </div>

    </section><!--#slider-->

    <?php } else { ?>

        <div class="other_slider">

        	<div class="container"><?php if(function_exists('show_media_header')){ show_media_header(); } ?></div>

        </div>

    <?php } ?>

    <div class="primary_content_wrap">

      <div class="wrapper">