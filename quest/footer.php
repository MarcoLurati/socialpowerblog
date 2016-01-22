<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Quest
 */

/**
 * Filter Footer container class
 */
$footer_container_cls = apply_filters( 'quest_footer_container_cls', 'container' );

?>

<?php if ( is_active_sidebar( 'footer-widget' ) ) : ?>
	<footer class="quest-row main-footer">
		<div class="<?php echo $footer_container_cls; ?>">
			<div class="row">
				<?php dynamic_sidebar( 'footer-widget' ); ?>

					<?php /*if ( quest_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
						<article class="widget widget_categories col-md-4 widget_archive">
							<h2 class="widget-title"><?php _e( 'Most Used Categories', 'quest' ); ?></h2>
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
						</article><!-- .widget -->
					<?php endif;*/ ?>

			</div>
		</div>
	</footer>
<?php endif; ?>

<footer id="colophon" class="copyright quest-row" role="contentinfo">
	<div class="<?php echo $footer_container_cls; ?>">
		<div class="row">
			<div class="col-md-6 copyright-text">
				<?php //echo apply_filters( 'quest_footer_copyright_text', quest_get_footer_copyright() ); ?>
				© 2016 <a href="http://www.socialpower.ch/index.php/home/">Social Power Project</a>
			</div>

			<div class="col-md-6 social-icon-container clearfix">
				<ul>
					<?php quest_footer_social_icons(); ?>
				</ul>
			</div>

		</div>
		<!-- end row -->
	</div>
	<!-- end container -->
</footer> <!-- end quest-row -->

</div><!-- #page -->

<?php wp_footer(); ?>

<!-- <div style="text-align:center;"></div> -->


<a href="#0" class="cd-top"><i class="fa fa-angle-up"></i></a>

</body>
</html>
