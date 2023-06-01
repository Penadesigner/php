<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<?php wp_head(); ?>
	
</head>
<body <?php body_class(); ?>>


<header>
	<div id="barra-topo" class="barra-topo">
		<div class="container">
			<div class="row">
				<div class="redes-sociais col-md-10"><button id="rs">modo escuro</button></div>
				<div class="pesquisa col-md-2 text-right">
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>

	</div>

	<div id="area-menu" class="area-menu">
		<div class="container">
			<div class="row">
				<div class="logo col-md-2 col-sm-2 col-xs-12 text-center"><?php 
				if ( function_exists( 'the_custom_logo' ) ) : the_custom_logo(); endif;?>
				</div>
				<div class="menu-principal col-md-10 col-sm-10 text-right">
					<?php wp_nav_menu( array( 'theme_location' => 'meu_menu_principal') ); ?>
				</div>
			</div>
		</div>
	</div>
	
</header>
