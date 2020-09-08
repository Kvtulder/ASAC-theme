<!doctype html>
<html lang="nl">
	<head>
    	<title><?php bloginfo('name');?></title>
        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
		 <?php wp_head(); ?>
         <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	</head>
    
    <body>

    <div id="wrap">
        <header>
                <a href="<?php echo get_option('home'); ?>"><img width="135" src="<?php echo(get_template_directory_uri()) ?>/images/logo.png" alt="ASAC"></a>  
                <div id="mobile-menu">
                <a href="<?php echo get_option('home'); ?>" id="home-link">Home</a>
                <a id='hamburger-icon' role="button">&#9776;</a>
                </div>
            </a>
            
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
            <ul id="menu-headermenu" class="menu"><li><a href="<?php if ( is_user_logged_in() ) { echo(get_home_url() . "/user/"); } else { echo wp_login_url(); }?>"><?php if (is_user_logged_in()) { echo("Je profiel");} else { echo("Log in");}?></a>
								<ul class="sub-menu">
					<li class="menu-item"><a href="<?php if ( is_user_logged_in() ) { echo(get_home_url() . "/user/"); } else { echo wp_login_url(); }?>"><?php if (is_user_logged_in()) { echo("Je profiel");} else { echo("Log in");}?></a></li>
				</ul></li>
				
				<?php if (is_user_logged_in()): ?>
				<ul class="sub-menu">
					<li class="menu-item"><a href="<?php echo wp_logout_url();?>">Log uit</a></li>
				</ul></li>
				<?php endif ?>

        </header>
        
        <?php if (is_home()): ?>
		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('slider'))?>
        <div id="sliderbar"><p class="container"><?php bloginfo('description');?></p></div>
        <?php else: ?>
        <div id="crum"><p class="container"><?php bloginfo('name');?><?php wp_title() ?></p></div>
        <?php endif ?>

