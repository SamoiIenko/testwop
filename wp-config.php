<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
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
define( 'DB_NAME', 'regagro' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'waDC=6J3U~&qyybJsVY#0]>W*tbxBC vwii3us@N#66qR,L8DH{zQAW0>L[9LaA`' );
define( 'SECURE_AUTH_KEY',  'F+rc3J{5&7/Xd&=v.HmgSZzPF[0,7M?lBc7`c^[KHZg7T:|H8A@L,i,~yb$tW]( ' );
define( 'LOGGED_IN_KEY',    'h%pVA_n<^Y8Q7a5wT+]A0^/K8CH-;W}UE2/o}!BR.[e3B1YJO&cPL]No6D@,_*kh' );
define( 'NONCE_KEY',        'i%<g%IhzJn{OLu^|ad?@s]Dso.B)[+8+iQ1>`mXuWt^``3BnRsXTtZ[USn>z`DYf' );
define( 'AUTH_SALT',        'uF]UV$U:5~V:6^XAo]=V)Fi7Eu@/}uxm>J2%0_dygz+=be u#neGtMRu 2hM(!m.' );
define( 'SECURE_AUTH_SALT', '~{J8gp$2R7{-cAs|V^u8>!Y==m8@d;c+ms>=(nD{Wut@rteTt(/<oD43d8CE$/||' );
define( 'LOGGED_IN_SALT',   'G).z?.pYs#r2kV}ZW^R5r&c[_ZL!H/TP`v$r-d.;tU=nv4ZppjN-A3k$NM-EGjoz' );
define( 'NONCE_SALT',       'ieaN~3[d:DZC2IQ+r#316K:ArP!Ju/&([8GIE^6)VQ+7O|PP#9ACMz~D)DWbD]^?' );

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
