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
          </div><!--row-->
        </div><!--container-->
      </div><!--main-header-wrap-->
    </header>