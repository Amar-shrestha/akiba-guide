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

    <div id="rules">
      <div class="container-xs">
        <div class="row">
          <div class="col-sm-12">
            <div class="title">
              <h3>Rules and others</h3>
            </div><!-- title -->
            <div class="rules_content">
            	<?php
					while ( have_posts() ) :
						the_post(); ?>
		            <div class="rules_box">
		               <a href="<?php the_permalink(); ?>">
		               		<h6><?php echo get_the_title(); ?></h6>
		               </a>
		            </div>
              	<?php
					endwhile; ?>
            </div><!-- rules_content -->
          </div><!-- col-sm-12 -->
        </div><!-- row -->
      </div><!-- container-sm -->
    </div><!-- rules -->

<?php
	get_footer(); ?>