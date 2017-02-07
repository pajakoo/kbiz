<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
<!--    <link rel="stylesheet" href="https://i.icomoon.io/public/temp/fbec56d445/KBIZ/style.css">-->

    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php include(get_template_directory() . '/kbiz-header.php'); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<nav class="navbar navbar-inverse sidebar " role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>



            <a class="navbar-brand" href="<?php echo get_post_permalink( get_page_by_title('Business Directory')->ID ) ; ?>">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="482.963px" height="137.998px" viewBox="0 0 482.963 137.998" style="enable-background:new 0 0 482.963 137.998;"
                     xml:space="preserve">
<path style="fill-rule:evenodd;clip-rule:evenodd;fill:#F6A71C;" d="M119.969,55.266h9.587V28.777h0.533l23.37,26.488h13.47
	l-26.866-29l25.191-24.889h-12.937l-22.302,22.836h-0.46V1.377h-9.587V55.266L119.969,55.266z M166.092,55.266l23.443-53.889h8.299
	l23.213,53.889h-10.958l-5.023-12.329h-23.37l-4.876,12.329H166.092L166.092,55.266z M184.971,34.711h16.745l-8.299-21.916
	L184.971,34.711L184.971,34.711z M227.064,55.266h9.587V32.43h7.002l12.485,22.836h11.565l-14.308-23.82
	c7.996-1.15,12.485-6.854,12.485-14.62c0-12.1-9.743-15.448-20.094-15.448h-18.724V55.266L227.064,55.266z M236.651,24.213V9.594
	h8.299c4.94,0,10.885,0.764,10.885,7.158c0,7.001-6.321,7.461-11.722,7.461H236.651L236.651,24.213z M275.019,55.266h32.496v-8.677
	h-22.909V1.377h-9.587V55.266L275.019,55.266z M311.628,28.547c0,16.828,11.878,28.09,28.467,28.09
	c16.828-0.304,28.697-11.575,28.697-28.394c0-17.279-11.869-28.541-28.697-28.237C323.506,0.006,311.628,11.268,311.628,28.547
	L311.628,28.547z M321.675,27.939c0-10.728,7.389-19.257,18.503-19.257c11.188,0,18.566,8.529,18.566,19.257
	c0,11.492-7.379,20.021-18.566,20.021C329.063,47.96,321.675,39.432,321.675,27.939L321.675,27.939z M392.842,55.266h8.3
	L422.91,1.377H412.56L397.406,42.1L382.722,1.377h-11.041L392.842,55.266L392.842,55.266z M425.799,28.547
	c0,16.828,11.879,28.09,28.467,28.09c16.828-0.304,28.697-11.575,28.697-28.394c0-17.279-11.869-28.541-28.697-28.237
	C437.678,0.006,425.799,11.268,425.799,28.547L425.799,28.547z M435.847,27.939c0-10.728,7.388-19.257,18.502-19.257
	c11.188,0,18.567,8.529,18.567,19.257c0,11.492-7.379,20.021-18.567,20.021C443.234,47.96,435.847,39.432,435.847,27.939z"/>
                    <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;" d="M119.969,136.627h19.404c10.203,0,20.397-3.652,20.397-15.374
	c0-6.928-4.867-12.255-11.639-13.019v-0.147c5.557-1.675,9.356-5.714,9.356-11.805c0-9.817-8.372-13.543-16.515-13.543h-21.005
	V136.627L119.969,136.627z M129.556,90.955h7.912c7.231,0,10.434,2.281,10.434,6.929c0,4.039-3.202,6.771-9.596,6.771h-8.75V90.955
	L129.556,90.955z M129.556,112.88h9.209c7.766,0,11.419,1.979,11.419,7.609c0,7.085-6.854,7.922-11.796,7.922h-8.832V112.88
	L129.556,112.88z M212.444,82.739h-9.587v33.794c0,5.327-2.89,12.329-12.099,12.329c-9.21,0-12.108-7.002-12.108-12.329V82.739
	h-9.587v34.098c0,13.019,9.356,21.161,21.695,21.161c12.328,0,21.686-8.143,21.686-21.161V82.739L212.444,82.739z M257.656,86.925
	c-4.187-3.956-9.816-5.557-15.447-5.557c-9.974,0-19.865,5.171-19.865,16.285c0,19.257,25.569,12.485,25.569,24.28
	c0,4.95-5.023,7.389-9.431,7.389c-4.27,0-8.299-2.062-10.664-5.631l-7.231,7.002c4.416,5.253,10.967,7.305,17.665,7.305
	c10.581,0,19.717-5.631,19.717-17.205c0-19.184-25.577-13.01-25.577-23.82c0-4.95,4.416-6.929,8.823-6.929
	c3.735,0,7.389,1.371,9.439,4.26L257.656,86.925L257.656,86.925z M267.713,136.627h9.587V82.739h-9.587V136.627L267.713,136.627z
	 M289.104,136.627h9.587V95.298h0.156l26.637,41.329h12.182V82.739h-9.597v40.031h-0.147l-26.111-40.031h-12.706V136.627
	L289.104,136.627z M349.691,136.627h37.069v-8.676h-27.482v-14.62h24.74v-8.676h-24.74v-13.24h26.111v-8.676h-35.698V136.627
	L349.691,136.627z M429.608,86.925c-4.187-3.956-9.817-5.557-15.448-5.557c-9.974,0-19.864,5.171-19.864,16.285
	c0,19.257,25.568,12.485,25.568,24.28c0,4.95-5.023,7.389-9.431,7.389c-4.269,0-8.299-2.062-10.663-5.631l-7.231,7.002
	c4.416,5.253,10.967,7.305,17.665,7.305c10.581,0,19.717-5.631,19.717-17.205c0-19.184-25.578-13.01-25.578-23.82
	c0-4.95,4.417-6.929,8.824-6.929c3.735,0,7.388,1.371,9.439,4.26L429.608,86.925L429.608,86.925z M473.303,86.925
	c-4.187-3.956-9.817-5.557-15.448-5.557c-9.974,0-19.864,5.171-19.864,16.285c0,19.257,25.568,12.485,25.568,24.28
	c0,4.95-5.023,7.389-9.431,7.389c-4.269,0-8.299-2.062-10.663-5.631l-7.232,7.002c4.417,5.253,10.968,7.305,17.666,7.305
	c10.58,0,19.717-5.631,19.717-17.205c0-19.184-25.578-13.01-25.578-23.82c0-4.95,4.416-6.929,8.823-6.929
	c3.736,0,7.389,1.371,9.44,4.26L473.303,86.925z"/>
                    <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#F6A71C;" d="M43.911,0.425c0,24.252-19.659,43.912-43.911,43.912v16.191
	c33.074,0,60.103-26.848,60.103-60.104H43.911z"/>
                    <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;" d="M76.799,0.425c-0.17,23.687-11.16,45.685-29.69,60.104
	c-3.962,3.081-8.234,5.775-12.763,8.043c-0.012,0.006,11.061,6.733,12.811,8.097C66.532,91.761,76.8,112.709,76.8,137.291h16.138
	c0-25.499-11.214-51.413-30.04-68.718c2.841-2.627,5.49-5.095,7.994-8.045C85.173,43.704,92.938,22.489,92.938,0.425H76.799z"/>
                    <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#F6A71C;" d="M0.316,76.612L0,76.613v16.766
	c24.252,0,43.911,19.659,43.911,43.912h16.189C60.229,103.973,33.717,76.796,0.316,76.612z"/>
</svg>

            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_class'     => 'primary-menu',
            ) );
            ?>

        </div>
    </div>
</nav>

<div id="page" class="site container">
	<div class="site-inner">
<!--		<a class="skip-link screen-reader-text" href="#content">--><?php //_e( 'Skip to content', 'twentysixteen' ); ?><!--</a>-->
		<header id="masthead" class="site-header" role="banner">
			<div class="site-header-main">
				<!--<div class="site-branding">
					<?php /*twentysixteen_the_custom_logo(); */?>

					<?php /*if ( is_front_page() && is_home() ) : */?>
						<h1 class="site-title"><a href="<?php /*echo esc_url( home_url( '/' ) ); */?>" rel="home"><?php /*bloginfo( 'name' ); */?></a></h1>
					<?php /*else : */?>
						<p class="site-title"><a href="<?php /*echo esc_url( home_url( '/' ) ); */?>" rel="home"><?php /*bloginfo( 'name' ); */?></a></p>
					<?php /*endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : */?>
						<p class="site-description"><?php /*echo $description; */?></p>
					<?php /*endif; */?>
				</div><!-- .site-branding -->

				<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
					<button id="menu-toggle" class="menu-toggle"><?php _e( 'Menu', 'twentysixteen' ); ?></button>

					<div id="site-header-menu" class="site-header-menu">
						<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
									 ) );
								?>
							</nav><!-- .main-navigation -->
						<?php endif; ?>

						<?php if ( has_nav_menu( 'social' ) ) : ?>
							<nav id="social-navigation" class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'social',
										'menu_class'     => 'social-links-menu',
										'depth'          => 1,
										'link_before'    => '<span class="screen-reader-text">',
										'link_after'     => '</span>',
									) );
								?>
							</nav><!-- .social-navigation -->
						<?php endif; ?>
					</div><!-- .site-header-menu -->
				<?php endif; ?>
			</div><!-- .site-header-main -->

			<?php if ( get_header_image() ) : ?>
				<?php
					/**
					 * Filter the default twentysixteen custom header sizes attribute.
					 *
					 * @since Twenty Sixteen 1.0
					 *
					 * @param string $custom_header_sizes sizes attribute
					 * for Custom Header. Default '(max-width: 709px) 85vw,
					 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
					 */
					$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
				?>
				<div class="header-image">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
				</div><!-- .header-image -->
			<?php endif; // End header image check. ?>
		</header><!-- .site-header -->

		<div id="content" class="site-content">
