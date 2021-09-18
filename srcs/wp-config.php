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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'ssandman' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'ssandman' );

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
define( 'AUTH_KEY',         '<AJ&Hfn|#^8Bx0s2{HR>i{WH@A)|8>xAhnLPyD1CF:uJl&[Hf|tE+As),y3lQ` ?' );
define( 'SECURE_AUTH_KEY',  '4G2ey|Dp!}l/DajFi{M)@P]DD1@t^yf53d&!@i7A2xljduCn56B2+=~C7f2C},#W' );
define( 'LOGGED_IN_KEY',    '!AwXSlIK]@y=h*!RI`fLZ#HzzqyR:oo>0T1v~FHV?CeKDM*7wYcGSEprup[;=Vgd' );
define( 'NONCE_KEY',        ')jZsK%Vx}`7DqUXY$G%bw:@E`,l%W*e1plBY6f!;GF^_uj]zcYk4{EN^,::*uV5{' );
define( 'AUTH_SALT',        '{WSW;*X+g`Llo#0h!*%.TY1*O[;;FEj{d@]GQs9XQXhyw=:cTG0+3P:Zt*d/g  *' );
define( 'SECURE_AUTH_SALT', ';uZ7ZHpL&_I|bj4veZ?vrX;{eoXe3YaIx%rtvVzT:ylFqX0P2f9{F1ViKk]A}8tl' );
define( 'LOGGED_IN_SALT',   '|@s1;=WQpF|@5*rOjEUx0H@D`hNRUMzd!`468A>qLz}u!-Z|1@DFm34qE5wqy%w@' );
define( 'NONCE_SALT',       'bRUGP2k#C-{&W_W9Tn~dr7v2 c.Ic{+@Y$n4#12S,m47*O<^IoIH>rRn1t?Hj5&f' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';