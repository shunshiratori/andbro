<?php get_header(); ?>

<div class="common-body-class">
  <section class="common-header company-header">

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
        <h2 class="common-h2">support</h2>
        <h3 class="common-sub-title">サポート</h3>
      </div>
    </div>
  </section>

  <section>
    <div class="m-container">
      <ul class="post-loop csr-flex">
        <?php
        $cat_posts = get_posts(array(
          'post_type' => 'csr', // 投稿タイプ
          'posts_per_page' => 99, // 表示件数
          'orderby' => 'date', // 表示順の基準
          'order' => 'DESC' // 昇順・降順
        ));
        global $post;
        if ($cat_posts) : foreach ($cat_posts as $post) : setup_postdata($post); ?>

        <!-- ループはじめ -->
        <li>
          <a href="<?php the_field('csr-link'); ?>" target="_blank">
            <div class="csr-box">
              <img src="<?php the_field('csr-img'); ?>" alt="">
            </div>
          </a>
        </li>
        <!-- ループおわり -->

        <?php endforeach;
        endif;
        wp_reset_postdata(); ?>
    </div>
  </section>


</div>
<?php get_footer(); ?>