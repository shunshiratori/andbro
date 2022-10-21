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
        <h2 class="common-h2">Web<br>Production</h2>
        <h3 class="common-sub-title">Webサイト制作</h3>
      </div>
    </div>
  </section>

  <section class="service-container m-container">
    <p class="top-p">
      ウェブサイトを考えるときユーザーインターフェース(UI)や、ユーザーエクスペリエンス(UX)の重要性を語ることは今や当たり前の時代かもしれません。<br>ウェブサイトを構築する上で最も大切なのは、ユーザビリティとアクセシビリティです。
    </p>

    <div class="service-wrapper">
      <h2>特徴</h2>
      <div class="service-flex">
        <div class="service-box">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/web_building/sr1.webp.png" alt="">
          <h3>アクセスログ解析</h3>
          <p>ユーザー導線やキーワードを定量分析し、ユーザーが必要とするWebサイトの指標を立てる。</p>
        </div>

        <div class="service-box">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/web_building/sr2.webp.png" alt="">
          <h3>ヒューリスティック分析</h3>
          <p>専門家による知見に基づいて、使いやすさの観点からチェック。使いやすさの問題を抽出する。</p>
        </div>

        <div class="service-box">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/web_building/sr3.webp.png" alt="">
          <h3>調査結果のレポーティング</h3>
          <p>定量・定性分析を元に 調査結果をレポート。</p>
        </div>

        <div class="service-box">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/web_building/sr4.webp.png" alt="">
          <h3>ターゲット定義・ニーズや 行動原理の仮説立案</h3>
          <p>サイトが目指す理想像と現状を明確化し、ターゲットにあった目的を提案。</p>
        </div>

        <div class="service-box">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/web_building/sr5.png" alt="">
          <h3>Webの役割・目的の明確化</h3>
          <p>サイトの役割を明確化し、ターゲットの違い、コンテンツテーマを決める。</p>
        </div>

        <div class="service-box">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/web_building/sr6.png" alt="">
          <h3>ユーザ像・ニーズの整理</h3>
          <p>ペルソナ（対象ユーザ）を設定し、具体的なコンテンツ開発にブレイクダウンする。</p>
        </div>

        <div class="service-box">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/web_building/sr7.png" alt="">
          <h3>プロトタイプ開発</h3>
          <p>モックアップを作りユーザビリティテストを実施することにより、ユーザー中心設計を実現。</p>
        </div>

        <div class="service-box">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/web_building/sr8.png" alt="">
          <h3>SEO対策</h3>
          <p>SEOに最適化した情報設計、 コンテンツ設計から導いた画面をコーディング。</p>
        </div>
      </div>
    </div>

    <div class="service-wrapper">
      <h2>実績</h2>

      <ul class="post-loop">
        <?php
        $cat_posts = get_posts(array(
          'post_type' => 'works', // 投稿タイプ
          'category_name' => 'web-design', // カテゴリをスラッグで指定する場合
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