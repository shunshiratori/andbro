<!-- <section class="sns">
  <div class="m-container">
    <div class="display-flex">
      <div class="left pc">
        <div class="fb-page" data-href="https://www.facebook.com/ANDBRO.official" data-tabs="timeline" data-width="500"
          data-height="500" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false"
          data-show-facepile="true">
          <blockquote cite="https://www.facebook.com/ANDBRO.official" class="fb-xfbml-parse-ignore"><a
              href="https://www.facebook.com/ANDBRO.official">ANDBRO</a></blockquote>
        </div>

        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous"
          src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v15.0" nonce="nw0cpoKF"></script>
      </div>

      <div class="left sp">
        <div class="fb-page" data-href="https://www.facebook.com/ANDBRO.official" data-tabs="timeline" data-width="350"
          data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
          data-show-facepile="true">
          <blockquote cite="https://www.facebook.com/ANDBRO.official" class="fb-xfbml-parse-ignore"><a
              href="https://www.facebook.com/ANDBRO.official">ANDBRO</a></blockquote>
        </div>

        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous"
          src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v15.0" nonce="nw0cpoKF"></script>
      </div>

      <div class="right pc">
        <a class="twitter-timeline" data-width="500" data-height="500"
          href="https://twitter.com/ANDBRO_Inc?ref_src=twsrc%5Etfw">Tweets by ANDBRO_Inc</a>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
      <div class="right sp">
        <a class="twitter-timeline" data-width="350" data-height="500"
          href="https://twitter.com/ANDBRO_Inc?ref_src=twsrc%5Etfw">Tweets by ANDBRO_Inc</a>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
    </div>
  </div>
</section> -->

<!-- recluit -->
<section class="recruit">
  <div class="recruit-wrapper">
    <h2>RECRUIT</h2>
    <p>人と向き合い、人に共鳴し、人を大切に<br>自由なアイデアとチャレンジを歓迎する社内風土です。</p>
    <div class="recruit-flex">
      <a href="#">RECRUIT SITE</a>
      <a href="#">STAFF BLOG</a>
    </div>
  </div>
</section>

<!-- contact -->
<section class="contact-footer">
  <div class="cf-wrapper">
    <div class="cf-flex">
      <div class="left">
        <h2>CONTACT TO <span>ANDBRO</span></h2>
        <p>企業提携や取材、ご質問、ご相談などお気軽にお問い合わせください。</p>
      </div>

      <div class="right">
        <a href="<?php echo esc_url(home_url()); ?>/contact">お問い合わせ</a>
      </div>
    </div>
  </div>
</section>

<!-- onfooter -->
<section class="onfooter">
  <div class="m-container">
    <div class="display-flex">
      <div class="left">
        <div class="display-flex">
          <div class="on-left">
            <img width="470" height="84" src="<?php bloginfo('template_url'); ?>/assets/img/logo.png"
              class="custom-logo" alt="">
          </div>
          <div class="on-right">
            <h2>ANDBRO Inc.</h2>
            <p>digital marketing/web system</p>
          </div>
        </div>

        <div class="map">
          <p>〒980-0803 宮城県仙台市青葉区国分町1-4-9 enspace</p>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12531.207685069425!2d140.8684398!3d38.2608998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f8a283be8ac441b%3A0x2d2f4891f2bbfc1!2senspace!5e0!3m2!1sja!2sjp!4v1663833099439!5m2!1sja!2sjp"
            width="600" height="150" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

      <div class="center pc">
        <h2>menu</h2>
        <!-- menu -->
        <ul id="primary-menu" class="main-menu d-flex">
          <?php wp_nav_menu(
            array(
              'theme_location' => 'footer-menu',
              'container' => false,
              'fallback_cb' => false,
              'items_wrap' => '%3$s',
            )
          ); ?>
        </ul>
      </div>

      <div class="right pc">
        <h2>recruit</h2>
        <p>デザイナー募集中。ご興味ある方は、お問い合わせよりご連絡ください。</p>
      </div>

      <div class="sp-footer sp">
        <div class="center">
          <h2>menu</h2>
          <!-- menu -->
          <ul id="primary-menu" class="main-menu d-flex">
            <?php wp_nav_menu(
              array(
                'theme_location' => 'footer-menu',
                'container' => false,
                'fallback_cb' => false,
                'items_wrap' => '%3$s',
              )
            ); ?>
          </ul>
        </div>

        <div class="right">
          <h2>recruit</h2>
          <p>デザイナー募集中。ご興味ある方は、お問い合わせよりご連絡ください。</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- footer -->
<footer id="colophon" class="site-footer">
  <div class="m-container">
    <div class="top">
      <div class="display-flex">
        <a href="<?php echo esc_url(home_url()); ?>/security-policy/">情報セキュリティ基本方針</a>
        <a href="<?php echo esc_url(home_url()); ?>/privacy-policy/">プライバシーポリシー</a>
      </div>
    </div>

    <div class="bottom">
      <div class="display-flex">
        <div class="left">
          <div class="sns-footer">
            <a href="https://www.facebook.com/ANDBRO.official" target="_blank">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="https://twitter.com/ANDBRO_Inc" target="_blank">
              <i class="fab fa-twitter"></i>
            </a>
            <a index="-1" target="_blank">
              <i class="fab fa-instagram"></i>
            </a>
          </div>
        </div>

        <div class="center">
          <p>©︎2022 ANDBRO Inc.</p>
        </div>

        <div class="right">
          <div></div>
        </div>
      </div>
    </div>
  </div>
</footer><!-- #colophon -->

</div><!-- #page -->
<?php wp_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.2/swiper-bundle.min.js"
  integrity="sha512-dPYTaB+Ip4gAl9vo6U0jSmI8v1AZKjPKH367mfo7pR5gLf1IKpjm3bIXIwm+MmYWEf0eiBEWSBqE+MdKUx0jfg=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
const swiper = new Swiper(".swiper-container", {
  pagination: {
    el: ".swiper-pagination",
  },
  // 前後スライドボタンを表示
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  loop: true, // ループの有効化
  slidesPerView: 3.0,
  slidesPerGroup: 1,
  initialSlide: 1,
  spaceBetween: 15,
  centeredSlides: true,
  loop: true, // ループの有効化

  speed: 300, // スライドアニメーションのスピード（ミリ秒）
  autoplay: { // 自動再生させる
    delay: 3000, // 次のスライドに切り替わるまでの時間（ミリ秒）
    disableOnInteraction: false, // ユーザーが操作しても自動再生を止めない
    waitForTransition: false, // アニメーションの間も自動再生を止めない（最初のスライドの表示時間を揃えたいときに）
  },

  grabCursor: true, // PCでマウスカーソルを「掴む」マークにする
  watchSlidesProgress: true, // スライドの進行状況を監視する


  breakpoints: { // ブレークポイント
    600: { // 画面幅600px以上で適用
      slidesPerView: 3,
    },
    1025: { // 画面幅1025px以上で適用
      slidesPerView: 3,
      spaceBetween: 32,
    }
  },

  on: { // イベントを登録する
    slideChange: (swiper) => {
      console.log('Slide index changed to: ' + (swiper.realIndex + 1));
    },
  },
});
</script>

<!-- swiper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.2/swiper-bundle.min.js"
  integrity="sha512-dPYTaB+Ip4gAl9vo6U0jSmI8v1AZKjPKH367mfo7pR5gLf1IKpjm3bIXIwm+MmYWEf0eiBEWSBqE+MdKUx0jfg=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
const swiper = new Swiper('.swiper-container', {
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets', //ページネーションの種類
    clickable: true, //クリックに反応させる
  },
  autoplay: {
    delay: 5000,
  },
  slidesPerView: 3.0,
  breakpoints: {
    // 768px以上の場合
    768: {
      slidesPerView: 1,
    }
  },
  centeredSlides: true,
  loop: true,
  loopedSlides: 10,
})
</script>

<!-- ハンバーガー -->
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
  crossorigin="anonymous"></script>
<script>
$(function() {
  $('.hamburger').click(function() {
    $(this).toggleClass('active');

    if ($(this).hasClass('active')) {
      $('.globalMenuSp').addClass('active');
    } else {
      $('.globalMenuSp').removeClass('active');
    }
  });

  $('.humberger-flex-left').click(function() {
    $('.hamburger').removeClass('active');
    $('.globalMenuSp').removeClass('active');
  });
});
</script>

<!-- スクロール -->
<script>
jQuery(window).on('scroll', function() {
  if (400 < jQuery(this).scrollTop()) {
    // jQuery('.header').addClass('change-color');
    jQuery('.main-navigation').addClass('none');
  } else {
    // jQuery('.header').removeClass('change-color');
    jQuery('.main-navigation').removeClass('none');
  }
});

// スムーススクロール
//固定ヘッダーの指定
var headerHeight = $('.header').outerHeight() + 50;

// ページ外アンカーのページ付きリンクへのスムーススクロール
var urlHash = location.hash;
if (urlHash) {
  $('body,html').stop().scrollTop(0);
  setTimeout(function() {
    var target = $(urlHash);
    var position = target.offset().top - headerHeight;
    $('body,html').stop().animate({
      scrollTop: position
    }, 500);
  }, 100);
}
// ページ内アンカーのページ付きリンクへのスムーススクロール
$(function() {
  $('a[href*="#"], area[href*="#"]').not(".noScroll").click(function() {

    var speed = 400, // ミリ秒(この値を変えるとスピードが変わる)
      href = $(this).prop("href"), //リンク先を絶対パスとして取得
      hrefPageUrl = href.split("#")[0], //リンク先を絶対パスについて、#より前のURLを取得
      currentUrl = location.href, //現在のページの絶対パスを取得
      currentUrl = currentUrl.split("#")[0]; //現在のページの絶対パスについて、#より前のURLを取得

    //#より前の絶対パスが、リンク先と現在のページで同じだったらスムーススクロールを実行
    if (hrefPageUrl == currentUrl) {

      //リンク先の#からあとの値を取得
      href = href.split("#");
      href = href.pop();
      href = "#" + href;

      //スムースクロールの実装
      var target = $(href == "#" || href == "" ? 'html' : href),
        position = target.offset().top - headerHeight; //targetの位置を取得
      $('body,html').stop().animate({
        scrollTop: position
      }, 500);

      return false;
    }

  });
});
</script>

<!-- 画面遷移エフェクト -->

</body>

</html>