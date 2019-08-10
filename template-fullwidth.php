<?php
/**
 * @package WordPress
 * @subpackage:
 *	Name: 	Bravo Store Theme
 *	Alias: 	Bravo Store
 *	Author: AA-Team
 *	Name: 	http://themeforest.net/user/AA-Team/portfolio
 *  Template Name: Fullwidth
 *
**/

get_header();
?>

<div class="bravostore-wrapper">
	<div class="container-fluid-extender">

		<section>
			<div class="container-fluid">

				<?php if ( have_posts() ) : ?>
					<?php while( have_posts() ) : the_post(); ?>

						<?php the_content(); ?>
							
						<?php comments_template(); ?>

					<?php endwhile; ?>
				<?php endif; ?>

			</div>
		</section>

	</div>
</div>
<?php get_footer(); ?>