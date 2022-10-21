<?php get_header(); ?>

<div class="common-body-class">
  <section class="common-header news-header">

    <svg class="top-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2600 131.1" preserveAspectRatio="none">
      <path class="elementor-shape-fill" d="M0 0L2600 0 2600 69.1 0 0z"></path>
      <path class="elementor-shape-fill" style="opacity:0.5" d="M0 0L2600 0 2600 69.1 0 69.1z"></path>
      <path class="elementor-shape-fill" style="opacity:0.25" d="M2600 0L0 0 0 130.1 2600 69.1z"></path>
    </svg>

    <svg class="bottom-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2600 131.1" preserveAspectRatio="none">
      <path class="elementor-shape-fill" d="M0 0L2600 0 2600 69.1 0 0z"></path>
      <path class="elementor-shape-fill" style="opacity:0.5" d="M0 0L2600 0 2600 69.1 0 69.1z"></path>
      <path class="elementor-shape-fill" style="opacity:0.25" d="M2600 0L0 0 0 130.1 2600 69.1z"></path>
    </svg>

    <div class="container display-flex">
      <div class="left"></div>
      <div class="right">
        <h2 class="common-h2">services</h2>
        <h3 class="common-sub-title">サービス</h3>
      </div>
    </div>
  </section>

  <section class="service-container container">
    <p class="top-p">ブランドが持つ課題に対し、マーケティング戦略から、UI/UX設計、<br>グラフィックデザインまでカスタマーエクスペリエンスを追求し問題解決へアプローチします。
    </p>

    <div class="service-wrapper">
      <div class="service-flex">
        <div class="service-box">
          <a href="<?php echo esc_url(home_url()); ?>/web_building">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/service/sr1.png" alt="">
          </a>
          <h2>web制作</h2>
          <p>ユーザーユーザビリティなどを意識したホームページを作成します。</p>
        </div>

        <div class="service-box">
          <a href="<?php echo esc_url(home_url()); ?>/web_management">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/service/sr2.png" alt="">
          </a>
          <h2>webサイト運用</h2>
          <p>独自のSEO対策などを用いたページ運用行います。</p>
        </div>

        <div class="service-box">
          <a href="<?php echo esc_url(home_url()); ?>/sns_management">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/service/sr3.png" alt="">
          </a>
          <h2>sns運用</h2>
          <p>SNSを用いた独自の集客や宣伝を行います。</p>
        </div>

        <div class="service-box">
          <a href="<?php echo esc_url(home_url()); ?>/branding">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/service/sr4.png" alt="">
          </a>
          <h2>ブランディング</h2>
          <p>広告から採用などブランディングを行います。ユーザーユーザビリティなどを意識したホームページを作成します。</p>
        </div>

        <div class="service-box">
          <a href="<?php echo esc_url(home_url()); ?>/service">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/service/sr5.png" alt="">
          </a>
          <h2>広告運用</h2>
          <p>google広告からsns広告まで幅広い広告に対応します。</p>
        </div>

        <div class="service-box">
          <a href="<?php echo esc_url(home_url()); ?>/service/writing">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/service/sr6.png" alt="">
          </a>
          <h2>ライティング</h2>
          <p>優秀なライターさんが在籍しており、seoを考慮した記事作成を承ります。</p>
        </div>

      </div>

      <div class="elementor-hacks">
        <h2 class="el-title">Elementor Hacks</h2>
        <hr class="el-hr">
        <p class="el-font">Wordpressノーコードプラグイン「Elementor」に特化したサービス</p>

        <div class="elementor-flex">
          <div class="elementor-box">
            <a href="https://elementor-hacks.com/" target="_blank">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/service/el1.jpg" alt="">
            </a>
            <h2>web制作</h2>
            <p>ユーザーユーザビリティなどを意識したホームページを作成します。</p>
          </div>

          <div class="elementor-box">
            <a href="https://elementor-hacks.com/member-join" target="_blank">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/service/el2.jpg" alt="">
            </a>
            <h2>Elementor Hacks Community</h2>
            <p>Elementorのわからないを解決する、日本最大級のElementorコミュニティです。</p>
          </div>

          <div class="elementor-box">
            <a href="https://design.elementor-hacks.com/" target="_blank">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/service/el3.jpg" alt="">
            </a>
            <h2>Design Hacks</h2>
            <p>Elementorで作られたサイトを紹介するデザイン集サイトです。</p>
          </div>

          <div class="elementor-box">
            <a href="https://creative.elementor-hacks.com/" target="_blank">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/service/el4.jpg" alt="">
            </a>
            <h2>Creative Hacks</h2>
            <p>ユーザーユーザビリティなどを意識したホームページを作成します。</p>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>

<?php get_footer() ?>