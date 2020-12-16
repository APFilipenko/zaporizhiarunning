<?php get_header();
get_template_part('banner', 'top');?>
<div class="section padding_layout_1 service_list">
  <div class="container">
    <div class="row">
      <?php get_sidebar('gallery');?>
      <div class="col-md-9">
<?php $i = 0;
$posts   = get_posts(array(
    'numberposts' => -1,
    'order'       => 'DESC',
    'post_type'   => 'gallery',
));

foreach ($posts as $post) {
    setup_postdata($post);
    if ($post->post_parent !== 0) {
        if ($i == 0) {
            echo "<div class='row'>";
        }?>
          <div class="col-md-6 service_blog margin_bottom_50">
            <div class="full">
              <?php $image_gallery = get_post(get_field('gallery_image', $post->ID));?>
              <div class="service_img"> <img class="img-responsive" src="<?php echo $image_gallery->guid; ?>" alt="#" /> </div>
              <div class="service_cont">
                <h3 class="service_head"><?php echo get_the_title($post->ID); ?></h3>
                <p><?the_content();?></p>
                <div class="bt_cont"> <a class="btn sqaure_bt" href="<?php echo get_permalink($post->ID) ?>">Смотреть</a> </div>
              </div>
            </div>
          </div>
            <?php if ($i == 1) {
            echo "</div>";
            $i = 0;
        } else {
            $i++;
        }
    }
}
if ($i == 1) {
    echo "</div>";
}
wp_reset_postdata();?>
      </div>
    </div>
  </div>
</div>
<?php get_footer();?>

