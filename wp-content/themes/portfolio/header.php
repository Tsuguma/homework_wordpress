<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php bloginfo('name') ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<?php 
	    wp_head();
    ?>
</head>	
<body <?php body_class(); ?>>
	<header>
		<div class='header-left'>
			<span>Portfolio</span>
		</div>
	  <ul class="header-right">
			<li>Menu</li>
			<li><?php 
            $args = [
                'menu' => 'navigation',            
            ];
            wp_nav_menu($args);
         ?></li>
		</ul>

	</header>
