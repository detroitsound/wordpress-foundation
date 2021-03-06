<!doctype html>

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title('', true, 'right'); ?></title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta property="og:title" content="<?php the_title(); ?>"/>
        <meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
        <meta property="og:url" content="<?php the_permalink(); ?>"/>
        <?php $fb_image = wp_get_attachment_image_src(get_post_thumbnail_id( get_the_ID() ), 'og-image'); ?>
        <?php if ($fb_image) : ?>
            <meta property="og:image" content="<?php echo $fb_image[0]; ?>" />
        <?php endif; ?>
        <meta property="og:type" content="<?php
            if (is_single() || is_page()) { echo "article"; } else { echo "website";} ?>"
        />
        <meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>

		<!-- For everything else -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />


		<!-- bring in theme options styles -->
		<?php
		$theme_options_styles = "";

		$link_color = of_get_option('link_color');
		if ($link_color) {
			$theme_options_styles .= '
			a{
				color: ' . $link_color . ';
			}';
		}

		$link_hover_color = of_get_option('link_hover_color');
		if ($link_hover_color) {
			$theme_options_styles .= '
			a:hover{
				color: ' . $link_hover_color . ';
			}';
		}

		$link_active_color = of_get_option('link_active_color');
		if ($link_active_color) {
			$theme_options_styles .= '
			a:active{
				color: ' . $link_active_color . ';
			}';
		}


		$suppress_comments_message = of_get_option('suppress_comments_message');
		if ($suppress_comments_message){
			$theme_options_styles .= '
			#main article {
				border-bottom: none;
			}';
		}

		if($theme_options_styles){
			echo '<style>'
			. $theme_options_styles . '
			</style>';
		}

		?>

	</head>

	<body <?php body_class(); ?>>
        <div id="bodyWrapper">
            <nav id="mobileMenu">
                <?php bones_mobile_nav(); ?>
            </nav>
            <section id="container">
                <div id="contentWrapper">
            		<header role="banner" id="top-header">

            			<a class="brand" id="logo" href="<?php echo get_bloginfo('url'); ?>">
            			    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" />
            		    </a>
                        <nav class="main">
                			<?php bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>
            			</nav>

            			<div class="show-for-small menu-action" id="showMenu">
            		  	    <a href="#sidebar" id="mobile-nav-button">
            					<i class="fa fa-bars"></i>
            				</a>
            			</div>

            		</header> <!-- end header -->