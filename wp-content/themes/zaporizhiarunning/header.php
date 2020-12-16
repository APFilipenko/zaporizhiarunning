<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>It.Next - IT Service Responsive Html Theme</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- site icons -->
<link rel="icon" href="<?php echo get_template_directory_uri() ?>/assets/images/fevicon/fevicon.png" type="image/gif" />
<!-- bootstrap css -->

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <?php wp_head();?>
</head>
<body id="default_theme" class="it_service">
<!-- loader -->
<div class="bg_load"><a href="<?php home_url();?>"><img class="loader_animation" src="<?php echo get_template_directory_uri() ?>/assets/images/loaders/loader_1.png" alt="#" /></a></div>
<!-- end loader -->
<!-- header -->
<header id="default_header" class="header_style_1">
  <!-- header top -->
  <div class="header_top">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6">
          <div class="full">
            <div class="social_icon">
              <ul class="list-inline">
                <li><a class="fa fa-facebook" href="https://www.facebook.com/groups/644754919793011" title="Facebook" target="_blank"></a></li>
                <li><a class="fa fa-instagram" href="https://www.instagram.com/zaporizhia_running" title="Instagram" target="_blank"></a></li>
                <li><a class="fa fa-telegram" href="https://t.me/ZaporizhiaRunning" title="Telegram" target="_blank"></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 right_section_header_top">
          <div class="float-right">
            <div class="make_appo"> <a class="btn white_btn poplight" rel="popup_contact" href="#?w=350">Мы перезвоним</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end header top -->
  <!-- header bottom -->
  <div class="header_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
          <!-- logo start -->
          <div class="logo"> <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logos/it_logo.png" alt="logo" /></a> </div>
          <!-- logo end -->
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
          <!-- menu start -->
          <div class="menu_side">
            <div id="navbar_menu">
              <?php wp_nav_menu(array(
    'theme_location' => 'top',
    'container'      => null,
    'menu_class'     => 'first-ul',
));?>
            </div>
          </div>
          <!-- menu end -->
        </div>
      </div>
    </div>
  </div>
  <!-- header bottom end -->
</header>
<div id="popup_contact" class="popup_block">
                  <div class="form" style="text-align:center">
                    <div class="note">
                    <p class="form-head">Оставьте свои данные</p>
                    </div>
                    <form id="ajaxform" class="modal-form" action="" method="post">
                    <fieldset>
                    <p class="first">
                      <input type="text" name="name" id="name" placeholder="Вaшe имя" size="30"/>
                    </p>
                    <p>
                      <input class="button-form" type="text" name="tel" id="tel" placeholder="Вaш номер телефона" size="30"/>
                    </p>
                    </fieldset>
                      <div style="margin: 0 auto; text-align:center;">
                      <input class="zn_sub_button button th-button-register bt_main" style="margin-top: 15px;" type="submit" value="Отправить"/>
                      </div>
                    </form>
                  </div>
                    <p id="result"></p>
                  </div>
