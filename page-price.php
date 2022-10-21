<?php get_header() ?>

<div class="sub-commmon-body-class">
  <div class="sub-container">
    <div class="head">
      <h2>- price</h2>
      <h3>料金</h3>
    </div>

    <section>
      <div class="price-header">
        <div class="top-flex">
          <a href="#web-building">web制作</a>
          <a href="#lp">LP制作</a>
          <a href="#web-management">サイト運用</a>
          <a href="#writing">ライティング</a>
          <a href="#advertisement">広告</a>
          <a href="#else">その他</a>
        </div>
      </div>

      <div class="content-section" id="web-building">
        <h2>web制作</h2>

        <div class="price-wrapper">
          <div class="price-flex">
            <div class="price-box">
              <div class="top-box">
                <h2>ライト</h2>
                <p>今月中に簡単でいいからホームページが欲しいなどお急ぎのケースや御予算を抑えたい場合におすすめです。</p>
              </div>

              <div class="content-box">
                <h2>270,000<span>円</span></h2>

                <div class="feature">
                  <ul>
                    <li>企画構成</li>
                    <li>TOPページデザイン</li>
                    <li>下層ページデザイン</li>
                    <li>TOP+4P</li>
                    <li>お問い合わせフォーム</li>
                    <li>更新テンプレ*1</li>
                    <li>内部SEO対策</li>
                    <li>スマホ・タブレット対応</li>
                    <li>公開設定・解析設定・設置</li>
                  </ul>

                  <a class="ct-btn" href="<?php echo esc_url(home_url()); ?>/contact">相見積もり依頼</a>
                </div>
              </div>
            </div>

            <div class="price-box center">
              <div class="top-box">
                <h2>ベーシック</h2>
                <p>競合他社にサイトで差を付けたい。あまり大規模では無い企業様の場合におすすめです。</p>
              </div>

              <div class="content-box">
                <h2>400,000<span>円</span></h2>

                <div class="feature">
                  <ul>
                    <li>企画構成</li>
                    <li>TOPページデザイン</li>
                    <li>下層ページデザイン</li>
                    <li>TOP+8P</li>
                    <li>お問い合わせフォーム</li>
                    <li>更新テンプレ*2</li>
                    <li>内部SEO対策</li>
                    <li>スマホ・タブレット対応</li>
                    <li>公開設定・解析設定・設置</li>
                  </ul>

                  <a class="ct-btn" href="<?php echo esc_url(home_url()); ?>/contact">相見積もり依頼</a>
                </div>
              </div>
            </div>

            <div class="price-box">
              <div class="top-box">
                <h2>マスター</h2>
                <p>競合他社に差を付けたい。地域一番の店舗や企業として認知されたいという志が高い場合におすすめです</p>
              </div>

              <div class="content-box">
                <h2>650,000<span>円</span></h2>

                <div class="feature">
                  <ul>
                    <li>企画構成</li>
                    <li>TOPページデザイン</li>
                    <li>下層ページデザイン</li>
                    <li>TOP+10P</li>
                    <li>お問い合わせフォーム</li>
                    <li>更新テンプレ*3</li>
                    <li>内部SEO対策</li>
                    <li>スマホ・タブレット対応</li>
                    <li>公開設定・解析設定・設置</li>
                  </ul>

                  <a class="ct-btn" href="<?php echo esc_url(home_url()); ?>/contact">相見積もり依頼</a>
                </div>
              </div>
            </div>
          </div>
          <p class="bottom-p">※ 全てにおいて、2週間以内の無料修正を含みます。</p>
        </div>

        <div class="work-wrapper">
          <h2>実績</h2>
          <!-- news-content -->
          <ul class="post-loop">
            <?php
            $cat_posts = get_posts(array(
              'post_type' => 'works', // 投稿タイプ
              'category_name' => 'web-design',
              'posts_per_page' => 3, // 表示件数
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

          <a class="b-btn" href="<?php echo esc_url(home_url()); ?>/contact">お問い合わせ</a>
        </div>
      </div>

      <!-- LP -->
      <div class="content-section" id="lp">
        <h2>LP制作</h2>

        <div class="price-wrapper">
          <div class="price-flex">
            <div class="price-box">
              <div class="top-box">
                <h2>ライト</h2>
                <p>構成とデザインは決まっているから、とりあえ早く形に起こして欲しい！という方向けです。</p>
              </div>

              <div class="content-box">
                <h2>70,000<span>円</span></h2>

                <div class="feature">
                  <ul>
                    <li>企画設計なし</li>
                    <li>ワイヤーフレームなし</li>
                    <li>コーディング</li>
                    <li>デザインなし</li>
                    <li>簡易的なアニメーション</li>
                    <li>スマホ・タブレット対応</li>
                  </ul>

                  <a class="ct-btn" href="<?php echo esc_url(home_url()); ?>/contact">相見積もり依頼</a>
                </div>
              </div>
            </div>

            <div class="price-box center">
              <div class="top-box">
                <h2>ベーシック</h2>
                <p>デザインから入って欲しい。構成書は準備ができるけど、それ以降を任せたい、という方向けです。</p>
              </div>

              <div class="content-box">
                <h2>150,000<span>円</span></h2>

                <div class="feature">
                  <ul>
                    <li>企画設計なし</li>
                    <li>ワイヤーフレームなしン</li>
                    <li>コーディング</li>
                    <li>デザイン</li>
                    <li>簡易的なアニメーション</li>
                    <li>スマホ・タブレット対応</li>
                  </ul>

                  <a class="ct-btn" href="<?php echo esc_url(home_url()); ?>/contact">相見積もり依頼</a>
                </div>
              </div>
            </div>

            <div class="price-box">
              <div class="top-box">
                <h2>マスター</h2>
                <p>構成から入って、流入設計を考えて欲しい。きちんと作りたいという方におすすめです。</p>
              </div>

              <div class="content-box">
                <h2>300,000<span>円</span></h2>

                <div class="feature">
                  <ul>
                    <li>企画設計</li>
                    <li>ワイヤーフレーム</li>
                    <li>コーディングン</li>
                    <li>デザイン</li>
                    <li>簡易的なアニメーション</li>
                    <li>スマホ・タブレット対応</li>
                  </ul>

                  <a class="ct-btn" href="<?php echo esc_url(home_url()); ?>/contact">相見積もり依頼</a>
                </div>
              </div>
            </div>
          </div>
          <p class="bottom-p">※ 全てにおいて、2週間以内の無料修正を含みます。</p>
          <a class="b-btn" href="<?php echo esc_url(home_url()); ?>/contact">お問い合わせ</a>
        </div>
      </div>

      <!-- 追加オプション -->
      <div class="content-section" id="web-building">
        <h2>追加オプション</h2>

        <div class="price-wrapper">
          <div class="price-flex2">
            <div class="flex2-box">
              <div class="left">
                <h2>文言修正</h2>
                <p>1,000円〜</p>
              </div>

              <div class="right">
                <p>ちょっとした文言を編集してほしい。ただ修正の仕方がわからない、万が一修正して何か行ったら怖い、という方向けのサービスです。写真の差し替えなども行っております。</p>
              </div>
            </div>

            <div class="flex2-box">
              <div class="left">
                <h2>サーバー・ドメイン取得</h2>
                <p>5,500円～</p>
              </div>

              <div class="right">
                <p>peraichiやstudioなど、ノーコードのサイト作成サービスでサイトを作成する予定だが、サーバーとドメインの契約だけお願いしたい。どのサーバーがいいかなどもlanersリタイという方向けです。
                </p>
              </div>
            </div>
          </div>
          <p class="bottom-p">※ 全てにおいて、2週間以内の無料修正を含みます。</p>
          <a class="b-btn" href="<?php echo esc_url(home_url()); ?>/contact">お問い合わせ</a>
        </div>
      </div>

      <!-- サイト運用 -->
      <div class="content-section" id="web-management">
        <h2>サイト運用</h2>

        <div class="price-wrapper">
          <div class="price-flex price-flex4">
            <div class="price-box">
              <div class="top-box">
                <h2>ライト</h2>
                <p>ひとまずサイトを見て欲しい。まずは軽いSEO対策をしてもらい、どれほどの効果があるのかを見て見たい方におすすめです。</p>
              </div>

              <div class="content-box">
                <h2>100,000<span>円</span></h2>

                <div class="feature">
                  <ul>
                    <li>初期費用5万円</li>
                    <li>月1MTG</li>
                    <li>月次レポート</li>
                    <li>自社サイト分析</li>
                    <li>競合調査</li>
                    <li>キーワード調査</li>
                    <li>記事の構成書作成</li>
                    <li>ライティング指導</li>
                    <li>記事確認</li>
                    <li>流入施策なし</li>
                    <li>リライトなし</li>
                    <li>サイト改善なし</li>
                    <li>テクニカルエラー対策</li>
                    <li>SNS運用なし</li>
                    <li>外部対策なし</li>
                  </ul>

                  <a class="ct-btn" href="<?php echo esc_url(home_url()); ?>/contact">相見積もり依頼</a>
                </div>
              </div>
            </div>

            <div class="price-box center">
              <div class="top-box">
                <h2>ベーシック</h2>
                <p>SEO対策を行って欲しいが、あまり予算が割けないからちょっとずつ進めて欲しい方向けです。</p>
              </div>

              <div class="content-box">
                <h2>150,000<span>円</span></h2>

                <div class="feature">
                  <ul>
                    <li>初期費用なし</li>
                    <li>月1MTG</li>
                    <li>月次レポート</li>
                    <li>自社サイト分析</li>
                    <li>競合調査</li>
                    <li>キーワード調査</li>
                    <li>記事の構成書作成</li>
                    <li>ライティング指導</li>
                    <li>5記事</li>
                    <li>流入施策なし</li>
                    <li>リライトなし</li>
                    <li>サイト改善なし</li>
                    <li>テクニカルエラー対策</li>
                    <li>SNS運用なし</li>
                    <li>外部対策なし</li>
                  </ul>

                  <a class="ct-btn" href="<?php echo esc_url(home_url()); ?>/contact">相見積もり依頼</a>
                </div>
              </div>
            </div>

            <div class="price-box">
              <div class="top-box">
                <h2>マスター</h2>
                <p>予算を割いてSEO対策を本格的に行っていきたい方向けです。</p>
              </div>

              <div class="content-box">
                <h2>250,000<span>円</span></h2>

                <div class="feature">
                  <ul>
                    <li>初期費用なし</li>
                    <li>週1MTG</li>
                    <li>月次レポート</li>
                    <li>自社サイト分析</li>
                    <li>競合調査</li>
                    <li>キーワード調査</li>
                    <li>記事の構成書作成</li>
                    <li>ライティング指導</li>
                    <li>10記事</li>
                    <li>流入施策</li>
                    <li>リライト</li>
                    <li>サイト改善</li>
                    <li>テクニカルエラー対策</li>
                    <li>SNS運用指導</li>
                    <li>外部対策指導</li>
                  </ul>

                  <a class="ct-btn" href="<?php echo esc_url(home_url()); ?>/contact">相見積もり依頼</a>
                </div>
              </div>
            </div>

            <div class="price-box">
              <div class="top-box">
                <h2>プレミアム</h2>
                <p>SEO対策を行い、早いスピードで収益を上げていきたという方向けです。</p>
              </div>

              <div class="content-box">
                <h2>要相談</h2>

                <div class="feature">
                  <ul>
                    <li>初期費用なし</li>
                    <li>週1MTG</li>
                    <li>月次レポート</li>
                    <li>自社サイト分析</li>
                    <li>競合調査</li>
                    <li>キーワード調査</li>
                    <li>記事の構成書作成</li>
                    <li>ライティング指導</li>
                    <li>15記事~</li>
                    <li>流入施策</li>
                    <li>リライト</li>
                    <li>サイト改善</li>
                    <li>テクニカルエラー対策</li>
                    <li>SNS運用指導</li>
                    <li>外部対策指導</li>
                  </ul>

                  <a class="ct-btn" href="<?php echo esc_url(home_url()); ?>/contact">相見積もり依頼</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="work-wrapper">
          <h2>実績</h2>
          <!-- news-content -->
          <ul class="post-loop">
            <?php
            $cat_posts = get_posts(array(
              'post_type' => 'works', // 投稿タイプ
              'category_name' => 'web-management',
              'posts_per_page' => 3, // 表示件数
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

          <a class="b-btn" href="<?php echo esc_url(home_url()); ?>/contact">お問い合わせ</a>
        </div>
      </div>

      <!-- ライティング -->
      <div class="content-section" id="writing">
        <h2>ライティング</h2>

        <div class="price-wrapper">
          <div class="price-flex">
            <div class="price-box">
              <div class="top-box">
                <h2>ライト</h2>
                <p>とりあえず記事が欲しい！記事の効果が知りたいという方におすすめです。</p>
              </div>

              <div class="content-box">
                <h2>2.0<span>円/字</span></h2>

                <div class="feature">
                  <ul>
                    <li>SEOライティング</li>
                  </ul>

                  <a class="ct-btn" href="<?php echo esc_url(home_url()); ?>/contact">相見積もり依頼</a>
                </div>
              </div>
            </div>

            <div class="price-box center">
              <div class="top-box">
                <h2>ベーシック</h2>
                <p>SEO効果がしっかりある記事が欲しい。構成から入って欲しい、などより高品質な記事をご機能の方におすすめです。</p>
              </div>

              <div class="content-box">
                <h2>3.0<span>円/字</span></h2>

                <div class="feature">
                  <ul>
                    <li>企画設計</li>
                    <li>SEOライティング</li>
                    <li>流入施策</li>
                  </ul>

                  <a class="ct-btn" href="<?php echo esc_url(home_url()); ?>/contact">相見積もり依頼</a>
                </div>
              </div>
            </div>

            <div class="price-box">
              <div class="top-box">
                <h2>エキスパート</h2>
                <p>専門家監修の記事が欲しい方向けです。</p>
              </div>

              <div class="content-box">
                <h2>5.0<span>円/字</span></h2>

                <div class="feature">
                  <ul>
                    <li>企画設計</li>
                    <li>SEOライティング</li>
                    <li>流入施策</li>
                    <li>専門家監修</li>
                  </ul>

                  <a class="ct-btn" href="<?php echo esc_url(home_url()); ?>/contact">相見積もり依頼</a>
                </div>
              </div>
            </div>

          </div>
        </div>

        <a class="b-btn" href="<?php echo esc_url(home_url()); ?>/contact">お問い合わせ</a>
      </div>

      <!-- 広告運用-->
      <div class="content-section" id="advertisement">
        <h2>広告運用</h2>

        <div class="price-wrapper">
          <div class="price-flex2">
            <div class="flex2-box">
              <div class="left">
                <h2>Google・Yahoo広告</h2>
                <p>広告費の20%</p>
              </div>

              <div class="right">
                <p>Google・Yahoo広告のインターネット広告に対応しております。お客様の目的に対して最善の媒体を選定し、ご提案いたします。</p>
              </div>
            </div>

            <div class="flex2-box">
              <div class="left">
                <h2>SNS広告</h2>
                <p>広告費の20%</p>
              </div>

              <div class="right">
                <p>Instagram・Facebook広告、Twitter広告など各種SNS広告に対応しております。お客様の目的に対して最善の媒体を選定し、ご提案いたします。</p>
              </div>
            </div>
          </div>
          <p class="bottom-p">※ 全てにおいて、2週間以内の無料修正を含みます。</p>
          <a class="b-btn" href="<?php echo esc_url(home_url()); ?>/contact">お問い合わせ</a>
        </div>
      </div>

      <!-- その他-->
      <div class="content-section" id="else">
        <h2>その他</h2>

        <div class="price-wrapper">
          <div class="price-flex2">

            <p class="bottom-p">
              資料作成やデザイン作成、サイト解析、業界調査、デジタルマーケティングコンサルティングなど各種サービスも展開しております。<br>詳細が気になる方は、お気軽にお問い合わせください。
            </p>
            <a class="b-btn" href="<?php echo esc_url(home_url()); ?>/contact">お問い合わせ</a>
          </div>
        </div>
    </section>
  </div>
</div>

<?php get_footer() ?>