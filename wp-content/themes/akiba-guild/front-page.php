<?php
get_header(); ?>
  <main class="scroller"> 
    <div id="main-banner" class="test">
      <div class="banner-bg">
      </div><!--banner-bg-->
      <div class="container">
        <div class="row">
          <div class="col-sm-12"> 
            <div class="table-wrapper">
              <div class="fullscreen-bg">
                <video loop muted autoplay poster="<?php echo get_template_directory_uri(); ?>/img/videoframe.jpg" class="fullscreen-bg__video">
                  <?php 
                    $home_upload_video = get_field('home_banner_upload_video');
                    if($home_upload_video):
                  ?>
                  <source src="<?php echo $home_upload_video; ?>" type="video/mp4">
                  <?php else: ?>
                  <source src="<?php echo get_template_directory_uri(); ?>/vid/video.MP4" type="video/mp4">
                  <?php endif; ?>
                </video>
              </div>
              <div class="scroll_down">
                <a href="#tab_content" class="scroll"><img src="<?php echo get_template_directory_uri(); ?>/images/btn-circle.png" alt=""></a>
              </div>
            </div><!--table-wrapper-->
          </div><!--col-sm-12-->
        </div><!--row-->
      </div><!--container-->
    </div><!--main-banner-->


    <div id="tab_content">
      <div class="container-sm">
        <div class="row">
          <div class="d-flex align-items-start wow animate__animated animate__fadeInLeft" data-wow-duration="1s">
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <?php
                $cnt=0;
                if( have_rows('home_intro_titledescription') ):
                  while( have_rows('home_intro_titledescription') ) : the_row();
                $cnt++;
              ?>
              <a href="<?php echo get_sub_field('home_intro_titledescription_intro_link'); ?>">
                <button class="nav-link <?php echo $cnt == 1 ? 'active': ''; ?>" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                  <div class="wrapper">
                    <p class="hero-title"><?php echo get_sub_field('home_intro_titledescription_intro_title'); ?>
                      <span class="hero-description"><?php echo get_sub_field('home_intro_titledescription_intro_description'); ?></span>
                    </p>
                  </div>
                </button>
              </a>
              <?php
                  endwhile;
                endif; 
              ?>

            </div>
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <?php
                  $home_intro_description = get_field('home_intro_description');
                  if($home_intro_description):
                ?>
                <div class="content">
                  <?php echo $home_intro_description; ?>
                </div>
              <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="bottom_img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img1.png" alt="" class="wow animate__animated animate__fadeInRight" data-wow-duration="1s" >
          </div>
        </div><!-- row -->
      </div><!-- container -->
    </div><!-- tab_content -->


    <div id="part">
      <div class="container-sm">
        <div class="row">
          <div class="title">
            <h2 class="wow animate__animated animate__bounceIn" data-wow-duration="1s">
              <?php echo get_field('build-group-heading'); ?>
            </h2>
          </div><!-- title -->
          <div class="part_content">
            <div class="row">
              <?php
                $cnt=0;
                if( have_rows('build-group-charm') ):
                  while( have_rows('build-group-charm') ) : the_row();
                $cnt++;
                if($cnt == 1):
              ?>
              <div class="col-sm-12">
                <div class="wrapper wow animate__animated animate__fadeInDown" data-wow-duration="1s">
                  <div class="left_content">
                    <h6>Part <?php echo $cnt; ?></h6>
                  </div><!-- left_content -->
                  <div class="right_content">
                    <a href="<?php echo get_sub_field('build-group-charm_link'); ?>">
                      <h6><?php echo get_sub_field('build-group-charm_title'); ?></h6>
                    </a>
                  </div><!-- right_content -->
                </div><!-- wrapper -->
              </div>
              <?php
                  endif; endwhile;
                endif; 
              ?>
            </div>
            <div class="row">
              <?php
                $cnt=0;
                if( have_rows('build-group-charm') ):
                  while( have_rows('build-group-charm') ) : the_row();
                $cnt++;
                if($cnt > 1):
              ?>
              <div class="col-sm-6">
                <div class="wrapper wow animate__animated animate__fadeInDown" data-wow-duration="1s">
                  <div class="left_content">
                    <h6>Part <?php echo $cnt; ?></h6>
                  </div><!-- left_content -->
                  <div class="right_content">
                    <a href="<?php echo get_sub_field('build-group-charm_link'); ?>">
                      <h6><?php echo get_sub_field('build-group-charm_title'); ?></h6>
                    </a>
                  </div><!-- right_content -->
                </div><!-- wrapper -->
              </div><!-- col-sm-6 -->
              <?php
                  endif; endwhile;
                endif; 
              ?>
            </div>
          </div><!-- part_content -->
        </div><!-- row -->
      </div><!-- container-sm -->
    </div><!-- part -->


    <div id="guide_group">
      <div class="container-sm">
        <div class="row">
          <div class="title">
            <h2 class="wow animate__animated animate__bounceIn" data-wow-duration="1s">Guild Group</h2>
          </div>
          <ul class="guide_content wow animate__animated animate__fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
            <?php
              if( have_rows('home_guild_group') ):
                while( have_rows('home_guild_group') ) : the_row();
            ?>
            <li>
              <figure>
                <a href="<?php echo get_sub_field('home_guild_group_link'); ?>">
                  <img src="<?php echo get_sub_field('home_guild_group_thumbnail'); ?>" alt="">
                  <figcaption><?php echo get_sub_field('title_home_guild_group'); ?></figcaption>
                </a>
              </figure>
            </li>
            <?php
                endwhile;
              endif; 
            ?>
          </ul><!-- guide_content -->
          </div><!-- row -->
        </div><!-- container-sm -->
      </div><!-- guide_group -->

      <div id="blog">
        <div class="container-sm">
          <div class="row">
            <div class="title">
              <h3 class="wow animate__animated animate__bounceIn" data-wow-duration="1s" ><?php echo get_cat_name(2); ?></h3>
            </div>
            <div class="blog_content wow animate__animated animate__fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
              <?php

                $index = 0;
                $no_of_columns = 2;

                $cnt = 0;
                query_posts('posts_per_page=6&category_name=blog');           
                if ( have_posts() ) : while ( have_posts() ) : the_post();
                $cnt++;

                  if( 0 === $index % $no_of_columns ) :
              ?>
              <div class="row">
              <?php 
                  endif; 
              ?> 
                <div class="col-sm-6">
                  <div class="wrapper">
                    <div class="left_content">
                      <a href="<?php echo get_permalink(); ?>">
                        <?php 
                          $thumbnail_id = get_post_meta( $post->ID, '_thumbnail_id', true );
                          $img_alt = get_post_meta ( $thumbnail_id, '_wp_attachment_image_alt', true );

                          if(! $img_alt){
                              $img_alt = get_the_title();
                          }
                          $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' );
                        ?>
                        <img src="<?php echo $image[0];; ?>" alt="<?php echo $img_alt; ?>">
                      </a>
                    </div>
                    <div class="right_content">
                      <a href="<?php echo get_permalink(); ?>">
                        <h6><?php echo get_the_title(); ?></h6>
                      </a>
                      <?php the_excerpt(); ?>
                    </div>
                  </div>
                </div>
              <?php 
              $index ++;
              if(0 !== $index && 0 === $index % $no_of_columns): ?>
              </div>
              <?php
                endif;
                endwhile; endif; wp_reset_query();
              ?>
            </div>
            <a href="<?php bloginfo('url'); ?>/blog" class="text-center">
              <button class="btn">Show more<span class="arrow"></span></button>
            </a>
          </div><!-- row -->
        </div><!-- container-sm -->
      </div><!-- blog -->

      <div id="about_us">
        <div class="container-sm">
          <div class="row">
            <div class="wrapper wow animate__animated animate__fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
              <div class="left_content">
                <img src="<?php echo get_template_directory_uri(); ?>/images/about_us.png" alt="">
              </div><!-- left_content -->
              <div class="right_content">
                <h6><?php echo get_field('home_about_us_title'); ?></h6>
                <p><?php echo get_field('home_about_us_description'); ?></p>
              </div><!-- right_content -->
            </div><!-- wrapper -->
          </div><!-- row -->
        </div><!-- container-sm -->
      </div><!-- about_us -->
    </main>
<?php
get_footer(); ?>

<?phpcredits(); ?>

