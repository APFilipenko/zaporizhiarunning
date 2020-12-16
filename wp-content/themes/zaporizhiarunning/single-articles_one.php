<?php get_template_part('banner', 'top');
$aut = get_field('author_articles', $post->ID);
if (!empty(get_field('facebook_part', $aut->ID))) {
    $class_aut   = 'fa fa-facebook';
    $linc_author = get_field('facebook_part', $aut->ID);
} else if (!empty(get_field('instagram_part', $aut->ID))) {
    $class_aut   = 'fa fa-instagram';
    $linc_author = get_field('instagram_part', $aut->ID);
} else {
    $class_aut   = 'fab fa-telegram';
    $linc_author = get_field('telegram_part', $aut->ID);
}
$image_articles = get_post(get_field('articles_image', $post->ID));
$date           = substr($post->post_date, 8, 2);
$month          = substr($post->post_date, 5, 2);
$year           = substr($post->post_date, 0, 4);?>
<div class="section padding_layout_1 blog_grid">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-right">
      <?php get_sidebar('articles');?>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 pull-left">
        <div class="full">
          <div class="blog_section margin_bottom_0">
            <div class="blog_feature_img"> <img class="img-responsive" src="<?php echo $image_articles->guid; ?>" alt="#"> </div>
            <div class="blog_feature_cantant">
              <p class="blog_head"><?the_title();?></p>
              <div class="post_info">
                <ul>
                  <li><i class="<?echo $class_aut ?>" aria-hidden="true"></i><a href="<?echo $linc_author ?>" target="_blank"> <?php echo get_the_title($aut->ID) ?></a></li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i> <?news_month_bar($date, $month, $year);?></li>
                </ul>
              </div>
              <p><?the_content();?></p>
              <?if (!empty(get_field('gallery_articles', $post->ID))) {
    $gallery_articles = get_field('gallery_articles', $post->ID);?>
                    <div class="clearfix mosaicflow">
                        <?php $thumb = get_field('gallery_image', $gallery_articles->ID);
    $thumb_int                           = intval($thumb);
    $images                              = get_children(array(
        'post_parent'    => $gallery_articles->ID,
        'post_type'      => 'attachment',
        'numberposts'    => 4, // количество выводимых изображений
        'post_mime_type' => 'image',
        'exclude'        => $thumb_int,
    ));
    foreach ($images as $key => $value) {
        ?>
                        <div class="mosaicflow__item">
                        <a class="fancybox-thumb" rel="fancybox-thumb" href="<?php echo wp_get_attachment_url($value->ID) ?>"
                            title=
                            <?if (!empty($value->post_excerpt)) {
            echo '"Фото сделано:   ' . $value->post_excerpt;
        } else {
            echo '"';
        }
        if (!empty($value->post_content)) {
            echo '   Описание:   ' . $value->post_content . '">';
        } else {
            echo '">';
        }?>
                        <img src="<?php echo wp_get_attachment_url($value->ID) ?>" alt=""/>
                        </a>
                        <script>$(document).ready(function () {
                                            $(".fancybox-thumb").fancybox({
                                                prevEffect: 'none',
                                                nextEffect: 'none',
                                                helpers: {
                                                    title: {
                                                        type: 'outside'
                                                    },
                                                    thumbs: {
                                                        width: 50,
                                                        height: 50
                                                    }
                                                }
                                            });
                                        });</script>
                        </div>
                        <?}?>
                    </div>
                    <div class="articles_gallery">
            <a href="<?echo get_permalink($gallery_articles->ID); ?>"><p>Смотреть все фото >></p></a>
        </div>
                    <?}?>
            </div>
            <?$posts = get_posts(array(
    'numberposts'         => -1,
    'orderby'             => 'date',
    'order'               => 'ASC',
    'post_type'           => 'articles',
    'post_parent__not_in' => array(0),
));
foreach ($posts as $key => $next_post) {
    setup_postdata($next_post);
    if ($next_post->ID == $post->ID) {
        ?>
  <div class="comment_section">
<?if (!empty($posts[$key - 1])) {
            $prev_image_articles = get_post(get_field('articles_image', $posts[$key - 1]->ID));?>
  <div class="pull-left text_align_left">
                <div class="full">
                  <div class="preview_commt"> <a class="comment_cantrol preview_commat" href="<?php echo get_permalink($posts[$key - 1]->ID) ?>"> <img class="img-responsive" src="<?php echo $prev_image_articles->guid; ?>" alt="<?echo $posts[$key - 1]->post_title; ?>"> <span><i class="fa fa-angle-left"></i> Предыдущая</span> </a> </div>
                </div>
              </div>
            <?}
        if (!empty($posts[$key + 1])) {
            $next_image_articles = get_post(get_field('articles_image', $posts[$key + 1]->ID));?>
  <div class="pull-right text_align_right">
                <div class="full">
                  <div class="next_commt"> <a class="comment_cantrol preview_commat" href="<?php echo get_permalink($posts[$key + 1]->ID) ?>"> <img class="img-responsive" src="<?php echo $next_image_articles->guid; ?>" alt="<?echo $posts[$key + 1]->post_title; ?>"> <span>Следующая <i class="fa fa-angle-right"></i></span> </a> </div>
                </div>
              </div>
<?}?>
</div>
<?}
}
wp_reset_postdata();?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
