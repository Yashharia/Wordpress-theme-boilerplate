<?php $header_scripts = get_field('header_scripts', 'option');
$body_scripts = get_field('body_scripts', 'option'); ?>
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