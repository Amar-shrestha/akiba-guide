<?php

/**
* Template Name: Schedule
*
* @package akiba-guild
*/

  get_header(); ?>   
    <div id="main-banner">
        <div class="row">
          <div class="col-sm-12"> 
            <div class="banner_bg">
              <img src="<?php echo get_template_directory_uri(); ?>/images/banner_bg1.png" alt="">
            </div>
          </div><!--col-sm-12-->
        </div><!--row-->
    </div><!--main-banner-->

    <div id="ticket">
      <div class="container-xs">
        <div class="row">
          <div class="col-sm-12">
            <div class="ticket_content">
              <div class="title">
                <h3>ポーカースケジュール</h3>
              </div><!-- title -->
              <div class="row">
                <div class="col-sm-6">
                  <h6>店舗</h6>
                  <select class="form-select">
                    <option selected>カナザワギルド</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div><!-- col-sm-6 -->
                <div class="col-sm-6 right_form">
                  <h6>開催日</h6>
                  <div class="col-sm-6">
                    <input type="text" class="form-control">
                  </div><!-- col-sm-6 -->
                  <div class="col-sm-6">
                    <input type="text" class="form-control">
                  </div><!-- col-sm-6-->
                </div><!-- col-sm-6 -->
              </div><!-- row -->
              <div class="row">
                <div class="col-sm-6">
                  <h6>ゲーム</h6>
                  <select class="form-select">
                    <option selected>すべて</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div><!-- col-sm-6 -->
                <div class="col-sm-6 right_form">
                  <h6>リミット</h6>
                  <select class="form-select">
                    <option selected>すべて</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div><!-- col-sm-6  -->
              </div><!-- row -->
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <p>シットアンドゴー除外</p>
                <p>※新しいトーナメントから最大50件を表示します</p>
              </div>
              <button class="btn"><span class="search"></span>探す</button>
            </div><!-- ticket_content -->
          </div><!-- col-sm-12 -->
        </div><!-- row -->
      </div><!-- container-sm -->
    </div> <!-- ticket -->


    <div id="schedule">
      <div class="container-xs">
        <div class="row">
          <div class="schedule_content">
            <div class="title">
              <h3>POKER SCHEDULE</h3>
            </div><!-- title -->
            <div  class="table-responsive text-nowrap">
              <table id="t01">
                <tr>
                  <th>開催日</th>
                  <th>トーナメント</th> 
                  <th>店舗</th>
                </tr>
                <tr>
                  <td>2021/03/06
                   <span class="block time">12:45</span>
                  </td>
                  <td>
                    <span class="red spade">SPADIE&109『DEEP STACK』</span>
                    <span class="block poppins">ノーリミット / テキサスホールデム</span>
                  </td>
                  <td>
                    
                    <span class="red red2">アキバギルド</span>
                    <span class="block map">秋葉原</span>
                  </td>
                </tr>
                <tr>
                  <td>2021/03/06
                   <span class="block time">12:45</span>
                  </td>
                  <td>
                    <span class="red spade">SPADIE&109『DEEP STACK』</span>
                    <span class="block poppins">ノーリミット / テキサスホールデム</span>
                  </td>
                  <td>
                    <span class="red red2">アキバギルド</span>
                    <span class="block map">秋葉原</span>
                  </td>
                </tr>
                <tr>
                  <td>2021/03/06
                   <span class="block time">12:45</span>
                  </td>
                  <td>
                    <span class="red spade">SPADIE&109『DEEP STACK』</span>
                    <span class="block poppins">ノーリミット / テキサスホールデム</span>
                  </td>
                  <td>
                    
                    <span class="red red2">アキバギルド</span>
                    <span class="block map">秋葉原</span>
                  </td>
                </tr>
                <tr>
                  <td>2021/03/06
                   <span class="block time">12:45</span>
                  </td>
                  <td>
                    <span class="red spade">SPADIE&109『DEEP STACK』</span>
                    <span class="block poppins">ノーリミット / テキサスホールデム</span>
                  </td>
                  <td>
                    
                    <span class="red red2">アキバギルド</span>
                    <span class="block map">秋葉原</span>
                  </td>
                </tr>
                <tr>
                  <td>2021/03/06
                   <span class="block time">12:45</span>
                  </td>
                  <td>
                    <span class="red spade">SPADIE&109『DEEP STACK』</span>
                    <span class="block poppins">ノーリミット / テキサスホールデム</span>
                  </td>
                  <td>
                    
                    <span class="red red2">アキバギルド</span>
                    <span class="block map">秋葉原</span>
                  </td>
                </tr>
                <tr>
                  <td>2021/03/06
                   <span class="block time">12:45</span>
                  </td>
                  <td>
                    <span class="red spade">SPADIE&109『DEEP STACK』</span>
                    <span class="block poppins">ノーリミット / テキサスホールデム</span>
                  </td>
                  <td>
                    
                    <span class="red red2">アキバギルド</span>
                    <span class="block map">秋葉原</span>
                  </td>
                </tr>
                <tr>
                  <td>2021/03/06
                   <span class="block time">12:45</span>
                  </td>
                  <td>
                    <span class="red spade">SPADIE&109『DEEP STACK』</span>
                    <span class="block poppins">ノーリミット / テキサスホールデム</span>
                  </td>
                  <td>
                    
                    <span class="red red2">アキバギルド</span>
                    <span class="block map">秋葉原</span>
                  </td>
                </tr>
                <tr>
                  <td>2021/03/06
                   <span class="block time">12:45</span>
                  </td>
                  <td>
                    <span class="red spade">SPADIE&109『DEEP STACK』</span>
                    <span class="block poppins">ノーリミット / テキサスホールデム</span>
                  </td>
                  <td>
                    
                    <span class="red red2">アキバギルド</span>
                    <span class="block map">秋葉原</span>
                  </td>
                </tr>
                <tr>
                  <td>2021/03/06
                   <span class="block time">12:45</span>
                  </td>
                  <td>
                    <span class="red spade">SPADIE&109『DEEP STACK』</span>
                    <span class="block poppins">ノーリミット / テキサスホールデム</span>
                  </td>
                  <td>
                    
                    <span class="red red2">アキバギルド</span>
                    <span class="block map">秋葉原</span>
                  </td>
                </tr>
                <tr>
                  <td>2021/03/06
                   <span class="block time">12:45</span>
                  </td>
                  <td>
                    <span class="red spade">SPADIE&109『DEEP STACK』</span>
                    <span class="block poppins">ノーリミット / テキサスホールデム</span>
                  </td>
                  <td>
                    
                    <span class="red red2">アキバギルド</span>
                    <span class="block map">秋葉原</span>
                  </td>
                </tr>
                <tr>
                  <td>2021/03/06
                   <span class="block time">12:45</span>
                  </td>
                  <td>
                    <span class="red spade">SPADIE&109『DEEP STACK』</span>
                    <span class="block poppins">ノーリミット / テキサスホールデム</span>
                  </td>
                  <td>
                    
                    <span class="red red2">アキバギルド</span>
                    <span class="block map">秋葉原</span>
                  </td>
                </tr>
                <tr>
                  <td>2021/03/06
                   <span class="block time">12:45</span>
                  </td>
                  <td>
                    <span class="red spade">SPADIE&109『DEEP STACK』</span>
                    <span class="block poppins">ノーリミット / テキサスホールデム</span>
                  </td>
                  <td>
                    
                    <span class="red red2">アキバギルド</span>
                    <span class="block map">秋葉原</span>
                  </td>
                </tr>
                <tr>
                  <td>2021/03/06
                   <span class="block time">12:45</span>
                  </td>
                  <td>
                    <span class="red spade">SPADIE&109『DEEP STACK』</span>
                    <span class="block poppins">ノーリミット / テキサスホールデム</span>
                  </td>
                  <td>
                    
                    <span class="red red2">アキバギルド</span>
                    <span class="block map">秋葉原</span>
                  </td>
                </tr>
                <tr>
                  <td>2021/03/06
                   <span class="block time">12:45</span>
                  </td>
                  <td>
                    <span class="red spade">SPADIE&109『DEEP STACK』</span>
                    <span class="block poppins">ノーリミット / テキサスホールデム</span>
                  </td>
                  <td>
                    
                    <span class="red red2">アキバギルド</span>
                    <span class="block map">秋葉原</span>
                  </td>
                </tr>
                <tr>
                  <td>2021/03/06
                   <span class="block time">12:45</span>
                  </td>
                  <td>
                    <span class="red spade">SPADIE&109『DEEP STACK』</span>
                    <span class="block poppins">ノーリミット / テキサスホールデム</span>
                  </td>
                  <td>
                    
                    <span class="red red2">アキバギルド</span>
                    <span class="block map">秋葉原</span>
                  </td>
                </tr>
              </table>
            </div>
          </div><!-- schedule_content -->
        </div><!-- row -->
      </div><!-- container-sm -->
    </div><!-- schedule -->
    

    
    <div id="performance" style="padding: 45px 0">
      <div class="container-xs">
        <div class="row">
          <div class="performance_content">
            <div class="row">
              <div class="col-sm-6">
                <div class="title">
                  <h6>Ranking</h6>
                </div>
                <table id="t01">
                  <tr>
                    <td>1</td>
                    <td>ROPPONGI BACKDOOR</td>
                    <td>しゅういち</td>
                    <td>07/07</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>	学生ポーカーリーグ</td>
                    <td>オカモト</td>
                    <td>07/07</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>銀座カジノバーパラハ</td>
                    <td>YD</td>
                    <td>07/07</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>銀座カジノバーパラハ</td>
                    <td>The world
                      gypsy</td>
                    <td>07/07</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>新宿ネオパラハ</td>
                    <td>匿名</td>
                    <td>07/07</td>
                  </tr>
                </table>
                <h6><a href="#">See more</a></h6>
              </div><!-- col-sm-6 -->
              <div class="col-sm-6">
                <div class="title">
                  <h6>Top performers-annual</h6>
                </div>
                <table id="t01">
                  <tr>
                    <td>1</td>
                    <td>de POKER</td>
                    <td>カミナ</td>
                    <td>25.0%</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>	新宿ネオパラハ</td>
                    <td>Under 5 </td>
                    <td>25.0%</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>イケブクロギルド</td>
                    <td>ド	アキ</td>
                    <td>25.0%</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>イケブクロギルド</td>
                    <td>はいぱーりゅう</td>
                      <td>25.0%</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>新潟ギルド</td>
                    <td>洋介</td>
                    <td>25.0%</td>
                  </tr>
                </table>
                <h6><a href="#">See more</a></h6>
              </div><!-- col-sm-6 -->
            </div><!-- row -->
          </div><!-- performance_content -->
        </div><!-- row -->
      </div><!-- container-sm -->
    </div><!-- performance -->
    
<?php
  get_footer(); ?>