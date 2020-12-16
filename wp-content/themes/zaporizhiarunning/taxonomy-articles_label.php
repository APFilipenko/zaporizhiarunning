<?php get_header();
get_template_part('banner', 'top');?>
<div class="section padding_layout_1 blog_list">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-right">
        <?php get_sidebar('articles');?>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 pull-left">
        <div class="full">
<?php if (have_posts()): while (have_posts()): the_post();
        $date  = substr($post->post_date, 8, 2);
        $month = substr($post->post_date, 5, 2);
        $year  = substr($post->post_date, 0, 4);
        $aut   = get_field('author_articles', $post->ID);?>
              <div class="blog_section">
                <?php $image_articles = get_post(get_field('articles_image', $post->ID));?>
                <div class="blog_feature_img"> <img class="img-responsive" src="<?php echo $image_articles->guid; ?>" alt="#"> </div>
                <div class="blog_feature_cantant">
                  <p class="blog_head"><?php echo get_the_title($post->ID); ?></p>
                  <div class="post_info">
                    <ul>
                      <li><i class="fa fa-user" aria-hidden="true"> <?php echo get_the_title($aut->ID); ?></i></li>
                      <li><i class="fa fa-calendar" aria-hidden="true"></i><?news_month_bar($date, $month, $year);?></li>
                    </ul>
                  </div>
                  <p><?php echo mbCutString($post->post_content, 300, '...', 'UTF-8'); ?></p>
                  <div class="bottom_info">
                    <div class="pull-left"><a class="btn sqaure_bt" href="<?php echo get_permalink($post->ID) ?>">Читать дальше<i class="fa fa-angle-right"></i></a></div>
                  </div>
                </div>
              </div>
    <?endwhile;
endif;?>
      </div>
      </div>

    </div>
  </div>
</div>
</div>
<?php get_footer();?>