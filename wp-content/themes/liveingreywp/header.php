<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">

			<header id="masthead" class="site-header"></header>

		<div class="grid-container gc-for-mobile-menu">

			<!-- Custom mobile menu -->
			<div class="custom-mobile-menu">
				<button class="menu-icon" type="button"></button>
				<a href="#">
					<img class="mobile-logo" src="<?php echo get_field('logo', 57);?>" alt=""/>
				</a>
			</div>
			<div class="mobile-menu-content">
				<ul class="mobile-menu">
					<li class="social-icons-container text-left">
						<a href="<?php the_field('facebook',57);?>"><img class="top-social-link-img fb" src="<?php echo get_field('facebook_icon', 57);?>" alt=""/></a>
						<a href="<?php the_field('instagram',57);?>"><img class="top-social-link-img inst" src="<?php echo get_field('instagram_icon', 57);?>" alt=""/></a>
						<a href="<?php the_field('twitter',57);?>"><img class="top-social-link-img twt" src="<?php echo get_field('twitter_icon', 57);?>" alt=""/></a>
						<a href="<?php the_field('linkedin',57);?>"><img class="top-social-link-img in" src="<?php echo get_field('linkedin_icon', 57);?>" alt=""/></a>
						<a href="<?php the_field('pinterest',57);?>"><img class="top-social-link-img pint" src="<?php echo get_field('pinterest_icon', 57);?>" alt=""/></a>
					</li>
					<li class="sign-up-button-container text-left">
						<a href="#">
							<?php the_field('sign_up_for_our_newsletter',57);?>
						</a>
					</li>
				</ul>
			</div>
			<!-- Custom mobile menu end -->


			<div class="top-bar responsive-menu">
				<ul class="menu">
					<li class="social-icons-container text-left">
						<a href="<?php the_field('facebook',57);?>">
                            <img class="top-social-link-img fb" src="<?php echo get_field('facebook_icon', 57);?>" alt=""/>
                            <img class="top-social-link-img fb grey" src="<?php echo get_field('facebook_icon_grey', 57);?>" alt=""/>
                        </a>
						<a href="<?php the_field('instagram',57);?>">
                            <img class="top-social-link-img inst" src="<?php echo get_field('instagram_icon', 57);?>" alt=""/>
                            <img class="top-social-link-img inst grey" src="<?php echo get_field('instagram_icon_grey', 57);?>" alt=""/>
                        </a>
						<a href="<?php the_field('twitter',57);?>">
                            <img class="top-social-link-img twt" src="<?php echo get_field('twitter_icon', 57);?>" alt=""/>
                            <img class="top-social-link-img twt grey" src="<?php echo get_field('twitter_icon_grey', 57);?>" alt=""/>
                        </a>
						<a href="<?php the_field('linkedin',57);?>">
                            <img class="top-social-link-img in" src="<?php echo get_field('linkedin_icon', 57);?>" alt=""/>
                            <img class="top-social-link-img in grey" src="<?php echo get_field('linked_in_icon_grey', 57);?>" alt=""/>
                        </a>
						<a href="<?php the_field('pinterest',57);?>">
                            <img class="top-social-link-img pint" src="<?php echo get_field('pinterest_icon', 57);?>" alt=""/>
                            <img class="top-social-link-img pint grey" src="<?php echo get_field('pinterest_icon_grey', 57);?>" alt=""/>
                        </a>
					</li>
					<li class="logo-container text-center">
						<a href="/">
							<img class="main-logo" src="<?php echo get_field('logo', 57);?>" alt=""/>
                            <img class="logo-grey" src="<?php echo get_field('logo_grey', 57);?>" alt=""/>
						</a>
					</li>
					<li class="sign-up-button-container text-right">
						<a href="#">
							<?php the_field('sign_up_for_our_newsletter',57);?>
						</a>
					</li>
				</ul>
			</div>
		</div>

		<div id="content" class="site-content">
