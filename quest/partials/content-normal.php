<?php $view = quest_get_view(); ?>

<div id="content">
	<?php quest_title_bar( $view ); ?>

	<div class="quest-row site-content">
		<div class="<?php echo apply_filters( 'quest_content_container_cls', 'container' ); ?>">
			<div class="row">

				<?php quest_try_sidebar( $view, 'left' ); ?>

				<div id="primary" class="content-area <?php quest_main_cls(); ?>">
					<main id="main" class="site-main" role="main">

						<?php if ( have_posts() ) : ?>

							<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>





						
							<?php /*	START MARCO --> -> summarized post only (original part)

								<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-normal' ); ?>>
									<header class="entry-header">
										<?php get_template_part( 'partials/content', 'sticky' ); ?>
										<?php if ( has_post_thumbnail() ) : ?>

											<div class="post-image blog-normal effect slide-top">
												<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'blog-normal' ); ?></a>

												<div class="overlay">
													<div class="caption">
														<a href="<?php the_permalink() ?>"><?php _e( 'View more', 'quest' ); ?></a>
													</div>
													<a href="<?php the_permalink() ?>" class="expand">+</a>
													<a href="#" class="close-overlay hidden">x</a>
												</div>
											</div>

										<?php endif; ?>

										<?php the_title( sprintf( '<h1 class="post-title entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

										<?php if ( 'post' == get_post_type() ) : ?>
											<div class="entry-meta">
												<?php quest_post_meta(); ?>
											</div><!-- .entry-meta -->
										<?php endif; ?>

									</header>
									<!-- .entry-header -->

									<div class="entry-content">

										
										<?php the_excerpt(); ?>


										<?php wp_link_pages( array(
											'before' => '<div class="page-links">' . __( 'Pages:', 'quest' ),
											'after'  => '</div>',
										) );
										?>
									</div>
									<!-- .entry-content -->

									<footer class="entry-footer">
										<?php quest_post_taxonomy( $view ); ?>
										<?php quest_post_read_more(); ?>
									</footer>
									<!-- .entry-footer -->
								</article><!-- #post-## -->


							END MARCO

							*/ ?>

							




							<!-- START MARCO -> full post view! (modification) / from content-single.php -->



							<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-normal' ); ?>>
								<header class="entry-header">

									<?php get_template_part( 'partials/content', 'sticky' ); ?>

									<?php do_action('quest_single_' . $view . '_before_ft_img'); ?>

									<?php if ( ! quest_get_mod( 'layout_' . $view . '_ft-img-hide' ) && has_post_thumbnail() ) : ?>

										<div class="post-image blog-normal effect slide-top" <?php echo quest_featured_image_width( $view ) ?>>
											<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'blog-normal' ); ?></a>

											<div class="overlay">
												<div class="caption">
													<a href="<?php the_permalink() ?>"><?php _e( 'View more', 'quest' ); ?></a>
												</div>
												<a href="<?php the_permalink() ?>" class="expand">+</a>
												<a href="#" class="close-overlay hidden">x</a>
											</div>
										</div>

									<?php endif; ?>

									<?php the_title( sprintf( '<h1 class="post-title entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>	<!-- Marco -->

									<?php do_action('quest_single_' . $view . '_after_ft_img'); ?>

									<?php if ( quest_get_mod( 'layout_' . $view . '_title' ) ) : ?>
										<?php the_title( sprintf( '<h1 class="post-title entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
									<?php endif; ?>

									<?php if ( 'post' == get_post_type() ) : ?>
										<div class="entry-meta">
											<?php quest_post_meta(); ?>
										</div><!-- .entry-meta -->
									<?php endif; ?>

									<?php quest_post_taxonomy( $view ); ?>

								</header>
								<!-- .entry-header -->

								<div class="entry-content">
									<?php the_content(); ?>
									<?php
									wp_link_pages( array(
										'before' => '<div class="page-links">' . __( 'Pages: ', 'quest' ),
										'after'  => '</div>',
									) );
									?>
								</div>
								<!-- .entry-content -->

								<footer class="entry-footer">
									<?php edit_post_link( __( 'Edit', 'quest' ), '<span class="edit-link">', '</span>' ); ?>

									<?php //quest_post_author_info(); ?>	<!-- Marco -->

									<?php //quest_post_single_navigation(); ?>	<!-- Marco -->
									

									
								</footer>
								<!-- .entry-footer -->
							</article><!-- #post-## -->

							

							<?php
							// If comments are open or we have at least one comment, load up the comment template
							if ( comments_open() || get_comments_number() ) :
								comments_template();
								//echo "get_comments_number(): "  + get_comments_number() + "" ;
							endif;
							?>

							<!-- END MARCO -->


							<?php endwhile; ?>

							<?php quest_pagination( $pages = '', $range = 2 ); ?>

						<?php else : ?>

							<?php get_template_part( 'content', 'none' ); ?>

						<?php endif; ?>

					</main>
					<!-- #main -->
				</div>
				<!-- #primary -->

				<?php quest_try_sidebar( $view, 'right' ); ?>

			</div>
			<!-- .row -->
		</div>
		<!-- .container -->
	</div>
	<!-- .quest-row -->
</div><!-- #content -->
