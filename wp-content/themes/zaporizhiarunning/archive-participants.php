<?php /* Template Name: participants */
get_header();
get_template_part('banner', 'top');?>
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2>Наша команда бегунов</h2>
            <p class="large">Каждый может стать частью бегового движения Запорожья и вносить
              свою лепту в борьбе с другими городами, нужно только перейти в телеграм
              <a href="https://t.me/ZaporizhiaRunning" class="link-about" title="Telegram" target="_blank">бот</a> и следовать
              подсказкам, для добаления своего профиля на сайт нужно заполнить
              <a href="https://forms.gle/gyHud6Z8Thake1vM8" class="link-about" title="Telegram" target="_blank">форму</a></p>
          </div>
        </div>
      </div>
    </div>

      <?php $i = 0;
$posts         = get_posts(array(
    'numberposts' => -1,
    'orderby'     => 'meta_value_num',
    'meta_key'    => 'kilometrazh_nedelyu',
    'order'       => 'DESC',
    'post_type'   => 'participants',
));

foreach ($posts as $post) {
    setup_postdata($post);
    if ($i == 0) {
        echo "<div class='row'>";
    }?>
      <div class="col-md-3 col-sm-6">
        <div class="full team_blog_colum teem_zp_run">
          <div class="it_team_img"> <img class="img-responsive" src="<?php the_field('part_image', $post->ID);?>" alt="#"> </div>
          <div class="team_feature_head">
            <h4><?php the_title();?></h4>
          </div>
          <div class="team_feature_social">
            <div class="social_icon">
              <ul class="list-inline">
                <?if (!empty(get_field('facebook_part', $post->ID))): ?>
                <li><a class="fa fa-facebook" href="<?php the_field('facebook_part', $post->ID);?>" title="Facebook" target="_blank"></a></li>
                <?endif;
    if (!empty(get_field('instagram_part', $post->ID))): ?>
                <li><a class="fa fa-instagram" href="<?php the_field('instagram_part', $post->ID);?>" title="Instagram" target="_blank"></a></li>
                <?endif;
    if (!empty(get_field('telegram_part', $post->ID))): ?>
                <li><a class="fab fa-telegram" href="<?php the_field('telegram_part', $post->ID);?>" title="Telegram" target="_blank"></a></li>
                <?endif;
    if (!empty(get_field('strava_part', $post->ID))): ?>
                <li><a class="fab fa-strava" href="<?php the_field('strava_part', $post->ID);?>" title="Strava" target="_blank"></a></li>
                <?endif;?>
              </ul>
            </div>
          </div>
          <div class="info_part">
            <?$date_part = get_field('date_part', $post->ID);
    if (!empty($date_part)):
        $daymontheyar = explode('.', $date_part);
        $eyars        = floor((time() - mktime(0, 0, 0, ltrim($daymontheyar[1], '0'), ltrim($daymontheyar[0], '0'), $daymontheyar[2])) / (60 * 60 * 24 * 365));
        if ($eyars < 18) {?>
              <p>Возрастная группа: до 18</p>
              <?} else if ($eyars >= 18 && $eyars < 30) {?>
            <p>Возрастная группа: 18-29</p>
            <?} else if ($eyars >= 30 && $eyars < 40) {?>
            <p>Возрастная группа: 30-39</p>
            <?} else if ($eyars >= 40 && $eyars < 50) {?>
            <p>Возрастная группа: 40-49</p>
            <?} else if ($eyars >= 50 && $eyars < 60) {?>
            <p>Возрастная группа: 50-59</p>
            <?} else if ($eyars >= 60 && $eyars < 70) {?>
            <p>Возрастная группа: 60-69</p>
            <?} else if ($eyars >= 70 && $eyars < 80) {?>
            <p>Возрастная группа: 70-79</p>
            <?} else if ($eyars >= 80) {?>
            <p>Возрастная группа: Ветераны</p>
            <?}
    endif;
    $date_run = get_field('date_run', $post->ID);

    if (!empty($date_run)):
        $daymontheyar = explode('.', $date_run);
        $montheyars   = floor((time() - mktime(0, 0, 0, ltrim($daymontheyar[1], '0'), ltrim($daymontheyar[0], '0'), $daymontheyar[2])) / (60 * 60 * 24 * 365 / 12));
        $eyars_run    = floor($montheyars / 12);
        $month_run    = ($montheyars / 12 - $eyars_run) * 12;?>
              <?if ($eyars_run == 0): ?>
              <p>Беговой стаж: <?php echo $month_run . "мес"; ?></p>
              <?else: ?>
            <p>Беговой стаж: <?php echo $eyars_run . YearTextArg($eyars_run) . " " . $month_run . "мес"; ?></p>
            <?endif;
    endif;
    if (!empty(get_field('distance_part', $post->ID))): ?>
            <p>Любимая дистанция: <?php the_field('distance_part', $post->ID);?></p>
            <?endif;?>
            <p>C <?php echo lastweek(); ?>: <?php the_field('kilometrazh_nedelyu', $post->ID);?>км</p>
            <p><?$last_month = (int) ltrim(strftime('%m', strtotime('first day of previous month')));
    $date_m                      = array('', 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь');
    echo $date_m[$last_month];?>:
            <?php the_field('kilometrazh_mesyac', $post->ID);?>км</p>
          </div>
        </div>
      </div>
      <?php if ($i == 3) {
        echo "</div>";
        $i = 0;
    } else {
        $i++;
    }
}
if ($i !== 0) {
    echo "</div>";
}
wp_reset_postdata();?>




  </div>
</div>
<?php get_footer();?>