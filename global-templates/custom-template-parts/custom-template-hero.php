<?php
/**
 * The template for displaying the hero in main page.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
$heroImg = get_theme_mod( 'galleriari_hero_image_setting' );
$heroVid = get_theme_mod( 'galleriari_hero_video_setting' );
$heroTitle = get_theme_mod( 'galleriari_hero_title' );
$heroText = get_theme_mod( 'galleriari_hero_text_setting' );
$heroBtn1Text = get_theme_mod( 'galleriari_hero_button1_text_setting' );
$heroBtn1Url = get_theme_mod( 'galleriari_hero_button1_url_setting' );
?>

<div class="wrapper" id="wrapper-hero">
    <div class="hero-image-container" style="z-index: 0;">
    <div class="hero-video">
        <video class="video" playsinline="playsinline" autoplay="autoplay" muted="muted" poster="<?php echo esc_attr( $heroImg ); ?>" style="width:100%; height:100%;">
            <source src="<?php echo esc_attr( $heroVid ); ?>" type="video/mp4">
        </video>
    </div>

        <div class="hero-banner-content-container">
            <h1 class="hero-banner-title">
                <?php echo esc_attr( $heroTitle ); ?>
            </h1>
            <h2 class="hero-banner-subtitle">
                <?php echo esc_attr( $heroText ); ?>
            </h2>
            <div class="hero-banner-button">
                <a href="<?php echo esc_attr( $heroBtn1Url ); ?>"  class="btn btn-light hero-banner-button btn-light" >
					<?php echo esc_attr( $heroBtn1Text ); ?>
				</a>
            </div>
        </div>
    </div>
</div>

<!-- HERO wrapper end -->