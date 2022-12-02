<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_body_open(); ?>
    <!-- <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri()?>/style.css"> -->
    <link rel="shortcut icon" href=""/>
    <link rel="stylesheet" href="<?= get_template_directory_uri()?>/webfiles/js/OwlCarousel/dist/assets/owl.carousel.min.css"><!--Récupère l'URI=(url) du répertoire de modèles pour le thème actif. -->
    <link rel="stylesheet" href="<?= get_template_directory_uri()?>/webfiles/js/OwlCarousel/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri()?>/webfiles/style.css">


    <?php wp_head() ?>
</head>
<body>
	<header>
        <div>
            <?php 
            $image=get_field('image_header_1');
            $size='full';
            if( !empty( $image ) ): ?>
                <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" />
            <?php endif; ?>
		    <br><h1><?= get_field('titre_header_1') ?></h1>
        </div>
        <?php 
        $image=get_field('image_header_2');
        $size='full';
        if( !empty( $image ) ): ?>
            <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <h2><?= get_field('titre_header_2')
        ?></h2>
		<p><?= get_field('texte_header_1')
        ?></p>        
	</header>
