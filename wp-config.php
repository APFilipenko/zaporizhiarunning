<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'zaprun' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1350HY`9}|^IAtfd#xQ#Rjza=;x<fn{I75<-]V)f/tP}ne2MWm`=UH|_kuD^)vgp');
define('SECURE_AUTH_KEY',  'j|vZu,w%oDa7}W#55m-8O>*Tts?K= RDL(ht*Du.:m1]r?U6OoX|}bI~k$[O%?|S');
define('LOGGED_IN_KEY',    'gkD$GZuGf.ki{h@R6[2:T5gVS{yqT@MpVK4|-5O%cbw`4B}Y4T #VZrK]U9}(&.m');
define('NONCE_KEY',        'wCg_dE~Ve~fYfx zD)1*:<7|4t%MS#gfc53u$B~0k5b:Z-[(+T8ylD .C9L}#*2Q');
define('AUTH_SALT',        '+JVT;3v}&9Pgb~R^h%6Fm|j:4Yd-ZEZW;! opcOS~Di}~|o))MvKM!Ake.j<.}_?');
define('SECURE_AUTH_SALT', 'x$w:3GLoPAoqwodE_=?V#T3R^`t,6XizuTp#Wx6>>[jFxSCsq!Pr`COAm(29|n|L');
define('LOGGED_IN_SALT',   '9dO6bfRV|cgG!Y}8r:9;7ZM4)1S}!7@$%x^Nt3:zE/O|x&mK!!|`+{lN9*1Tu+&n');
define('NONCE_SALT',       'VfO-4/:p4Ls8/MxG@yf-TQVJ;d:ob$qh,&6RU4AloRSj)vkN_b:`P<[W6Tq|mG%v');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'zaprun_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
