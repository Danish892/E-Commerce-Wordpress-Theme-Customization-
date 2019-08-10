<?php  
/**
 * @package WordPress
 * @subpackage:
 *	Name: 	Bravo Store Theme
 *	Alias: 	Bravo Store
 *	Author: AA-Team
 *	Name: 	http://themeforest.net/user/AA-Team/portfolio
 *	
**/

get_header(); ?>

<!-- Page Content ==== -->

<div class="bravostore-wrapper">
	<div class="container-fluid-extender">

		<section>
			<div class="container-fluid">
				<div class="row">

					<?php Bravostore()->print_sidebar( 'main-sidebar', 'left' )?>

					<div class="<?php Bravostore()->content_class('main-sidebar')?>">
						
						<?php $bravostore_post_counter = 0; ?>

						<?php if ( have_posts() ) : ?>
							<?php while( have_posts() ) : the_post(); ?>

								<?php $bravostore_post_counter ++; ?>

								<article class="bravostore-post-content">

									<?php get_template_part( 'inc/blog/default/standard' ); ?>


									<?php if( $bravostore_post_counter == 1 ) { 
										
										if( get_theme_mod( 'blog_banner' ) ) { ?>

										<div class="blog-banner-wrapper">
											<?php echo get_theme_mod( 'blog_banner' ); ?>
										</div>
									
									<?php }

									} ?>

									<?php wp_link_pages('before=<div id="page-links">&after=</div>'); ?>
									
								</article>
								
							<?php endwhile; ?>
						<?php endif; ?>


                        <?php if(get_theme_mod( 'blog_pagination_type' ) == 'Numbered') { ?>
							
                        	<?php echo Bravostore()->print_pagination( $wp_query )?>

                        <?php } else { ?>
						
							<div class="classic-pagination">
								<?php next_posts_link(esc_html__('&larr; Older Entries', 'bravostore'), $wp_query->max_num_pages) ?>
	                        	<?php previous_posts_link(esc_html__('Newer Entries &rarr;', 'bravostore')) ?>
	                        </div>

                        <?php } ?>

					</div>

					<?php Bravostore()->print_sidebar( 'main-sidebar', 'right' )?>

				</div>
			</div>
		</section>

	</div>
</div>
<?php get_footer(); ?>