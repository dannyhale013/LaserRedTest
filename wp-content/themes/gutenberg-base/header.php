<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gutenberg-starter-theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.typekit.net/fig4ick.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header class="site-header">
		<div class="site-header__container ">
			<nav id="site-navigation" class="site-header__nav container">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'container_class' => 'nav-menu', 
						'menu_class' => 'nav-menu'
					) );
				?>
			</nav>
			<div class="site-header__mob-back">
				<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.69 7.47">
					<defs>
						<style>
						.cls-1 {
							fill: #001a2c;
						}
						</style>
					</defs>
					<path id="Arrow" class="cls-1" d="M.87,4.6l2.86,2.86h1.74s-3.11-3.11-3.11-3.11H13.69v-1.24H2.36S5.48,0,5.48,0h-1.74S0,3.73,0,3.73l.87,.87Z"/>
				</svg>
			</div>
			<div class="site-header__menu-toggle">
				<div class="hamburger">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</div>
	</header>
	<div class="hero" style="background-image:url('<?php if (get_field('background_image')) {echo get_field('background_image')['url']; }?>')">
		<div class="hero__inner container">
			<div class="hero__content">
				<?php if (get_field('hero_title')){?>
					<div class="hero__title">
						<h1><?php echo get_field('hero_title');?></h1>
					</div>
				<?php } 
				if (get_field('hero_subtitle')){?>
					<div class="hero__subtitle">
						<h2><?php echo get_field('hero_subtitle');?></h1>
					</div>
				<?php } ?>
			</div>
		</div>
		<div class="hero__ctas container">
			<?php $ctas = get_field('ctas');
			if ($ctas) {
				foreach ($ctas as $cta) { ?>
					<div class="hero__ctas-single" style="background-color: <?php if ($cta['cta_background_colour']){ echo $cta['cta_background_colour'];} ?>">
						<div class="hero__cta-image" style="background-image:url('<?php if ($cta['cta_image']){ echo $cta['cta_image']['url']; }?>')">
						</div>
						<a class="hero__cta-content" href="<?php if ($cta['cta_link']){ echo $cta['cta_link']; } ?>">
							<div class="hero__cta-title">
								<p><?php if ($cta['cta_title']){ echo $cta['cta_title']; } ?></p>
							</div>
							<div class="hero__cta-link">
								<p><?php if ($cta['cta_link_text']){ echo $cta['cta_link_text']; }?></p>
							</div>
						</a>
					</div>
				<?php }
			} ?>
		</div>
	</div>
	<?php if (get_field('button_text', 'option') && get_field('button_link', 'option') && get_field('button_mobile_text', 'option')) {?>
		<div class="sticky-button__container">
			<a href="<?php echo get_field('button_link', 'option'); ?>">
				<div class="sticky-button__arrow">
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						viewBox="0 0 13.7 7.5" style="enable-background:new 0 0 13.7 7.5;" xml:space="preserve">
						<style type="text/css">
							.st0{fill:#FFFFFF;}
						</style>
						<path id="Arrow" class="st0" d="M12.8,2.9L10,0H8.2l3.1,3.1H0v1.2h11.3L8.2,7.5H10l3.7-3.7L12.8,2.9z"/>
					</svg>
				</div>
				<div class="sticky-button__text">
					<p class="desktop"><?php echo get_field('button_text', 'option'); ?></p>
					<p class="mob"><?php echo get_field('button_mobile_text', 'option'); ?></p>
				</div>
			</a>
		</div>
	<?php } ?>