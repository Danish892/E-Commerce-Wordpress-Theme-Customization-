<?php  
/**
 * @package WordPress
 * @subpackage:
 *	Name: 	Bravo Store Theme
 *	Alias: 	Bravo Store
 *	Author: AA-Team
 *	Name: 	http://themeforest.net/user/AA-Team/portfolio
 *  Template Name: Blog Default
 *	
**/

get_header(); 

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$bravostore_posts_no = (int)get_theme_mod( 'default_posts_per_page' ) >= -1 ? (int)get_theme_mod( 'default_posts_per_page' ) : 6;

/* query arguments */
$bravostore_args_blog = array(
	'paged' => $paged,
	"posts_per_page" => $bravostore_posts_no,
	'post_status' => 'publish'
);
		
global $more;

?>

<div class="bravostore-wrapper">
	<div class="container-fluid-extender">

		<section>
			<div class="container-fluid">
				<div class="row">

					<?php Bravostore()->print_sidebar( 'main-sidebar', 'left' )?>

					<div class="<?php Bravostore()->content_class('main-sidebar')?>">
						
						<?php 

						$bravostore_post_counter = 0;

						$bravostore_query = new WP_Query( $bravostore_args_blog );
		                
		                if ( $bravostore_query->have_posts() ) {
		                    
		                    while ( $bravostore_query->have_posts() ) {
		                        
		                        $bravostore_query->the_post();				
		                
		                        $more = 0;

								$bravostore_post_counter ++; 

								?>

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
								
							<?php }
		                    
		                } else {
		                
		                    esc_html_e('The blog doesn\'t contain any posts.', 'bravostore');
		                    
		                } ?>

                        <?php if(get_theme_mod( 'blog_pagination_type' ) == 'Numbered') { ?>
							
                        	<?php echo Bravostore()->print_pagination( $bravostore_query )?>

                        <?php } else { ?>
						
							<div class="classic-pagination">
								<?php next_posts_link(esc_html__('&larr; Older Entries', 'bravostore'), $bravostore_query->max_num_pages) ?>
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