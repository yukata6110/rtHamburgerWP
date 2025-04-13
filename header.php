<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">  //言語設定を自動的に出力
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", initial scale="1.0">
        <meta name="description" content="ハンバーガーサイト">

        <?php wp_head(); ?>
    </head>
    <body> 
        <div class="c-container js-container">
            <div class="c-wrapper">   
                <header class="l-header c-item-center p-header">
                    <p class="c-fontfam-en p-header-logo"><a href="<?php echo esc_url( home_url('/')); ?>"><?php bloginfo( 'name' ); ?></p>
                    <?php get_search_form(); ?>
                </header>
