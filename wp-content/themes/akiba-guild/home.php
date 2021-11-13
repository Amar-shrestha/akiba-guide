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

  <div id="blogs_detail">
    <div class="container-sm">
      <div class="row">
        <div class="col-sm-12">
          <div class="title">
            <h3>ブログ</h3>
          </div><!-- title -->
          <div class="blog_content">
            <?php
              query_posts('category_name=blog');           
              if ( have_posts() ) : while ( have_posts() ) : the_post(); 
            ?>
            <div class="row">
              <div class="wrapper">
                <div class="left_content">
                  <?php 
                    $thumbnail_id = get_post_meta( $post->ID, '_thumbnail_id', true );
                    $img_alt = get_post_meta ( $thumbnail_id, '_wp_attachment_image_alt', true );

                    if(! $img_alt){
                        $img_alt = get_the_title();
                    }
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
                  ?>
                  <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo $image[0];; ?>" alt="<?php echo $img_alt; ?>">
                  </a>
                </div>
                <div class="right_content">
                  <a href="<?php the_permalink(); ?>">
                    <h6><?php echo get_the_title(); ?></h6>
                  </a>
                  <p><?php echo get_the_excerpt(); ?></p>
                  <p><span class="bold"><?php echo get_the_author(); ?></span> &bull;  <span class="grey"><?php the_time('F j, Y'); ?></span></p>
                </div><!-- right_content -->
              </div><!-- wrapper -->
            </div>
            <?php endwhile; endif; wp_reset_query(); ?> 
          </div><!-- blog_content -->
        </div><!-- col-sm-12 -->
      </div><!-- row -->
    </div><!-- container-sm -->
  </div><!-- rules -->

  <div id="about_us" class="about2">
    <div class="container-sm">
      <div class="row">
        <div class="wrapper">
          <div class="left_content">
            <img src="<?php echo get_template_directory_uri(); ?>/images/about_us.png" alt="">
          </div><!-- left_content -->
          <div class="right_content">
            <h6>About Us</h6>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
          </div><!-- right_content -->
        </div><!-- wrapper -->
      </div><!-- row -->
    </div><!-- container-sm -->
  </div><!-- about_us -->

<?php
  get_footer(); ?>

