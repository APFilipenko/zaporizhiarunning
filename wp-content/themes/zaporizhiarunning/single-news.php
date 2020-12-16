 <?php get_header();
if (have_posts()): while (have_posts()): the_post();
        get_template_part('banner', 'top');
        $date  = substr($post->post_date, 8, 2);
        $month = substr($post->post_date, 5, 2);
        $year  = substr($post->post_date, 0, 4);?>
    <div class="section padding_layout_1 blog_grid" style="min-height: 450px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-left">
            <div class="full">
              <div class="blog_section margin_bottom_0">
                <div class="blog_feature_cantant blog_news_one">
                  <p class="blog_head"><?the_title();?></p>
                  <div class="post_info">
                    <ul>
                      <li><i class="fa fa-calendar" aria-hidden="true"></i> <?news_month_bar($date, $month, $year);?></li>
                    </ul>
                  </div>
                  <p><?the_content();?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
        <?endwhile;
else:
endif;
get_footer();?>