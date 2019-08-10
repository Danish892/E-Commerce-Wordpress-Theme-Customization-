<?php  
/**
 * @package WordPress
 * @subpackage:
 *	Name: 	Bravo Store Theme
 *	Alias: 	Bravo Store
 *	Author: AA-Team
 *	Name: 	http://themeforest.net/user/AA-Team/portfolio
 *  Template Name: Blog Portrait
 *	
**/

get_header(); 

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$bravostore_posts_no = (int)get_theme_mod( 'portrait_posts_per_page' ) >= -1 ? (int)get_theme_mod( 'portrait_posts_per_page' ) : 6;

/* query arguments */
$bravostore_args_blog = array(
	'paged' => $paged,
	"posts_per_page" => $bravostore_posts_no,
	'post_status' => 'publish'
);
		
global $more;

?>

<div class="bravostore-wrapper bravostore-wrapper-spacer">
	<div class="container-fluid-extender">

		<section>
			<div class="container-fluid">
				<div class="row">

				<?php

				$bravostore_query = new WP_Query( $bravostore_args_blog );
                
                if ( $bravostore_query->have_posts() ) {
                    
                    while ( $bravostore_query->have_posts() ) {
                        
                        $bravostore_query->the_post();				
                
                        $more = 0;

						?>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

							<article class="bravostore-portrait-post-content">

								<?php get_template_part( 'inc/blog/portrait/standard' ); ?>

								<?php wp_link_pages('before=<div id="page-links">&after=</div>'); ?>
								
							</article>

						</div>
						
					<?php } ?>
                    
                </div>

                <?php } else {
                
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
		</section>

	</div>
</div>
<?php get_footer(); ?>