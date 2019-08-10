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
						<?php if ( have_posts() ) : ?>
							<?php while( have_posts() ) : the_post(); ?>

								<div class="page-content">

									<article class="bravostore-post-content">

										<?php if(has_post_thumbnail() ) { ?>
										    
										    <div class="imgp-wrapper-single">
                 
										        <?php the_post_thumbnail(); ?>
										        
										    </div>                
										    
										    <div class="clearboth"></div>
										<?php }	?>									

	                					<h2 id="post-<?php the_ID(); ?>" <?php post_class('bravostore-post-title'); ?>><?php the_title(); ?></h2>

										<div class="post-misc">

											<span class="post-misc-date">
												<?php esc_html_e('Posted on ', 'bravostore'); ?><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html(get_the_date()); ?></a>
											</span>

											<?php esc_html_e('By ', 'bravostore'); ?><span class="post-misc-author"><?php the_author_posts_link(); ?></span>

											<?php if( has_category() ) { ?>
											      <?php esc_html_e('In ', 'bravostore'); ?><span class="post-misc-category"><?php the_category(' , '); ?></span>
											<?php } ?>

											<span class="post-misc-comments">
												<?php esc_html_e('With ', 'bravostore'); ?><?php comments_popup_link(esc_html__('no comments', 'bravostore'), esc_html__('1 comment', 'bravostore'), esc_html__('% comments', 'bravostore'), 'comments-link', esc_html__('disabled comments', 'bravostore')); ?>
											</span>

										</div>            					

										<?php the_content(); ?>

										<?php wp_link_pages( array(
											'before'      => '<div id="page-links">',
											'after'       => '</div>',
											'link_before' => '<span class="page-number">',
											'link_after'  => '</span>',
										) ); ?>
										
						                <?php if(has_tag()) { ?>
						                
						                    <div class="tags-wrapper">
						                        <?php the_tags('', ''); ?>
						                    </div>
						                    
						                <?php } ?>

									</article>

								</div>
								
							<?php endwhile; ?>
						<?php endif; ?>

						
						<?php if( get_theme_mod( 'display_post_share' ) == 'YES' ) {

							get_template_part( 'inc/post-share' );

						} ?>


		                <?php if( get_theme_mod( 'display_about_author_box' ) == 'YES' ) {

		                	get_template_part( 'inc/about-author' );

		    			} ?>


		                <!-- comments section -->
		                <?php comments_template('', true); ?>

					</div>

					<?php Bravostore()->print_sidebar( 'main-sidebar', 'right' )?>

				</div>
			</div>
		</section>

	</div>
</div>
<?php get_footer(); ?>