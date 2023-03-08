<?php 
$header_scripts = get_field('header_scripts', 'option');
$body_scripts = get_field('body_scripts', 'option');
$logo = get_field('logo', 'option');
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head();
    echo $header_scripts; ?>
</head>

<body>
    <?php echo $body_scripts ?>
    <div id="page" class="site">
        <header id="masthead" class="site-header sticky-header">
            <div class="container">
                <div class="site-branding">
                    <a href="<?php echo site_url(); ?>" rel="home" itemprop="url" class="site-logo" title="<?php esc_attr_e(get_bloginfo('name')); ?>">
                        <img src="<?php echo $logo['url'];?>" width="92" height="18" alt="<?php esc_attr_e(get_bloginfo('name')); ?>" itemprop="logo" class="main-logo" />
                    </a>
                </div><!-- .site-branding -->
                <div class="hamburger-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <div class="menu header-menu">
                    <nav>
                        <?php echo wp_nav_menu(array(
                            'theme_location' => 'primary-menu',
                            'add_a_class' => 'nav-item',
                            'container' => false
                        )); ?>

                        <?php if (!empty($cta)) : ?>
                            <a class="nav-item button btn" href="<?php echo $cta['url'] ?>" <?php echo ($cta['target']) ? 'target="_blank"' : ""; ?>><?php echo $cta['title'] ?></a>
                        <?php endif; ?>
                    </nav>
                </div>

            </div>
        </header>