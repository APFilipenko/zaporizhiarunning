<?php /* Template Name: main */
get_header();?>

<div id="slider" class="section main_slider">
  <div class="container-fuild">
    <div class="row">
      <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
        <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
          <ul>
            <?$slide1 = get_post(20);
$image_slide1         = get_field('image_slide', 20);?>
            <li data-index="rs-1812" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="<?echo $image_slide1; ?>"  data-rotate="0"  data-saveperformance="off"  data-title="Computer Services" data-description="">
              <!-- MAIN IMAGE -->
              <img src="<?php echo $image_slide1; ?>"  alt="#"  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
              <!-- LAYERS -->
              <!-- LAYER NR. BG -->
              <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0"
                              id="slide-270-layer-1012"
                              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                              data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                              data-width="full"
                              data-height="full"
                              data-whitespace="nowrap"
                              data-transform_idle="o:1;"
                              data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                              data-transform_out="s:300;s:300;"
                              data-start="750"
                              data-basealign="slide"
                              data-responsive_offset="on"
                              data-responsive="off"
                              style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0.50);"> </div>
              <!-- LAYER NR. 1 -->
              <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0"
                              id="slide-18-layer-912"
                              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                              data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']"
                              data-width="500"
                              data-height="140"
                              data-whitespace="nowrap"
                              data-transform_idle="o:1;"
                              data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;"
                              data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                              data-mask_in="x:0px;y:0px;"
                              data-mask_out="x:inherit;y:inherit;"
                              data-start="2000"
                              data-responsive_offset="on"
                              style="z-index: 5;background-color:rgba(29, 29, 29, 0.85);border-color:rgba(0, 0, 0, 0.50);"> </div>
              <!-- LAYER NR. 2 -->
              <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0"
                              id="slide-18-layer-112"
                              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                              data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                              data-fontsize="['70','70','70','35']"
                              data-lineheight="['70','70','70','50']"
                              data-width="none"
                              data-height="none"
                              data-whitespace="nowrap"
                              data-transform_idle="o:1;"
                              data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                              data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                              data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                              data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                              data-start="1000"
                              data-splitin="chars"
                              data-splitout="none"
                              data-responsive_offset="on"
                              data-elementdelay="0.05"
                              style="z-index: 6; white-space: nowrap;"><?echo $slide1->post_title; ?></div>
              <!-- LAYER NR. 3 -->
              <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0"
                              id="slide-18-layer-412"
                              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                              data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']"
                              data-width="none"
                              data-height="none"
                              data-whitespace="nowrap"
                              data-transform_idle="o:1;"
                              data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                              data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                              data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                              data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                              data-start="1500"
                              data-splitin="none"
                              data-splitout="none"
                              data-responsive_offset="on"
                              style="z-index: 7; white-space: nowrap;"><?echo $slide1->post_content; ?></div>
            </li>
            <?$slide2 = get_post(124);
$image_slide2         = get_field('image_slide', 124);?>
            <li data-index="rs-181" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="<?php echo $image_slide2; ?>"  data-rotate="0"  data-saveperformance="off"  data-title="Easy To Use & Customize" data-description="">
              <!-- MAIN IMAGE -->
              <img src="<?php echo $image_slide2; ?>"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
              <!-- LAYERS -->
              <!-- LAYER NR. BG -->
              <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0"
                              id="slide-270-layer-101"
                              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                              data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                              data-width="full"
                              data-height="full"
                              data-whitespace="nowrap"
                              data-transform_idle="o:1;"
                              data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                              data-transform_out="s:300;s:300;"
                              data-start="750"
                              data-basealign="slide"
                              data-responsive_offset="on"
                              data-responsive="off"
                              style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0.50);"> </div>
              <!-- LAYER NR. 1 -->
              <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0"
                              id="slide-18-layer-91"
                              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                              data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']"
                              data-width="500"
                              data-height="140"
                              data-whitespace="nowrap"
                              data-transform_idle="o:1;"
                              data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;"
                              data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                              data-mask_in="x:0px;y:0px;"
                              data-mask_out="x:inherit;y:inherit;"
                              data-start="2000"
                              data-responsive_offset="on"
                              style="z-index: 5;background-color:rgba(29, 29, 29, 0.85);border-color:rgba(0, 0, 0, 0.50);"> </div>
              <!-- LAYER NR. 2 -->
              <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0"
                              id="slide-18-layer-11"
                              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                              data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                              data-fontsize="['70','70','70','35']"
                              data-lineheight="['70','70','70','50']"
                              data-width="none"
                              data-height="none"
                              data-whitespace="nowrap"
                              data-transform_idle="o:1;"
                              data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                              data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                              data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                              data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                              data-start="1000"
                              data-splitin="chars"
                              data-splitout="none"
                              data-responsive_offset="on"
                              data-elementdelay="0.05"
                              style="z-index: 6; white-space: nowrap;"><?echo $slide2->post_title; ?></div>
              <!-- LAYER NR. 3 -->
              <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0"
                              id="slide-18-layer-41"
                              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                              data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']"
                              data-width="none"
                              data-height="none"
                              data-whitespace="nowrap"
                              data-transform_idle="o:1;"
                              data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                              data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                              data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                              data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                              data-start="1500"
                              data-splitin="none"
                              data-splitout="none"
                              data-responsive_offset="on"
                              style="z-index: 7; white-space: nowrap;"><?echo $slide2->post_content; ?></div>
            </li>
            <?$slide3 = get_post(126);
$image_slide3         = get_field('image_slide', 126);?>
            <li data-index="rs-18" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="<?php echo $image_slide3; ?>"  data-rotate="0"  data-saveperformance="off"  data-title="Perfectly Responsive" data-description="">
              <!-- MAIN IMAGE -->
              <img src="<?php echo $image_slide3; ?>"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
              <!-- LAYERS -->
              <!-- LAYER NR. BG -->
              <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0"
                              id="slide-270-layer-10"
                              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                              data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                              data-width="full"
                              data-height="full"
                              data-whitespace="nowrap"
                              data-transform_idle="o:1;"
                              data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                              data-transform_out="s:300;s:300;"
                              data-start="750"
                              data-basealign="slide"
                              data-responsive_offset="on"
                              data-responsive="off"
                              style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0.50);"> </div>
              <!-- LAYER NR. 1 -->
              <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0"
                              id="slide-18-layer-9"
                              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                              data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']"
                              data-width="500"
                              data-height="140"
                              data-whitespace="nowrap"
                              data-transform_idle="o:1;"
                              data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;"
                              data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                              data-mask_in="x:0px;y:0px;"
                              data-mask_out="x:inherit;y:inherit;"
                              data-start="2000"
                              data-responsive_offset="on"
                              style="z-index: 5;background-color:rgba(29, 29, 29, 0.85);border-color:rgba(0, 0, 0, 0.50);"> </div>
              <!-- LAYER NR. 2 -->
              <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0"
                              id="slide-18-layer-1"
                              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                              data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                              data-fontsize="['70','70','70','35']"
                              data-lineheight="['70','70','70','50']"
                              data-width="none"
                              data-height="none"
                              data-whitespace="nowrap"
                              data-transform_idle="o:1;"
                              data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                              data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                              data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                              data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                              data-start="1000"
                              data-splitin="chars"
                              data-splitout="none"
                              data-responsive_offset="on"
                              data-elementdelay="0.05"
                              style="z-index: 6; white-space: nowrap;"><?echo $slide3->post_title; ?></div>
              <!-- LAYER NR. 3 -->
              <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0"
                              id="slide-18-layer-4"
                              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                              data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']"
                              data-width="none"
                              data-height="none"
                              data-whitespace="nowrap"
                              data-transform_idle="o:1;"
                              data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                              data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                              data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                              data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                              data-start="1500"
                              data-splitin="none"
                              data-splitout="none"
                              data-responsive_offset="on"
                              style="z-index: 7; white-space: nowrap;"><?echo $slide3->post_content; ?></div>
            </li>
          </ul>
          <div class="tp-static-layers"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<?$news = get_posts(array(
    'numberposts' => 3,
    'order'       => 'DESC',
    'post_type'   => 'news',
));
if (!empty($news)) {
    ?>
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>Актуальные новости</h2>
            <p class="large">Информация о предстоящих открытых тренировках, совместных забегах, ивентах, свежих статьях и фото</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row about_blog">
      <div class="col-lg-6 col-md-6 col-sm-12 about_cont_blog">
        <div class="full text_align_left">
          <ul class="main-news-text">
          <?foreach ($news as $new) {
        setup_postdata($new);
        $newpost = get_field('post_link', $new->ID);
        $date    = substr($new->post_date, 8, 2);
        $month   = substr($new->post_date, 5, 2);
        $year    = substr($new->post_date, 0, 4);
        if ($newpost->post_type == 'gallery') {
            ?>
            <li class="main-news-actual"><a href="<?php echo get_permalink($newpost->ID) ?>"><i class="fa fa-check-circle"></i>В галерее новый альбом <<<?echo $newpost->post_title; ?>>></a></li>
            <div class="post_info">
                <ul>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i> <?news_month_bar($date, $month, $year);?></li>
                </ul>
              </div>
            <div class="main-gallery">
                        <?php $thumb = get_field('gallery_image', $newpost->ID);
            $thumb_int                           = intval($thumb);
            $images                              = get_children(array(
                'post_parent'    => $newpost->ID,
                'post_type'      => 'attachment',
                'numberposts'    => 4, // количество выводимых изображений
                'post_mime_type' => 'image',
                'exclude'        => $thumb_int,
            ));
            foreach ($images as $key => $value) {?>
                        <img src="<?php echo wp_get_attachment_url($value->ID) ?>" alt=""/>
                        <?}?>
                    </div>
          <?} else if ($newpost->post_type == 'articles') {?>
          <li class="main-news-actual"><a href="<?php echo get_permalink($newpost->ID) ?>"><i class="fa fa-check-circle"></i>Новая статья <<<?echo $newpost->post_title; ?>>></a></li>
            <div class="post_info">
                <ul>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i> <?news_month_bar($date, $month, $year);?></li>
                </ul>
              </div>
            <p><?php echo mbCutString($newpost->post_content, 130, '...', 'UTF-8'); ?></p>
       <?} else {?>
        <li class="main-news-actual"><a href="<?php echo get_permalink($new->ID) ?>"><i class="fa fa-check-circle"></i><?echo $new->post_title; ?></a></li>
            <div class="post_info">
                <ul>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i> <?news_month_bar($date, $month, $year);?></li>
                </ul>
              </div>
            <p><?php echo mbCutString($new->post_content, 130, '...', 'UTF-8'); ?></p>
      <?}
    }
    wp_reset_postdata();?>
          </ul>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 about_feature_img padding_right_0">
        <div class="full text_align_center"> <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/assets/images/it_service/post-06.jpg" alt="#" /> </div>
      </div>
    </div>
  </div>
</div>
<?}?>
<div class="section padding_layout_1 last-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2>Лучшие на прошлой неделе</h2>
            <p class="large">Бегуны сделавшие наибольший вклад в период с <?php echo lastweek(); ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <?$posts = get_posts(array(
    'numberposts' => -1,
    'orderby'     => 'meta_value_num',
    'meta_key'    => 'kilometrazh_nedelyu',
    'order'       => 'DESC',
    'post_type'   => 'participants',
));
$partmain = 0;
foreach ($posts as $post) {
    setup_postdata($post);
    $partmain = ++$partmain;
    if ($partmain < 5) {
        ?>
      <div class="col-md-3 col-sm-6">
        <div class="full team_blog_colum">
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
      <?}
}
wp_reset_postdata();
$partall = count($posts);?>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="full">
    <?if ($partall > 3): ?>
    <script>
    var ajaxurl = '<?php echo site_url(); ?>/wp-admin/admin-ajax.php';
    </script>
    <div class="bottom_info">
    <div class="pull-left"><a class="btn sqaure_bt button-main-all" id="loadmore" >Показать весь рейтинг<i class="fa fa-angle-right"></i></a></div>
  </div>
<?php endif;?>
</div>
    </div>
    </div>
  </div>
</div>

<!-- section -->
<div class="section padding_layout_1 last-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>Ближайшие ивенты</h2>
            <p class="large">Старты в которых ты можешь испытать свои силы</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">

<?php $posts = get_posts(array(
    'numberposts' => 4,
    'orderby'     => 'meta_value',
    'meta_key'    => 'date_event',
    'order'       => 'ASC',
    'post_type'   => 'event',
));

foreach ($posts as $post) {
    setup_postdata($post);?>
  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
    <div class="product_list">
          <div class="product_img"> <img class="img-responsive" src="<?php the_field('image_event', $post->ID);?>" alt=""> </div>
          <div class="product_detail_btm">
            <div class="center">
              <h4><a href="<?php the_field('linc_event', $post->ID);?>" target="_blank"><?php the_title();?></a></h4>
            </div>
            <div class="product_price">
              <p><span class="new_price"><?php the_field('date_event', $post->ID);?></span></p>
            </div>
          </div>
        </div>
      </div>
<?php }
wp_reset_postdata();?>
    </div>
  </div>
</div>
<!-- end section -->
<?php get_footer();?>
