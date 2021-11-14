<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package akiba-guild
 */

?>
 	<footer id="main-footer">
        <div class="container-sm">
          <div class="row">
            <div class="col-2">
              <div class="footer-content">
                <h6>バナー</h6>
                <ul class="footer_img">
                  <li><img src="<?php echo get_template_directory_uri(); ?>/images/footer_img1.png" alt=""></li>
                  <li><img src="<?php echo get_template_directory_uri(); ?>/images/footer_img2.png" alt=""></li>
                  <li><img src="<?php echo get_template_directory_uri(); ?>/images/footer_img3.png" alt=""></li>
                </ul><!-- footer_img -->
              </div><!-- footer content  -->
            </div><!-- col-2 -->
            <div class="col-3">
              <div class="wrapper">
                <div class="footer-content">
                  <h6>最近のコメント</h6>
                  <ul class="services_lists">
                    <li><a href="#"><span class="spade"></span> Recruit に バイト女子　100万円山分けキャンペーン | 東京・秋葉原のメイドカフェ | クイーンズコート ～ 女神の中庭 ～ | かわいいメイド喫茶 より</a></li>
                    <li><a href="#"><span class="spade"></span>  初めてのご主人様キャンペーン に 秋葉原 メイドカジノ アキバギルド（Akiba Guild）の魅力を語ってみた | メイドカフェ情報ならガーリーちゃんねる公式サイト より</a></li>
                  </ul>
                </div><!-- footer-content -->
              </div><!-- wrapper-->
            </div><!-- col-3 -->
            <div class="col-3">
              <div class="wrapper">
                <div class="footer-content">
                  <h6>Casino Guild</h6>
                  <ul class="services_lists">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="spade"></span> アンニョン♪ゆめです♪ 2017年6月10日</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="spade"></span> >無題 2017年6月7日</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="spade"></span> ベトナム日記 2016年8月11日</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="spade"></span> ベトナムカジノ旅行記〜さよなら日本編〜 2016年7月12日</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="spade"></span> マカオマカオ♪ 2015年11月28日</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="spade"></span> APPTmanilaに行ってきました！ポーカー！ 2015年9月2日</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="spade"></span> APPTマニラ♪♪ 2015年7月28日</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="spade"></span>  去年に引き続きベトナムのダナンにあるカジノCLUB99さんでバニーちゃんディーラーをしに行ってまいりました(((o(*ﾟ▽ﾟ*)o)))！！ 2015年7月28日</a></li>
                    <li><a href="/"><span class="spade"></span> 無題 2015年6月13日</a></li>
                  </ul>
                </div><!-- footer-content -->
              </div><!-- wrapper-->
            </div><!-- col-3 -->
            <div class="col-3">
              <div class="wrapper">
                <div class="footer-content">
                  <h6>アキバギルド総合ブログ</h6>
                  <ul class="services_lists">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="spade"></span> 新人ディーラー紹介♪パンジャちゃん 2021年2月15日</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="spade"></span> 新人ディーラー紹介♪ゆらちゃん 2021年2月11日</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="spade"></span>  新人ディーラー紹介♪てねちゃん 2021年2月8日</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="spade"></span> 新人ディーラー♪れいなちゃん 2020年12月30日</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="spade"></span> 新人ディーラー紹介♪さとりちゃん 2020年12月20日</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="spade"></span> 新人ディーラー紹介♪りんねちゃん 2020年12月15日</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="spade"></span> 新人ディーラー紹介♪令和ちゃん 2020年12月10日</a></li>
                  </ul>
                </div><!-- footer-content -->
              </div><!-- wrapper-->
            </div><!-- col-3 -->
          </div><!-- row -->
        </div>
    </footer>
    <div id="bottom_footer">
        <div class="container-sm">
          <div  class="row">
            <p>Copyright <?php echo get_the_time('Y'); ?> (C) <?php echo get_bloginfo('name'); ?> All Rights Reserved.</p>
          </div>
        </div>
    </div>

    <script type="text/javascript">
      new WOW().init();
    </script>

    <?php wp_footer(); ?>

  </body>
</html>
