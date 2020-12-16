<?php /* Template Name: about_us */
get_header();
get_template_part('banner', 'top');?>

<!-- end inner page banner -->
<!-- section -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>Zaporizha rynning</h2>
            <p class="large">Данный ресурс создан с целью привлечения новых людей и объединению единомышленнтков занимающихся бегом</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row about_blog">
      <div class="col-lg-6 col-md-6 col-sm-12 about_cont_blog">
        <div class="full text_align_left">
          <h3>Интересное для Вас</h3>
          <ul>
            <li><i class="fa fa-check-circle"></i>Статьи на беговую тематику</li>
            <li><i class="fa fa-check-circle"></i>Информация о предстоящих ивентах</li>
            <li><i class="fa fa-check-circle"></i>Фото с ивентов и тренировок</li>
            <li><i class="fa fa-check-circle"></i>Информация о ближайших беговых мероприятиях города</li>
            <li><i class="fa fa-check-circle"></i>Знакмство с такими же бегонутыми</li>
            <li><i class="fa fa-check-circle"></i>Обмен опытом</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 about_feature_img padding_right_0">
        <div class="full text_align_center"> <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/assets/images/it_service/post-006.jpg" alt="#" /> </div>
      </div>
    </div>
    <div class="row" style="margin-top: 35px">
      <div class="col-md-8">
        <div class="full margin_bottom_30">
          <div class="accordion border_circle">
            <div class="bs-example">
              <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><i class="fa fa-users" aria-hidden="true"></i> Бег по шоссе<i class="fa fa-angle-down"></i></a> </p>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                      <p>Большая часть людей занимается именно бегом по шоссе(по улицам города), в основном - это асфальтное покрытие,
                        наиболее популярные дистанции 10км., 21.1км. и 42.195км.(марафон). Данная дисциплина очень популярна
                        среди любителей, число которых стремительно растёт. <a class="link-about" href="<?echo get_site_url(null, 'articles_label/beg-po-shosse/', null); ?>">Статьи</a> на данную тематику.</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><i class="fa fa-users"></i> Трейловый бег<i class="fa fa-angle-down"></i></a> </p>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>Бег по пересечённой местности. Маршруты, проходящие по лесным тропам, холмам и просёлочным дорогам.
                        Трейлраннерам приходится постоянно думать на несколько шагов вперёд, просчитывать манёвры на
                        дистанции, следить за маршрутом, преодолевать бездорожье и холмы. <a class="link-about" href="<?echo get_site_url(null, 'articles_label/treilovii-beg/', null); ?>">Статьи</a> на данную тематику.</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><i class="fa fa-users"></i> Бег с препятствиями<i class="fa fa-angle-down"></i></a> </p>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>Бег в котором есть всё, дистанции от самых маленьких и до 40км+, разное покрытие на протяжении всего
                        пути, количество и набор препятствий отличается на каждом из забегов. Масштабы подготовки данных ивентов
                        впечатляют так же, как и подготовка атлетов учавствующих в них. <a class="link-about" href="<?echo get_site_url(null, 'articles_label/beg-s-prepyatstviaymi/', null); ?>">Статьи</a> на данную тематику.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="full" style="margin-top: 35px;">
          <h3>Присоединяйся к нам</h3>
          <p>В чате мы душевно общаемся, делимся своими пробежками, обмениваемся информацией и опытом, шутим, делимся музыкой,
           договариваемся о совместных пробежках</p>
          <p><a class="btn main_bt" href="https://t.me/ZaporizhiaRunning">НАШ ЧАТ</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer();?>