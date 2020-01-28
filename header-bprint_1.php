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
                <div class="col-md-12 flex center space-between">
					<div class="header_1_logo">
						<h1>Bprint</h1>
					</div>
					<nav class="header_1_nav">
						<ul class="main_menu flex align">
							<li><a href="#">HOME</a></li>
							<li><a href="#">FEAUTURES</a></li>
							<li><a href="#">SHOP</a></li>
							<li><a href="#">PRODUCT</a></li>
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
