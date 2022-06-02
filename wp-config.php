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
define( 'DB_NAME', 'jerkdolls_db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'w^*;%`d/~`eG$C]m6,/K0}DZ-{}dJN487|0.ddEm%V#Z<*Q-U+$4|p~`_F%ERx)t' );
define( 'SECURE_AUTH_KEY',  'qvj<o?D{YhTwOYi;)5}[/-W:2:PC=.N~uo/N4lix^t o:F^-o%s1,H*vm<lw7&Hj' );
define( 'LOGGED_IN_KEY',    'J9=_aZxaQI@eVcJQ7vlWZ<ywCTD8g]55/;Mp`cB#ueW$x%]h-1,4yI1JKqHwN`u ' );
define( 'NONCE_KEY',        'H!F6t7J4k;#^??:*s1!+We8x8ZREm ZAgLTZrKzq=FLGdZ?73yi%sV/q#IXNxiDh' );
define( 'AUTH_SALT',        'ZS]B}b7y6eDlqB{DcX}%<)G9C1Un__r{V|dy60})vvtp>uq={IIgF^K&c=/z036[' );
define( 'SECURE_AUTH_SALT', 'h;wia0$k]0_Sv6D?h<)zV$L27wFQ@{tQGP&9s~s&H[yEddwwMEu:4m8})#xSTocm' );
define( 'LOGGED_IN_SALT',   '6D:Tk@ u{*2J9fZgng]TmB`q&eT.MGbwJ&M4B|n}N8/L8!>zPvc^g-]}4`gP[wdG' );
define( 'NONCE_SALT',       '`$1N2!a3|$BTT3#lQF(V?Pb2J&/=ZCXlH]kWx88cA,s-Z`-#SCPN9*V3-b}**i^Z' );

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
