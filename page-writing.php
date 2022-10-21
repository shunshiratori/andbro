<?php get_header(); ?>

<div class="common-body-class">
  <section class="common-header service-header">
    <div class="container display-flex">
      <div class="left"></div>
      <div class="right">
        <h2 class="common-h2">SEO Writing</h2>
        <h3 class="common-sub-title">SEOライティング</h3>
      </div>
    </div>
  </section>

  <section class="service-container m-container">
    <p class="top-p">
      優秀なライターさんが複数在籍している弊社のライティングチームにお任せください。<br>KW選定から構成、納品まで全て請け負います。</p>

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
          'post_type' => 'post', // 投稿タイプ
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
                <img src="<?php the_post_thumbnail_url(); ?>)" alt="">
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

    <div class="service-wrapper">
      <h2>ライティングチーム</h2>
      <div class="member-flex">
        <div class="service-box">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/writing/member1.png" alt="">

        </div>

        <div class="service-box">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/writing/member2.png" alt="">

        </div>

        <div class="service-box">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/writing/member3.png" alt="">

        </div>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>