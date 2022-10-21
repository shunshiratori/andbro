<?php get_header(); ?>

<div class="common-body-class">
  <section class="common-header service-header">

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
        <h2 class="common-h2">Web<br>Management</h2>
        <h3 class="common-sub-title">webサイト運用</h3>
      </div>
    </div>
  </section>

  <section class="service-container m-container">
    <p class="top-p">
      ペルソナ設定からキーワード選定までSEO対策はお任せください。<br>また、画像の表示がおかしいやドメインが消えているなど、あなたのページが常に稼働するように見守ります。</p>

    <div class="service-wrapper">
      <h2>特徴</h2>
      <div class="service-flex">
        <div class="service-box">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/web_management/sr1.png" alt="">
          <h3>SEO順位チェック</h3>
          <p>サイトにあるページごとのSEO順位を確認し、変動などがある場合は調査を行います。</p>
        </div>

        <div class="service-box">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/web_management/sr2.png" alt="">
          <h3>Googleサーチコンソール<br>によるサイト評価調査</h3>
          <p>サイトとGoogleコンソールを連動させ、Google内での評価を常に確認します。</p>
        </div>

        <div class="service-box">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/web_management/sr3.png" alt="">
          <h3>Googleアナリティクス<br>による効果観測の補助</h3>
          <p>サイトとGoogleアナリティクスを連動させ、ページごとのユーザーの移動などを確認します。</p>
        </div>

        <div class="service-box">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/web_management/sr4.png" alt="">
          <h3>サイトスピードの<br>高速化調整作業</h3>
          <p>不要や使用していないツールを除くなどして、サイトがスムーズに稼働するようにします。</p>
        </div>

        <div class="service-box">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/web_management/sr5.png" alt="">
          <h3>評価診断ツールによる 価値判定レポート</h3>
          <p>外部ツールを用いてそれぞれのページの評価を確認し、レポートします。</p>
        </div>

        <div class="service-box">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/web_management/sr6.png" alt="">
          <h3>コンテンツ更新環境整備を<br>目的としたシステムの導入</h3>
          <p>wpは常に内部アップデートが行われます。ページが常に最新の状態を維持させます。</p>
        </div>

        <div class="service-box">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/web_management/sr7.png" alt="">
          <h3>コンテンツページの<br>作成、調整作業</h3>
          <p>キーワード選定やユーザーの検索を確認しながらブログや記事を作成します。</p>
        </div>

        <div class="service-box">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/web_management/sr8.png" alt="">
          <h3>毎月のご報告と対策案のご提出</h3>
          <p>SEO対策とは常に変動していくため、サイトのご報告とともに、今後の方針もご提案していきます。</p>
        </div>
      </div>
    </div>

    <div class="service-wrapper">
      <h2>実績</h2>

      <ul class="post-loop">
        <?php
        $cat_posts = get_posts(array(
          'post_type' => 'works', // 投稿タイプ
          'category_name' => 'web-management', // カテゴリをスラッグで指定する場合
          'posts_per_page' => 99, // 表示件数
          'orderby' => 'date', // 表示順の基準
          'order' => 'DESC' // 昇順・降順
        ));
        global $post;
        if ($cat_posts) : foreach ($cat_posts as $post) : setup_postdata($post); ?>

        <!-- ループはじめ -->
        <li>
          <a href="<?php the_permalink(); ?>" class="h-img-link">
            <div class="post-loop-box">
              <div class="h-img-wrap">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
              </div>
              <div class="post-loop__date">
                <h2><?php the_title(); ?></h2>
              </div>
              <div class="loop-time">
                <span class="post-loop__date-inner"><?php echo get_the_date('Y.m.d'); ?></span>
              </div>
            </div>
          </a>
        </li>
        <!-- ループおわり -->

        <?php endforeach;
        endif;
        wp_reset_postdata(); ?>
      </ul>
    </div>
  </section>
</div>

<?php get_footer(); ?>