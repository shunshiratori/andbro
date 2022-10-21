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
        <h2 class="common-h2">news</h2>
        <h3 class="common-sub-title">ニュース</h3>
      </div>
    </div>
  </section>

  <section class="work-container">
    <div class="container">

      <!-- work loop -->
      <div class="news-wrapper">
        <!-- news-content -->
        <ul class="post-loop">
          <?php
          $cat_posts = get_posts(array(
            'post_type' => 'news', // 投稿タイプ
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
    </div>
  </section>

</div>

<?php get_footer(); ?>