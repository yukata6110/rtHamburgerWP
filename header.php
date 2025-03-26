<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", initial scale="1.0">
        <meta name="description" content="ハンバーガーサイト">
        <title>ハンバーガーサイト</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link href=".css/ress.css" rel="stylesheet">
        <link href="./css/style.css" rel="stylesheet">
        <link href="./css/all.min.css" rel="stylesheet">
        <script src="./js/main.js" defer></script>

        <?php wp_head(); ?>
    </head>
    <body> 
        <div class="c-container js-container">
            <div class="c-wrapper">   
                <header class="l-header c-item-center p-header">
                    <p class="c-fontfam-en p-header-logo"><a href="<?php echo esc_url( home_url('/')); ?>"><?php bloginfo( 'name' ); ?></p>
                    <?php get_search_form(); ?>
                </header>
