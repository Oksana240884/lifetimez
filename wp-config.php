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
define( 'DB_NAME', 'life' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'life' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'пароль 	lifetime26121984' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '(d*IQr=Apx}X~4=){jY.M^S_XTT9h_iVFiV[`ezq6Q]<%f5#IWQEI}4)PqSS/,aK' );
define( 'SECURE_AUTH_KEY',  'AXSI Yl$0Ph~G-)l5_{NO 0`G&(5|~QSutz#F,Tnkf,M5@E||sxCt%|:&oS7CKmZ' );
define( 'LOGGED_IN_KEY',    '-1/noT/QIt<$a<lhd*D|agZxL8ED(TFN_(d:GM6q<LD<yfSdO>4gxsBy7vV}z^:1' );
define( 'NONCE_KEY',        'uAky:S0&10wk9uUwhovrSdsh}Z-s?~MozN&:? m.DkpRrVpdTG4L$=uT-KZsSYP?' );
define( 'AUTH_SALT',        '2LWw6k7*m9Jtyae]1-W!OpH94OTeN&J4b3|t#Xx>||3a&Y2cLuym]cWtr}pwJp1m' );
define( 'SECURE_AUTH_SALT', 'x2&)u;35zX80O_)o,P_^?|_uYHZc.. +ZZbbT>uXI|fo-q^DY )a:>5);J?}Y;N_' );
define( 'LOGGED_IN_SALT',   'r/<c~uWFe:yc5g1RZ;_`sTzUf)LLn?p|AQGb$|]%N<LPE(Zi#:M$X}9Ji:?q;*^Z' );
define( 'NONCE_SALT',       'wWpld9M! k|S[Ve*1p(9&+o~alsRkvk4?%[E[l58Mt<ZXqn>?(_5%iRK+`7V_Jpn' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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

define('WPCF7_AUTOP', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
