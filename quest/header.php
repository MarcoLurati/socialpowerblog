<?php
/**
 * The header for quest.
 *
 * Displays all of the <head> section and everything up till end of </header>
 *
 * @package Quest
 */

$lang = get_bloginfo('language');

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class( quest_get_mod( 'layout_global_site' ) ); ?>>
<div id="page" class="hfeed site">

	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'quest' ); ?></a>

	<?php

	/**
	 * Custom action before main header
	 */
	do_action( 'quest_before_header' );

	/**
	 * Filter Header container class
	 */
	$header_container_cls = apply_filters( 'quest_header_container_cls', 'container' );
	?>

	<?php if ( quest_get_mod( 'layout_header_secondary' ) ) : ?>
		<header id="secondary-head" class="secondary-header" role="banner">
			<div class="<?php echo $header_container_cls; ?>">
				<div class="row">
					<?php //quest_second_header(); ?>
					<div class="col-md-2 col-sm-3 col-xs-12">
						<div style="margin-top: 5px;">
							<a href="http://www.socialpower.ch" target="_blank" style="color: white;  font-weight: bold; font-size: 1.1em;" title="Social Power Project">
								Social Power Project
							</a>
						</div>
					</div>
					<!-- <div class="col-md-8"></div> -->
					<div id="social-language" class="col-md-6 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
						<?php dynamic_sidebar( 'header-widget' ); ?>		<!-- selettore lingua + icone -->
					</div>
				</div>
			</div>
		</header>
		<!-- #secondary-head -->
	<?php endif; ?>

	<header id="masthead" class="main-header" role="banner">
		<div class="<?php echo $header_container_cls; ?>">
			<div class="row">
				<?php quest_site_branding( 'col-md-4' ); ?>

				<nav id="site-navigation" class="main-navigation col-md-8" role="navigation">
					<div class="navbar-toggle" data-toggle="collapse" data-target="#main-menu-collapse">
						<a href="#" title="<?php _e( 'Menu', 'quest' ) ?>">
							<i class="fa fa-reorder"></i>
						</a>
					</div>
					<div class="navbar-collapse collapse" id="main-menu-collapse">
						<?php quest_site_menu(); ?>
					</div>
				</nav>
				<!-- #site-navigation -->
			</div>
		</div>
	</header>
	<!-- #masthead -->
	<div></div>

	<?php
		if ( is_home() ) { ?>
			<div id="join_header">
				<div class="container">
					<div class="row">
						
						<div class="col-md-9">
							<!--<h2>Benvenuto nella comunità di Social Power!</h2>
							<p>Social Power uses social and game neighborood contest to inspire action and reward participation, building network momentum. Here you can share your knowledge, help your team on energy saving tips and tricks and make your quartier the winner. Ready to save more energy?</p>
							-->

							<?php dynamic_sidebar( 'sub-header-widget' ); ?>
						
						</div>
					</div>
				</div>
			</div>

	<?php } ?>

	<?php// if ( quest_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
	<div id="category_header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
						<article class="widget widget_categories widget_archive">
								<!--<h2 class="widget-title"><?php _e( 'Most Used Categories', 'quest' ); ?></h2>-->
								<ul>
									<?php
									wp_list_categories( array(
										//'orderby'    => 'count',
										'order'      => 'DESC',
										'show_count' => 0,
										'title_li'   => '',
										'number'     => 10,
										'exclude'	=> '15,17,13,14,16',	// MARCO categorie da escudere
									) );
									?>

									<!-- START MARCO -->
									<?php
									if ( $lang === 'it-IT') {
									?>

										<li class="cat-item">
											<a href="http://www.socialpowerblog.ch/2016/01/13/ciao-mondo/">Suggerimenti</a>
										</li>
										<li class="cat-item">
											<a href="http://www.socialpowerblog.ch/2016/01/28/quiz/">Quiz</a>
										</li>
										<li class="cat-item">
											<a href="http://www.socialpowerblog.ch/2016/01/28/vuoi-saperne-di-piu/">Domande</a>
										</li>
										<li class="cat-item">
											<a href="http://www.socialpowerblog.ch/2016/01/28/diffondi-buone-pratiche/">Consigli energetici</a>
										</li>
										<li class="cat-item">
											<a href="http://www.socialpowerblog.ch/2016/01/28/annunci/">Annunci</a>
										</li>
										

									<?php
									} elseif ( $lang === 'de-DE') {
									?>


										<li class="cat-item">
											<a href="http://www.socialpowerblog.ch/de/2016/01/28/wie-koennen-wir-die-social-power-app-verbessern/">Ratschläge</a>
										</li>
										<li class="cat-item">
											<a href="http://www.socialpowerblog.ch/de/2016/01/22/quiz/">Quiz</a>
										</li>
										<li class="cat-item">
											<a href="http://www.socialpowerblog.ch/de/2016/01/28/fragen/">Fragen</a>
										</li>
										<li class="cat-item">
											<a href="http://www.socialpowerblog.ch/de/2016/01/28/verbreite-optimale-vorgehensweisen/">Energietipps</a>
										</li>
										<li class="cat-item">
											<a href="http://www.socialpowerblog.ch/de/2016/01/20/ankuendigungen/">Ankündigungen</a>
										</li>


									<?php } ?>
								
									<!-- STOP MARCO -->


								</ul>
							</article><!-- .widget -->
				</div>
			</div>
		<?php //endif; ?>
		</div>
	</div>


	<?php

	/**
	 * Custom action after main header
	 */
	do_action( 'quest_after_header' );
	?>
