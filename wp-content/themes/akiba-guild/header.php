<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package akiba-guild
 */

?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <?php wp_head(); ?>

      <?php if( is_front_page() ) : ?>
        <style id="my-internal-css">
            #main-banner{min-height: 175vh;}
        </style>
      <?php endif; ?>
     
    </head>

   <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="visible-xs">
      <div class="logo">
      <?php 
        if( has_custom_logo() ):  
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $custom_logo_data = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        $custom_logo_url = $custom_logo_data[0];
        ?>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img src="<?php echo esc_url( $custom_logo_url ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
      </a>
      <?php endif; ?>

      </div>
      <nav>
        <?php
          wp_nav_menu(
              array(
                  'theme_location' => 'menu-1',
                  'menu_id'        => 'primary-menu'
              )
          );
        ?>
      </nav>
    </header>

    <header id="main-header" class="">
      <div class="main-header-wrap">
        <div class="container-sm">
          <div class="row"> 
            <div class="col-sm-3">
              <div id="logo">
                <?php 
                if( has_custom_logo() ):  
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $custom_logo_data = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                $custom_logo_url = $custom_logo_data[0];
                ?>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo esc_url( $custom_logo_url ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
              </a>
              <?php endif; ?>
              </div><!--logo-->
            </div><!--col-sm-4-->
            <div class="col-sm-9">
              <div class="table-content">
                <div class="navigation">
                  <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                            'menu_class' => 'main-menu'
                        )
                    );
                  ?>
                </div><!--navigation-->
              </div><!--table-content-->
            </div><!--col-sm-8-->
          </div><!--row-->
        </div><!--container-->
      </div><!--main-header-wrap-->
    </header>
    
    
    <!-- meanmenu -->
    <header id="main-header" class="header2">
      <div class="main-header-wrap">
        <div class="container-sm">
          <div class="row"> 
            <div class="col-sm-3">
              <div id="logo">
                <?php 
                  if( has_custom_logo() ):  
                  $custom_logo_id = get_theme_mod( 'custom_logo' );
                  $custom_logo_data = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                  $custom_logo_url = $custom_logo_data[0];
                  ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                  <img src="<?php echo esc_url( $custom_logo_url ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                </a>
                <?php endif; ?>
              </div><!--logo-->
            </div><!--col-sm-4-->
            <div class="col-sm-9">
              <div class="table-content">
                <div class="navigation">
                  <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                            'menu_class' => 'main-menu'
                        )
                    );
                  ?>
                </div><!--navigation-->
              </div><!--table-content-->
            </div><!--col-sm-8-->
          </div>

          <div class="highlights">
            <div class="row">
              <div class="col-sm-6">
                <div class="highlights__left-section">
                  <h4>アキバギルド</h4>
                  <p>Adult Entertainment Service</p>
                  <div class="flash-news">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <p>flash news</p>
                      <div class="arrow-icon">
                        <div class="triangle"></div>
                      </div>
                    </a>
                  </div>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/corona.png" />
                          <p>新たなコロナ感染の影響を受けた皆様、ご家族、関係者の皆様には心よりお見舞い申し上げます。</p>
                          <p>すべての関係者は、感染防止対策のさらなる強化に取り組んでいます。</p>
                          <p>従来の現場作業に加えて、直接現場に行けない方のために、オフィスにリモートで接続して作業できるオンライン作業も開始しています。ご予約の際は、最新情報をご確認ください。</p>
                          <p>当サイトの「新着情報」では、最新情報や追加コンテンツの更新をお知らせします。</p>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="col-sm-6">
                <div class="highlights__right-section">
                  <div class="searchbox">
                    <input type="text" class="searchbox__input" placeholder="Search..." />
                    <svg class="searchbox__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56.966 56.966">
                      <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17s-17-7.626-17-17S14.61,6,23.984,6z" />
                    </svg>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div><!--container-->
      </div><!--main-header-wrap-->
    </header>