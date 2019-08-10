<!DOCTYPE html>
<html <?php language_attributes(); ?> itemscope itemtype="http://schema.org/WebPage">
<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="//gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>" />

<?php if(is_front_page() || is_home()){ ?>
<script language="javascript">
document.title = "Baby Strollers| Strollers Replacements Parts| Strollers Accessories";
</script>
<?php } ?> 
<?php wp_head(); ?>   
<?php if(is_front_page() || is_home()){ ?>
<script language="javascript">
document.title = "Baby Strollers| Strollers Replacements Parts| Strollers Accessories";
</script>
<?php } ?>
     
</head>

<body <?php body_class(); ?>>

<div class="bravo-menu-effect"></div>

<header>
	<div class="container-fluid-extender">
		<section class="header-top" style="padding-top:0px; padding-bottom:0px">
			<div class="container-fluid">
				

				<div class="row row-eq-height">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 top-message">

						<div class="top-message-inner">

							<?php if ( is_user_logged_in() ) { ?>

								<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" rel="nofollow"><?php esc_html_e('My Account', 'bravostore'); ?></a>

							<?php } else { ?>

								<?php esc_html_e('Welcome guest, you can ', 'bravostore'); ?>
								<a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" rel="nofollow"><?php esc_html_e('Login', 'bravostore'); ?></a><?php esc_html_e(' or ', 'bravostore'); ?>
								<a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" rel="nofollow"><?php esc_html_e('Create a new account', 'bravostore'); ?></a>

							<?php } ?>

						</div>
						
						<div class="top-menu">
							<nav>
	
							<?php wp_nav_menu(
								array(
									'menu' 					=> Bravostore()->alias . '-top-menu',
									'theme_location' 		=> Bravostore()->alias . '-top-menu',
									'menu_class' 			=> 'top-menu-list',
									'fallback_cb'     		=> 'wp_page_menu',
									'depth'					=> 1
								)
							); ?> 
							
							</nav>
						</div>

					</div>
				</div>


			</div>
		</section>
		<section class="header-content" style="padding:0px">
			<div class="container-fluid">
				
				<div class="row">
					<div class="col-lg-3 col-md-3 logo">
						<a href="<?php echo esc_url( home_url('/') ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
							<?php if ( get_theme_mod( 'logo' ) ) { ?>
								<img src="<?php echo esc_url( get_theme_mod( 'logo' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
							<?php } else {
								?>
								<img src="<?php echo esc_url( get_template_directory_uri() . '/images/logo.png' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
							<?php } ?>
						</a>						
					</div>
					<div class="col-lg-9 col-md-9">
                    
                    
                    
                    
      <!-- ....................................................-->             
                    
                    
              <!--      <img style="float:left" class="wp-image-1134 size-full aligncenter" src="http://demo.aa-team.com/tf/bravostore/wp-content/uploads/2017/07/banner_blog.jpg" alt="" width="730" height="90">-->
                    
                    
                    
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- bicycleorbit-main -->
<ins class="adsbygoogle"
     style="display:block; width:90%"
     data-ad-client="ca-pub-3116526215421791"
     data-ad-slot="9330674585"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
                    
                    
                    
      <!-- ....................................................-->              
                    


					<?php if( BravoStore()->is_woo_activated() ) { ?>


						<div class="shopping-cart" style="display:none">

							<a class="cart-contents" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'bravostore' ); ?>"><i class="mi-icon mi-icon-cart5"></i></a>

							<?php global $woocommerce; ?>

							<div class="minicart-wrapper">
						    	<div class="minicart-inner-wrapper">
						    		<?php wc_get_template( 'cart/mini-cart.php' ); ?>
						    	</div>
						  	</div>
						
						</div>

					
					<?php } ?>



					<?php if( get_theme_mod( 'header_banner' ) ) { ?>

						<div class="top-banner">
							<?php echo get_theme_mod( 'header_banner' ); ?>
						</div>
					
					<?php } ?>


					</div>
				</div>

			</div>
		</section>
		<section class="header-nav">
			<div class="container-fluid bravo-relanav">

				<?php if( ( Bravostore()->alias . '-main-menu' ) || ( Bravostore()->alias . '-alternate-menu' ) ) { ?>

				<nav class="navigationbar <?php echo has_nav_menu( Bravostore()->alias . '-alternate-menu' ) ? 'bravo-has-alternate-nav' : ''; ?>" >

				<?php 

				if( has_nav_menu( Bravostore()->alias . '-alternate-menu' ) ) {

					$menu_name = Bravostore()->alias . '-alternate-menu';
					$locations = get_nav_menu_locations();
					$menu_id = $locations[ $menu_name ] ;
					$menu = wp_get_nav_menu_object($menu_id);
					
					echo '<div id="alternate_menu" style="width:20%"><span>' . ( $menu->name ) . '</span>';

					wp_nav_menu(
						array(
							'theme_location' => Bravostore()->alias . '-alternate-menu',
							'menu_class' => 'bravo-alternate-menu ' . ( get_theme_mod('enable_display') == 'YES' ? "bravo_default_open_hp" : '') . '',
							'walker' => new bravostore_themeWalkerMainNav() 
							)
						);

					echo '</div>';

				}

				if( has_nav_menu( Bravostore()->alias . '-main-menu' ) ) { ?>

					<?php wp_nav_menu(
						array(
							'menu' 					=> Bravostore()->alias . '-main-menu',
							'theme_location' 		=> Bravostore()->alias . '-main-menu',
							'menu_class' 			=> 'sf-menu',
							'walker' => new bravostore_themeWalkerMainNav()
						)
					); ?>					

					<div class="responsive-menu">
						<span class="rm-text"><?php esc_html_e('Menu', 'bravostore'); ?></span>
					</div>

				<?php } ?>

				</nav>

				<?php } ?>


				<div class="main-search-wrapper">

					<button id="btn-search" class="btn btn--search">
						<i class="mi-icon mi-icon-search3"></i>
					</button>

					<div class="search-overlay">

						<button id="btn-search-close" class="btn btn--search-close" aria-label="<?php esc_html_e('Close search form', 'bravostore'); ?>">
							<i class="mi-icon mi-icon-cross2"></i>
						</button>

						<form role="search" method="get" class="search__form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
							<input class="search__input" name="s" type="search" placeholder="<?php esc_html_e('Search Site...', 'bravostore'); ?>" autocomplete="off"  title="<?php esc_attr_e('Search Site...', 'bravostore'); ?>" />
							<span class="search__info"><?php esc_html_e('Hit enter to search or ESC to close', 'bravostore'); ?></span>
						</form>

					</div>

				</div>

			</div>
		</section>

	</div>
 	
</header>


<?php 

if( is_page_template('template-homepage.php') ) { ?>


<!--.................................................-->

<?php /*?><section>

    <?php if(function_exists('putRevSlider')) { ?>
		
    	<div class="bravostore-slider">
			<?php putRevslider( 'bravohome' ); ?>
		</div>

    <?php } else { ?>

		<div class="bravostore-noslider">

        	<div class="container-fluid">
				<?php esc_html_e('Please install, activate and configure the Slider Revolution plugin in order to use the slider.', 'bravostore'); ?>
            </div>

        </div>

	<?php } ?>

</section><?php */?>

<!--.................................................-->


<?php } else { ?>

	<?php if(!is_front_page()) { ?>

		<?php if ( !is_page_template( 'template-fullwidth-nobreadcrumbs.php' ) ) { ?>

		<div class="bravostore-wrapper">
			<div class="container-fluid-extender">
				<section class="aa-breadcrumbs-section" style="padding:7px 0 6px 0">

					<div class="container-fluid">
						<?php echo Bravostore()->display_breadcrumbs(); ?>
					</div>

				</section>
			</div>
		</div>	

		<?php } ?>

	<?php } ?>

<?php } ?>



<?php if( BravoStore()->is_woo_activated() ) { ?>
	
	<?php if ( is_shop() && is_active_sidebar('shop-top-area') ) { ?>
		
		<div class="bravostore-wrapper">
			<div class="container-fluid-extender">
				<section class="top-shop-section">

					<div class="container-fluid">
					
						<?php dynamic_sidebar( 'shop-top-area' ); ?>

					</div>

				</section>
			</div>
		</div>

	<?php } else { ?>

		<!--<div class="top-shop-section-space"></div>-->

	<?php } ?>
<?php } ?>