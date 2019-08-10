		<?php //if ( is_active_sidebar( 'bottom-sidebar' ) ) : dynamic_sidebar( 'bottom-sidebar' ); ?>

		<footer>
			<div class="container-fluid-extender">
				<section class="footer-top">
					<div class="container-fluid"></div>
				</section>


                <?php if( get_theme_mod( 'footer_sidebar_on' ) == 'YES' ) {

					$bravostore_footer_cols = get_theme_mod( 'footer_columns' );

					switch ($bravostore_footer_cols) {
						case 1:
							get_template_part('inc/footer/1columns');
							break;
						case 2:
							get_template_part('inc/footer/2columns');
							break;
						case 3:
							get_template_part('inc/footer/3columns');
							break;
						case 4:
							get_template_part('inc/footer/4columns');
							break;
						default:
							get_template_part('inc/footer/4columns');
							break;
					}             	

    			} ?>


				<section class="footer-bottom" style="padding-top:0px; padding-bottom:0px">
					<div class="container-fluid">
						
						<div class="row">

							<?php if( get_theme_mod( 'show_footer_partners' ) == 'YES' ) { ?>

								<div class="col-lg-6 col-md-6 fml-parent">

									<nav>

									<?php wp_nav_menu(
										array(
											'menu' 					=> Bravostore()->alias . '-footer-menu',
											'theme_location' 		=> Bravostore()->alias . '-footer-menu',
											'menu_class' 			=> 'footer-menu-list',
											'fallback_cb'     		=> 'wp_page_menu',
											'depth'					=> 1
										)
									); ?>

									</nav>

									<div class="clearboth"></div>

									<?php get_template_part( 'inc/footer-partners' ); ?>

								</div>


							<?php } else { ?>

								<div class="col-lg-6 col-md-6">

									<nav>

									<?php wp_nav_menu(
										array(
											'menu' 					=> Bravostore()->alias . '-footer-menu',
											'theme_location' 		=> Bravostore()->alias . '-footer-menu',
											'menu_class' 			=> 'footer-menu-list',
											'fallback_cb'     		=> 'wp_page_menu',
											'depth'					=> 1
										)
									); ?>

									</nav>

								</div>

							<?php } ?>

							<div class="col-lg-6 col-md-6">

								<?php if( get_theme_mod( 'footer_copyright_text' ) ) { ?>
								
									<div class="impressum">

										<?php echo wp_kses( get_theme_mod( 'footer_copyright_text' ),
							                array(
							                    'a' => array(
							                        'href' => array(),
							                        'title' => array()
							                    ),
							                    'strong' => array(),
							                    'em' => array(),
							                    'br' => array(),
							                    'span' => array(),
							                )
							            ); ?>							
										
									</div>

								<?php } ?>

							</div>						

						</div>

					</div>
				</section>

			</div>
		</footer>

		<?php wp_footer(); ?>
	</body>
</html>