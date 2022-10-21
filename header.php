<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package andbro
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php add_css_js(); ?>
  <?php wp_head(); ?>

  <!-- Google font Icon -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600&display=swap" rel="stylesheet">

  <!-- icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <!-- swiper -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
  <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'andbro'); ?></a>

    <header class="site-header header" id="masthead">
      <div class="display-flex">
        <div class="left">
          <a href="<?php echo esc_url(home_url()); ?>" class="custom-logo-link" rel="home" aria-current="page">
            <img width="470" height="84" src="<?php bloginfo('template_url'); ?>/assets/img/header-logo.png"
              class="custom-logo" alt="">
          </a>
        </div>

        <div class="right header-right">
          <nav id="site-navigation" class="main-navigation pc">
            <div class="menu-gnav-container">

              <!-- menu -->
              <ul id="primary-menu" class="main-menu d-flex">
                <?php wp_nav_menu(
                  array(
                    'theme_location' => 'global',
                    'container' => false,
                    'fallback_cb' => false,
                    'items_wrap' => '%3$s',
                  )
                ); ?>
              </ul>

            </div>
          </nav>

          <div class="hamburger-list">
            <div class="hamburger">
              <span></span>
              <span></span>
              <span></span>
            </div>

            <nav class="globalMenuSp">
              <div class="humberger-flex">
                <div class="humberger-flex-left"></div>

                <div class="humberger-flex-right">
                  <div class="humberger-flex-right_list">
                    <ul class="list-wrap">
                      <li><a href="<?php echo esc_url(home_url()); ?>/company"><span class="under-line">About
                            us</span><br><span class="small">ANDBROについて</span></a>
                      </li>
                      <li><a href="<?php echo esc_url(home_url()); ?>/company/andbro-is"><span
                            class="under-line">Mission</span><br><span class="small">ミッション</span></a>
                      </li>
                      <li><a href="<?php echo esc_url(home_url()); ?>/service"><span
                            class="under-line">Service</span><br><span class="small">事業紹介</span></a></li>
                      <li><a href="<?php echo esc_url(home_url()); ?>/news"><span
                            class="under-line">News</span><br><span class="small">ニュース</span></a></li>
                    </ul>
                    <ul class="list-wrap">
                      <li><a href="<?php echo esc_url(home_url()); ?>/company"><span
                            class="under-line">Company</span><br><span class="small">会社案内</span></a></li>
                      <li><a href="<?php echo esc_url(home_url()); ?>/contact"><span
                            class="under-line">Contact</span><br><span class="small">お問い合わせ</span></a></li>
                      <li><a href="<?php echo esc_url(home_url()); ?>/work"><span
                            class="under-line">Work</span><br><span class="small">制作実績</span></a></li>
                      <li><a tabindex="-1"><span class="under-line">Recruit</span><br><span
                            class="small">採用情報</span></a></li>

                    </ul>
                  </div>

                  <div class="humberger-flex-bottom">
                    <div class="humberger-flex-bottom_txt">
                      <a href="<?php echo esc_url(home_url()); ?>/security-policy">情報セキュリティ基本方針</a>
                      <a href="<?php echo esc_url(home_url()); ?>/privacy-policy">プライバシーポリシー</a>
                    </div>

                    <hr>

                    <p class="copyright">©︎2022 ANDBRO Inc.</p>
                  </div>

                </div>
              </div>

            </nav>
          </div>

        </div>

      </div>

    </header><!-- #masthead -->