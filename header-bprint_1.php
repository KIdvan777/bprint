<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bprint
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header_1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 flex space-between center-vertical">
					<div class="header_1_logo">
						<h1>Bprint</h1>
					</div>
					<nav class="header_1_nav">
						<ul class="main_menu flex">
							<li><a href="#">HOME</a></li>
							<li><a href="#">FEAUTURES</a></li>
							<li><a href="#">SHOP</a></li>
							<li class="menu-item-has-children">
								<a href="#">PRODUCT</a>
								<i class="fas fa-caret-down"></i>
								<ul class="sub-menu col-md-12 flex">
									<li class="col-md-4 sub_menu_item flex">
										<div class="sub-menu_item_part">
											<img src="<?php echo get_template_directory_uri() . '/assets/img/lettering.png'?>"/>
										</div>
										<div class="sub-menu_item_part">
											<a href="#">
												<h5>link</h5>
											</a>
											<ul class="sub-menu level_2">
												<li><a href="#">link</a></li>
											</ul>
										</div>
									</li>
									<li class="col-md-4 sub_menu_item flex">
										<div class="sub-menu_item_part">
											<img src="<?php echo get_template_directory_uri() . '/assets/img/lettering.png'?>"/>
										</div>
										<div class="sub-menu_item_part">
											<a href="#">link</a>
											<a href="#">link</a>
											<a href="#">link</a>
											<a href="#">link</a>
											<a href="#">link</a>
										</div>
									</li>
									<li class="col-md-4 sub_menu_item flex">
										<div class="sub-menu_item_part">
											<img src="<?php echo get_template_directory_uri() . '/assets/img/lettering.png'?>"/>
										</div>
										<div class="sub-menu_item_part">
											<a href="#">link</a>
											<a href="#">link</a>
											<a href="#">link</a>
											<a href="#">link</a>
											<a href="#">link</a>
										</div>
									</li>
									<li class="col-md-4 sub_menu_item flex">
										<div class="sub-menu_item_part">
											<img src="<?php echo get_template_directory_uri() . '/assets/img/lettering.png'?>"/>
										</div>
										<div class="sub-menu_item_part">
											<a href="#">link</a>
											<a href="#">link</a>
											<a href="#">link</a>
											<a href="#">link</a>
											<a href="#">link</a>
										</div>
									</li>
									<li class="col-md-4 sub_menu_item flex">
										<div class="sub-menu_item_part">
											<img src="<?php echo get_template_directory_uri() . '/assets/img/lettering.png'?>"/>
										</div>
										<div class="sub-menu_item_part">
											<a href="#">link</a>
											<a href="#">link</a>
											<a href="#">link</a>
											<a href="#">link</a>
											<a href="#">link</a>
										</div>
									</li>
								</ul>
							</li>
							<li><a href="#">OUR GALLERY</a></li>
							<li><a href="#">START DESIGNING</a></li>
					</nav>
					<div class="header_1_right_side flex">
						<div class="auth">
							<i class="fas fa-lock"></i>
							Login/Register
						</div>
						<div class="shop_cart">
							<i class="fas fa-shopping-cart"></i>
							My Cart
						</div>
					</div>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->

	<div id="content" class="site-content">
