<?php

add_action('wp_enqueue_scripts', 'theme_styles');
add_action('wp_enqueue_scripts', 'theme_scripts');
add_action('after_setup_theme', 'myMenu');

add_filter('the_generator', '__return_empty_string');

function myMenu()
{
    register_nav_menu('top', 'Меню в шапке');
}

function theme_styles()
{
    wp_enqueue_style('theme_style', get_stylesheet_uri());
    wp_enqueue_style('style_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('fontawesom', get_template_directory_uri() . '/assets/css/all.min.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css');
    wp_enqueue_style('colors1', get_template_directory_uri() . '/assets/css/colors1.css');
    wp_enqueue_style('custom', get_template_directory_uri() . '/assets/css/custom.css');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('settings', get_template_directory_uri() . '/assets/revolution/css/settings.css');
    wp_enqueue_style('layers', get_template_directory_uri() . '/assets/revolution/css/layers.css');
    wp_enqueue_style('navigation', get_template_directory_uri() . '/assets/revolution/css/navigation.css');
    wp_enqueue_style('fancybox', get_template_directory_uri() . '/assets/fancyapps/source/jquery.fancybox.css');

}

function theme_scripts()
{
    wp_deregister_script('jquery-core');
    wp_register_script('jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
    wp_enqueue_script('jquery', array(), null, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('menumaker', get_template_directory_uri() . '/assets/js/menumaker.js', array('jquery'), null, true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.js', array('jquery'), null, true);
    wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), null, true);
    wp_enqueue_script('tools', get_template_directory_uri() . '/assets/revolution/js/jquery.themepunch.tools.min.js', array('jquery'), null, true);
    wp_enqueue_script('revolution', get_template_directory_uri() . '/assets/revolution/js/jquery.themepunch.revolution.min.js', array('jquery'), null, true);
    wp_enqueue_script('actions', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.actions.min.js', array('jquery'), null, true);
    wp_enqueue_script('carousel', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.carousel.min.js', array('jquery'), null, true);
    wp_enqueue_script('kenburn', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.kenburn.min.js', array('jquery'), null, true);
    wp_enqueue_script('layeranimation', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js', array('jquery'), null, true);
    wp_enqueue_script('migration', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.migration.min.js', array('jquery'), null, true);
    wp_enqueue_script('navigation', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.navigation.min.js', array('jquery'), null, true);
    wp_enqueue_script('parallax', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.parallax.min.js', array('jquery'), null, true);
    wp_enqueue_script('slideanims', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.slideanims.min.js', array('jquery'), null, true);
    wp_enqueue_script('video', get_template_directory_uri() . '/assets/js/extensions/revolution.extension.video.min.js', array('jquery'), null, true);
    wp_enqueue_script('mosaicflow', get_template_directory_uri() . '/assets/mosaicflow/jquery.mosaicflow.min.js', array('jquery'), null, true);
    wp_enqueue_script('fancybox', get_template_directory_uri() . '/assets/fancyapps/source/jquery.fancybox.pack.js', array('jquery'), null, true);
    wp_enqueue_script('dm-modal', get_template_directory_uri() . '/assets/modal_contact/js/dm-modal.js', array('jquery'), null, true);
    wp_enqueue_script('mail', get_template_directory_uri() . '/assets/modal_contact/js/mail.js', array('jquery'), null, true);
    wp_enqueue_script('loadmore', get_stylesheet_directory_uri() . '/loadmore.js', array('jquery'), null, true);
}

add_action('init', 'prowp_register_my_post_types_type_slide');
function prowp_register_my_post_types_type_slide()
{
    $labels = array(
        'name'               => 'Слайд',
        'singular_name'      => 'Слайд',
        'add_new'            => 'Добавить новый слайд',
        'add_new_item'       => 'Добавить новый слайд',
        'edit_item'          => 'Редактирование слайда',
        'new_item'           => 'Новый слайд',
        'all_items'          => 'Все слайды',
        'view_item'          => 'Вид слайда',
        'search_items'       => 'Поиск слайдов',
        'not_found'          => 'Нет слайдов',
        'not_found_in_trash' => 'Нет слайдов в корзине',
        'parent_item_colon'  => '',
        'menu_name'          => 'Слайды',
    );
    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => null,
        'exclude_from_search' => null,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 11,
        'menu_icon'           => null,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array('title', 'editor'),
        'has_archive'         => true,
        'rewrite'             => true,
        'query_var'           => true,
        'show_in_nav_menus'   => null,
    );
    register_post_type('slide', $args);
}

add_action('init', 'prowp_register_my_post_types_type_gallery');
function prowp_register_my_post_types_type_gallery()
{
    $labels = array(
        'name'               => 'Галерея',
        'singular_name'      => 'Галерея',
        'add_new'            => 'Добавить новую галерею',
        'add_new_item'       => 'Добавить новую галерею',
        'edit_item'          => 'Редактирование галереи',
        'new_item'           => 'Новая галерея',
        'all_items'          => 'Все галереи',
        'view_item'          => 'Вид галереи',
        'search_items'       => 'Поиск галерей',
        'not_found'          => 'Нет галерей',
        'not_found_in_trash' => 'Нет галерей в корзине',
        'parent_item_colon'  => '',
        'menu_name'          => 'Галереи',
    );
    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => null,
        'exclude_from_search' => null,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 11,
        'menu_icon'           => null,
        'capability_type'     => 'post',
        'hierarchical'        => true,
        'supports'            => array('title', 'editor', 'page-attributes'),
        'has_archive'         => true,
        'rewrite'             => true,
        'query_var'           => true,
        'show_in_nav_menus'   => null,
        'taxonomies'          => array('label'),
    );
    register_post_type('gallery', $args);
}

// хук для регистрации
add_action('init', 'create_taxonomy_gallery');
function create_taxonomy_gallery()
{
    register_taxonomy('gallery_label', ['gallery'], [
        'label'              => '', // определяется параметром $labels->name
        'labels'             => [
            'name'              => 'Метки',
            'singular_name'     => 'Метка',
            'search_items'      => 'Найти метку',
            'all_items'         => 'Все метки',
            'view_item '        => 'Смотреть метки',
            'parent_item'       => 'Родительская метка',
            'parent_item_colon' => 'Родительская метка:',
            'edit_item'         => 'Изменить метку',
            'update_item'       => 'Обновить метку',
            'add_new_item'      => 'Добавить метку',
            'new_item_name'     => 'Новое имя метки',
            'menu_name'         => 'Метки',
        ],
        'description'        => '', // описание таксономии
        'public'             => true,
        'publicly_queryable' => null, // равен аргументу public
        'hierarchical'       => false,
        'rewrite'            => true,
    ]);
}

add_action('init', 'prowp_register_my_post_types_type_participants');
function prowp_register_my_post_types_type_participants()
{
    $labels = array(
        'name'               => 'Участники',
        'singular_name'      => 'Участник',
        'add_new'            => 'Добавить нового участника',
        'add_new_item'       => 'Добавить нового участника',
        'edit_item'          => 'Редактирование участника',
        'new_item'           => 'Новый участник',
        'all_items'          => 'Все участники',
        'view_item'          => 'Вид участника',
        'search_items'       => 'Поиск участника',
        'not_found'          => 'Нет участников',
        'not_found_in_trash' => 'Нет участников в корзине',
        'parent_item_colon'  => '',
        'menu_name'          => 'Участники',
    );
    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => null,
        'exclude_from_search' => null,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 11,
        'menu_icon'           => null,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array('title', 'editor'),
        'has_archive'         => true,
        'rewrite'             => true,
        'query_var'           => true,
        'show_in_nav_menus'   => null,
    );
    register_post_type('participants', $args);
}

add_action('init', 'prowp_register_my_post_types_type_event');
function prowp_register_my_post_types_type_event()
{
    $labels = array(
        'name'               => 'Ивент',
        'singular_name'      => 'Ивент',
        'add_new'            => 'Добавить новый ивент',
        'add_new_item'       => 'Добавить новый ивент',
        'edit_item'          => 'Редактирование ивента',
        'new_item'           => 'Новый ивент',
        'all_items'          => 'Все ивенты',
        'view_item'          => 'Вид ивента',
        'search_items'       => 'Поиск ивента',
        'not_found'          => 'Нет ивентов',
        'not_found_in_trash' => 'Нет ивентов в корзине',
        'parent_item_colon'  => '',
        'menu_name'          => 'Ивенты',
    );
    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => null,
        'exclude_from_search' => null,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 11,
        'menu_icon'           => null,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array('title', 'editor'),
        'has_archive'         => true,
        'rewrite'             => true,
        'query_var'           => true,
        'show_in_nav_menus'   => null,
    );
    register_post_type('event', $args);
}

add_action('init', 'prowp_register_my_post_types_type_news');
function prowp_register_my_post_types_type_news()
{
    $labels = array(
        'name'               => 'Новость',
        'singular_name'      => 'Новость',
        'add_new'            => 'Добавить новую новость',
        'add_new_item'       => 'Добавить новую новость',
        'edit_item'          => 'Редактирование новостей',
        'new_item'           => 'Новая новость',
        'all_items'          => 'Все новости',
        'view_item'          => 'Вид новости',
        'search_items'       => 'Поиск новости',
        'not_found'          => 'Нет новостей',
        'not_found_in_trash' => 'Нет новостей в корзине',
        'parent_item_colon'  => '',
        'menu_name'          => 'Новости',
    );
    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => null,
        'exclude_from_search' => null,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 11,
        'menu_icon'           => null,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array('title', 'editor'),
        'has_archive'         => true,
        'rewrite'             => true,
        'query_var'           => true,
        'show_in_nav_menus'   => null,
    );
    register_post_type('news', $args);
}

add_action('init', 'prowp_register_my_post_types_type_articles');
function prowp_register_my_post_types_type_articles()
{
    $labels = array(
        'name'               => 'Статьи',
        'singular_name'      => 'Статья',
        'add_new'            => 'Добавить новую статью',
        'add_new_item'       => 'Добавить новую статью',
        'edit_item'          => 'Редактирование статьи',
        'new_item'           => 'Новая статья',
        'all_items'          => 'Все статьи',
        'view_item'          => 'Вид статьи',
        'search_items'       => 'Поиск статьи',
        'not_found'          => 'Нет стаей',
        'not_found_in_trash' => 'Нет статей в корзине',
        'parent_item_colon'  => '',
        'menu_name'          => 'Статьи',
    );
    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => null,
        'exclude_from_search' => null,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 11,
        'menu_icon'           => null,
        'capability_type'     => 'post',
        'hierarchical'        => true,
        'supports'            => array('title', 'editor', 'page-attributes'),
        'has_archive'         => true,
        'rewrite'             => true,
        'rewrite'             => array(
            'with_front' => false,
            'pages'      => true,
            'feeds'      => false,
            'feed'       => false,
        ),
        'query_var'           => true,
        'show_in_nav_menus'   => null,
    );
    register_post_type('articles', $args);
}

add_action('init', 'create_taxonomy_articles');
function create_taxonomy_articles()
{
    register_taxonomy('articles_label', ['articles'], [
        'label'              => '', // определяется параметром $labels->name
        'labels'             => [
            'name'              => 'Метки',
            'singular_name'     => 'Метка',
            'search_items'      => 'Найти метку',
            'view_item '        => 'Смотреть метки',
            'all_items'         => 'Все метки',
            'parent_item'       => 'Родительская метка',
            'parent_item_colon' => 'Родительская метка:',
            'edit_item'         => 'Изменить метку',
            'update_item'       => 'Обновить метку',
            'add_new_item'      => 'Добавить метку',
            'new_item_name'     => 'Новое имя метки',
            'menu_name'         => 'Метки',
        ],
        'description'        => '', // описание таксономии
        'public'             => true,
        'publicly_queryable' => null, // равен аргументу public
        'hierarchical'       => false,
        'rewrite'            => true,
    ]);
}

function YearTextArg($year)
{
    $year = abs($year);
    $t1   = $year % 10;
    $t2   = $year % 100;
    return ($t1 == 1 && $t2 != 11 ? "год" : ($t1 >= 2 && $t1 <= 4 && ($t2 < 10 || $t2 >= 20) ? "года" : "лет"));
}

function lastweek()
{
    $previous_week = strtotime("-1 week +1 day");
    $start_week    = strtotime("last monday midnight", $previous_week);
    $end_week      = strtotime("next sunday", $start_week);
    $start_week    = date("d.m.y", $start_week);
    $end_week      = date("d.m.y", $end_week);
    return $start_week . ' по ' . $end_week;
}

function mbCutString($str, $length, $postfix, $encoding)
{
    if (mb_strlen($str, $encoding) <= $length) {
        return $str;
    }

    $tmp = mb_substr($str, 0, $length, $encoding);
    return mb_substr($tmp, 0, mb_strripos($tmp, ' ', 0, $encoding), $encoding) . $postfix;
}

function news_month_bar($a, $b, $c)
{
    $monthsList = array(
        "Янв" => "01",
        "Фев" => "02",
        "Мар" => "03",
        "Апр" => "04",
        "Мая" => "05",
        "Июн" => "06",
        "Июл" => "07",
        "Авг" => "08",
        "Сен" => "09",
        "Окт" => "10",
        "Ноя" => "11",
        "Дек" => "12",
    );
    $key = array_search($b, $monthsList);
    echo " " . $a . " " . $key . " " . $c;

}

remove_filter('the_content', 'wpautop'); // для контента
remove_filter('the_excerpt', 'wpautop'); // для анонсов
remove_filter('comment_text', 'wpautop'); // для комментарий

function dbInstance(): PDO
{
    static $db;
    if ($db === null) {
        $db = new PDO('mysql:host=localhost;dbname=zaprun', 'root', '', [ //соеденяемся с базой, конструктор класса PDO принимает три параметра
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // первая константа отвечает за работу всех FETCH вторая говорит что бы передавался только асоциативный массив
        ]);
        $db->exec('SET NAMES UTF8'); // exec выставляем кодировку связи с базой
    }

    return $db;
}

function dbQuery(string $sql, array $params = []): PDOStatement
{
    $db    = dbInstance();
    $query = $db->prepare($sql); // вызывается один раз, подготавливает запрос и возвращает объект
    $query->execute($params); //передаём массив параметров автоматически заполняет маску из массива
    dbCheckError($query); //проверка на ошибки
    return $query;
}

function dbCheckError(PDOStatement $query): bool
{
    $errInfo = $query->errorInfo(); // проверяем есть ли ошибки в запросе
    if ($errInfo[0] !== PDO::ERR_NONE) {
        // PDO::ERR_NONE = 00000 ошибок нет
        echo $errInfo[2]; // выводим текстовое описание ошибки
        exit();
    }
    return true;
}
function partAll(): array
{
    $sql   = "SELECT ID FROM zaprun_posts WHERE post_type = 'participants'";
    $query = dbQuery($sql);
    return $query->fetchAll();
}
function partAllNik($idpart): array
{
    $sql   = "SELECT meta_value FROM zaprun_postmeta WHERE post_id = $idpart AND meta_key = 'username_tel'";
    $query = dbQuery($sql);
    return $query->fetch();
}
function partKilometrag($idpart, $kilom)
{
    $sql   = "UPDATE zaprun_postmeta SET meta_value = $kilom WHERE post_id = $idpart AND meta_key = 'kilometrazh_nedelyu'";
    $query = dbQuery($sql);
}

function partKilometragMonth($idpart, $kilom)
{
    $sql   = "UPDATE zaprun_postmeta SET meta_value = $kilom WHERE post_id = $idpart AND meta_key = 'kilometrazh_mesyac'";
    $query = dbQuery($sql);
}

function weekMounthKilometrag($array_csv)
{
    $array_week_mounth = array();
    foreach ($array_csv as $key => $value) {
        $strriposvalue                   = strripos(str_replace('0km.', '', trim(stristr($value[0], ' '))), ' ');
        $substrvalue                     = substr(str_replace('0km.', '', trim(stristr($value[0], ' '))), ++$strriposvalue);
        $replacevaluetop                 = str_replace(' ' . $substrvalue, '', str_replace('0km.', '', trim(stristr($value[0], ' '))));
        $array_week_mounth[$substrvalue] = $replacevaluetop;
    }
    return $array_week_mounth;
}

function loadmore_get_posts()
{
    $lastposts = get_posts(array(
        'numberposts' => -1,
        'orderby'     => 'meta_value_num',
        'meta_key'    => 'kilometrazh_nedelyu',
        'order'       => 'DESC',
        'post_type'   => 'participants',
    ));
    $part = 0;
    foreach ($lastposts as $post) {
        setup_postdata($post);
        $part = ++$part;
        if ($part > 4) {
            ?>
    <div class="tab-info login-section">
        <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <p><?echo $post->post_title; ?></p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <p>C <?php echo lastweek(); ?>: <?php the_field('kilometrazh_nedelyu', $post->ID);?>км</p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <p><?$last_month = (int) ltrim(strftime('%m', strtotime('first day of previous month')));
            $date_m                  = array('', 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь');
            echo $date_m[$last_month];?>:
            <?php the_field('kilometrazh_mesyac', $post->ID);?>км</p>
        </div>
    </div>
    </div>

     <?}
    }?>
 <script>
  jQuery(function($){
$('.bottom_info_hidden').click(function(){
    $('.tab-info').remove();
    $('.bottom_info_hidden').remove();
    $('.bottom_info').css('display', 'block');
});
});
  </script>
 <div class="bottom_info_hidden">
    <div class="pull-left"><a class="btn sqaure_bt button-main-all">Скрыть список<i class="fa fa-angle-right"></i></a></div>
  </div>

 <?wp_reset_postdata();
    die();

}
add_action('wp_ajax_loadmore', 'loadmore_get_posts');
add_action('wp_ajax_nopriv_loadmore', 'loadmore_get_posts');