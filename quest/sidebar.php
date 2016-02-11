<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Quest
 */


$lang = get_bloginfo('language');

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>


<?php //if ( is_user_logged_in() ) { /*  nothing to show */ } ?> 

<?php // else { ?>

<?php // } ?>

<div id="secondary" class="widget-area main-sidebar col-md-3" role="complementary">

<?php
if ( is_user_logged_in() ) {
	//echo 'Welcome, registered user!';
} else {
	//echo 'Welcome, visitor!'; ?>



		<aside id="text_icl-4" class="widget widget_text_icl sidebar-widget clearfix">

			<?php  if( $lang === 'it-IT') { ?>

				<h3 class="widget-title">Partecipare alla community è facile!</h3>
				<div class="textwidget">
					La community di Social Power è il luogo perfetto per condividere le tue abilità sul risparmio energetico e connetterti al tuo team. Trova le risposte alle tue domande, collabora con la tua squadra per raggiungere i social bonus, condividendo suggerimenti e consigli, puoi aiutare il tuo team a vincere! Ci vuole poco per iniziare. Registrati.
					<br/>
					<a class="button" href="http://www.socialpowerblog.ch/registrazione">Registrati</a>
				</div>

			<?php } elseif ( $lang === 'de-DE') { ?>

				<h3 class="widget-title">Bei der Community mitmachen ist einfach!</h3>
				<div class="textwidget">
				Die Social Power Community ist der perfekte Platz, um Erfahrungen rund ums Energiesparen zu teilen und dich mit deinem Team zu vernetzen. Hier spielt die Musik: du bekommst Antworten auf deine Fragen, du und dein Team könnt euch koordinieren um die Extrapunkte abzuholen, du kannst deine Ideen und Tipps teilen und Rückmeldungen dazu bekommen und du findest Lösungen für deine Herausforderungen und kannst anderen dabei helfen ihre zu lösen! Eine Anmeldung ist ganz einfach: klicke dazu auf den Anmeldebutton.
				<br/>
					<a class="button" href="http://www.socialpowerblog.ch/de/aufzeichnung">Anmelden</a>
				</div>

			<?php }?>

		</aside>

	<!--</div>-->

<?php } ?>


<!-- <div id="secondary" class="widget-area main-sidebar col-md-3" role="complementary"> -->


	<aside id="text_icl-4" class="widget widget_text_icl sidebar-widget clearfix">

		<?php  if( $lang === 'it-IT') { ?>
			<h3 class="widget-title">Foto</h3>
		<?php } elseif ( $lang === 'de-DE') { ?>
			<h3 class="widget-title">Foto</h3>
		<?php }?>

		<?php echo do_shortcode("[metaslider id=112]"); ?>
	</aside>

	<!-- Slider con foto della settimana -->
	<?php dynamic_sidebar( 'sidebar-1' ); ?>

	<?php /* ?>

	<aside class="widget widget_categories widget_archive"> <!-- col-md-4  -->
		<h2 class="widget-title">

		<?php */?>			

			 <?php /* if( $lang === 'it-IT') { ?>

				Categorie

			<?php }
			elseif ( $lang === 'de-DE') { ?>

				Kategorien

			<?php } ?>

		</h2>
		<ul>
			<?php
			wp_list_categories( array(
				'orderby'    => 'count',
				'order'      => 'DESC',
				'show_count' => 1,
				'title_li'   => '',
				'number'     => 10,
			) );
			?>
		</ul>
	</aside>
	*/?>

	<?php dynamic_sidebar( 'sidebar-2' ); ?>
</div><!-- #secondary -->

	
