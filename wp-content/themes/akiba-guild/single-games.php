<?php
	get_header(); ?>

	<div id="main-banner">
      <div class="row">
        <div class="col-sm-12"> 
          <div class="banner_bg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/banner_bg2.png" alt="">
          </div>
        </div><!--col-sm-12-->
      </div><!--row-->
    </div><!--main-banner-->

    <div id="rules" class="rules_details">
      <div class="container-xs">
        <div class="row">
          <div class="col-sm-12">
            <div class="title">
              <h3>Rule <?php echo get_the_title(); ?></h3>
            </div><!-- title -->
            <div class="rules_content">
            <div class="row">
              <div class="col-sm-12">
                <div class="rules_wrap">
                  <div class="rules_box">
                    <h6><?php echo get_the_title(); ?></h6>
                  </div><!-- rules_box -->
                  <div class="rules_content">
                    <p>バカラ（英Baccarat、伊Baccara）とはカジノゲームの一種であり、トランプが使われる。
                      <span class="block">バカラとは、イタリア語でゼロの意味。バカラは高額な掛け金をかける人が多い。</span></p>
                    <p>バカラはカジノゲームの中でも大金が動くゲームのため、</p>
                    <p>多くのカジノではVIP待遇でもてなすバカラ専用の部屋を用意している。</p>
                  </div><!-- rules_content -->
                </div><!-- rules_wrap -->
                <div class="rules_wrap">
                  <div class="rules_box rules_box2">
                    <h6>Basic Rules </h6>
                  </div><!-- rules_box -->
                  <div class="rules_content">
                    <p>ディーラーが数組のカードをシャッフルし、シューターといわれるカジノ専用のカードケースに入れる。
                      <span class="block">ゲームに参加した人たちは「プレイヤー」側が勝つか「バンカー」側が勝つか予想し賭ける。</span>
                      <span class="block"> ディーラーは「プレイヤー」と「バンカー」に2枚のカードを配る。 プレイヤーサ </span>
                      <span class="block">イド・バンカーサイド双方に２枚ずつカードが配られる。</span>
                    </p>
                    <p> 最初の２枚で、どちらかの合計点が８点または９点の場合、ナチュラルとして即座にゲームは終了、点数の多い方が勝利となる。
                      <span class="block">同点の場合はタイとして勝負は引き分け、タイに対する賭け金に対して８倍（1：8）の配当がなされる。</span>
                      <span class="block">最初の２枚で、プレイヤーサイド・バンカーサイド双方が６または７を出している際もゲームは終了する。</span>
                    </p>
                    <p>以上の条件に当てはまらない場合、プレイヤーサイドに３枚目のカードが配られる。
                      <span class="block">バンカーサイドは合計点が２点以下の場合、無条件で３枚目が配られるが、</span>
                      <span class="block">それ以外の場合はバンカーサイドの点数とプレイヤーサイドの３枚目のカードの内容に影響される。</span>
                      <span class="block">次の場合バンカーサイドには３枚目のカードが配られず、ゲームは終了する</span>
                    </p>
                    <ul class="sub-list">
                      <li>バンカーサイドが 3点のとき、プレイヤーサイドの 3枚目のカードが 8の場合</li>
                      <li>バンカーサイドが 4点のとき、プレイヤーサイドの 3枚目のカードが 1,8,9,0の場合</li>
                      <li>バンカーサイドが 5点のとき、プレイヤーサイドの 3枚目のカードが 1,2,3,8,9,0の場合 </li> 
                      <li>バンカーサイドが 6点のとき、プレイヤーサイドの 3枚目のカードが 1,2,3,4,5,8,9,0の場合
                      </li>
                    </ul>  <!-- sub-list -->
                  </div><!-- rules_content -->
                </div><!-- rules_wrap -->
                <div class="rules_wrap">
                  <div class="rules_box rules_box2">
                    <h6>６バンカールール </h6>
                  </div><!-- rules_box -->
                  <div class="rules_content">
                    <p>アキバギルドルールとして、バカラの５％コミッションを廃止し､６バンカールールを採用。
                      <span class="block">通常のバカラではプレイヤーが勝つと配当は１倍（1：1）、バンカーが勝つとコミッションの０．０５倍を差し引かれ０．９５倍 （1：0.95）の配当になるが、 </span>
                      <span class="block">６バンカールールではバンカーベットが６以外で勝った時は1倍（1：1）の配当、６で勝った時のみ０．５倍（1：0.5）の配当と  なる。</span>
                    </p>
                  </div><!-- rules_content -->
                </div><!-- rules_wrap -->
                <div class="rules_wrap">
                  <div class="rules_box rules_box2">
                    <h6>点数の数え方 </h6>
                  </div><!-- rules_box -->
                  <div class="rules_content">
                    <p>Aは１、２から９は表示どおりの数字で、絵札はすべて０として数える。 繰り上がりは考慮せず、繰り上がった場合でも下一桁のみを評価する。</p>
                  </div><!-- rules_content -->
                </div><!-- rules_wrap -->
                <div class="rules_wrap">
                  <div class="rules_box rules_box2">
                    <h6>ベットリミット </h6>
                  </div><!-- rules_box -->
                  <div class="rules_content">
                    <ul class="sub-list">
                      <li>ミニマム  <span class="space">$10</span></li>
                      <li>マックス  <span class="space">$500</span></li>
                    </ul>  <!-- sub-list -->
                  </div><!-- rules_content -->
                </div><!-- rules_wrap -->
              </div><!-- col-sm-12 -->
            </div><!-- row -->
          </div><!-- rules_content -->
        </div><!-- col-sm-12 -->
        </div><!-- row -->
      </div><!-- container-sm -->
    </div><!-- rules -->

<?php
	get_footer();?>