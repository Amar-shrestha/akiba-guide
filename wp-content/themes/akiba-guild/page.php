<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package akiba-guild
 */

get_header();
?>

<div id="main-banner">
    <div class="row">
      <div class="col-sm-12"> 
        <div class="banner_bg">
          <img src="<?php echo get_template_directory_uri(); ?>/images/banner_bg2.png" alt="">
        </div>
      </div><!--col-sm-12-->
    </div><!--row-->
</div><!--main-banner-->

<?php
	while ( have_posts() ) :
		the_post(); ?>

		<div id="blog_single">
		  <div class="container-sm">
		    <div class="row">
		      <div class="col-sm-12">
		        <div class="title">
		          <h3><?php echo get_the_title(); ?></h3>
		        </div><!-- title -->
		        <div class="blog_wrap">
		          <!-- <div class="blog_box">
		            <h6>ブログ </h6>
		          </div> -->
		          <div class="blog_content">
		            <div class="right_content">
		              <p><span class="bold"><?php echo get_the_author(); ?></span> &bull;  <span class="grey"><?php the_time('F j, Y'); ?></span></p>
		            </div>
		            <?php echo get_the_content(); ?>
		          </div>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
<?php
	endwhile; 
get_footer(); ?>