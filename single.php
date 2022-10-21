<?php get_header(); ?>

<div class="sub-commmon-body-class">
  <div class="sub-container">
    <div class="single-flex">
      <div class="left">
        <?php
				while (have_posts()) :
					the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h2 class="single-title"><?php the_title(); ?></h2>

          <div class="bottom-header">
            <p class="date"><?php echo get_the_date('Y.n.j'); ?></p>・<?php the_category(); ?>
          </div>

          <div class="post-img">
            <?php the_post_thumbnail(''); ?>
          </div>

          <div class="entry-content">
            <?php
							the_content(
								sprintf(
									wp_kses(
										__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'andbro'),
										array(
											'span' => array(
												'class' => array(),
											),
										)
									),
									wp_kses_post(get_the_title())
								)
							);
							?>
          </div>

          <div class="user">
            <?php echo get_avatar(get_the_author_id()); ?>
            <?php the_author(); ?>
          </div>

          <!-- 関連 -->
          <section class="related_posts">
            <h3 class="sub-title text-center">関連記事</h3>
            <div class="post-loop">

              <?php
								//現在の投稿IDからカテゴリーを取得する
								$categories = get_the_category($post->ID);

								//カテゴリーIDを代入する配列を定義する
								$category_id = array();

								foreach ($categories as $category) :
									//現在の投稿が持っているカテゴリーIDを配列に格納
									array_push($category_id, $category->cat_ID);
								endforeach;

								$args = array(
									'post__not_in' => array($post->ID),  //現在の投稿を関連記事から除外する
									'posts_per_page' => 3,                //関連記事に表示する投稿するを指定
									'category__in' => $category_id,      //カテゴリーIDの配列を指定
									'orderby' => 'rand',                 //ソートをランダムに指定
								);
								$query = new WP_Query($args);

								if ($query->have_posts()) :
									while ($query->have_posts()) : $query->the_post();
								?>

              <li>
                <a href="<?php the_permalink(); ?>" class="h-img-link">
                  <div class="post-loop__img">
                    <div class="h-img-wrap">
                      <div class="img-area">
                        <?php the_post_thumbnail(''); ?>
                      </div>
                    </div>
                  </div>
                  <p class="post-loop__title"><?php the_title(); ?></p>
                </a>
              </li>

              <?php
										//所属するカテゴリー名
										foreach ($categories as $category) :
											// echo $category->name;
										?>
              <?php endforeach; ?>
              <?php
									endwhile;
								else :
									echo '記事はありませんでした';
								endif;
								?>
            </div>

          </section>
          <?php wp_reset_postdata(); ?>

        </article>
        <?php endwhile ?>
      </div>

      <div class="right">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>