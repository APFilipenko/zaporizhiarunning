<div class="col-md-3">
        <div class="side_bar">
          <div class="side_bar_blog">
            <h4>Категории</h4>
            <div class="categary">
              <ul>
                <?$posts = get_posts(array(
    'numberposts' => -1,
    'order'       => 'DESC',
    'post_type'   => 'gallery',
));

foreach ($posts as $post) {
    setup_postdata($post);
    if ($post->post_parent == 0) {?>
                <li><a href="<?php echo get_permalink($post->ID) ?>"><i class="fa fa-angle-right"></i> <?php echo get_the_title($post->ID); ?></a></li>
              <?php }
}
wp_reset_postdata();?>
              </ul>
            </div>
          </div>
          <div class="side_bar_blog">
            <h4>Метки</h4>
            <div class="tags">
              <ul>
               <?$terms = get_terms(array(
    'taxonomy' => array('gallery_label'), // название таксономии с WP 4.5
    'order'    => 'ASC',
));

foreach ($terms as $term) {?>
  <li><a href="<?echo get_term_link($term); ?>"><?echo $term->name; ?></a></li>
<?}?>

              </ul>
            </div>
          </div>
        </div>
      </div>