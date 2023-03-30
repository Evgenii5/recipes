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
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'recipes' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'admin' );

/** Имя сервера базы данных */
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
define( 'AUTH_KEY',         '`~s!Lm|Cy99KF&3L(_O0x)rA.pJI}d_:4X@s6TMzUm[6(R)V<-*&GV1Sm:!F)}h(' );
define( 'SECURE_AUTH_KEY',  'j2Jj;w};[C.%$nF3NR=h-L&^6Xm4CB`@b?0r^fXM#)T,#>(pMktU0;{:mLZh;5?z' );
define( 'LOGGED_IN_KEY',    'sZJ^`lGhS3}raaM_O!Mo-hJH!Tr!]/Hc%>9]Oc<glPajJy@)^S;J.rP%;lW}B3-@' );
define( 'NONCE_KEY',        'GLuNTWYmun<,pLn)Q+HAa-j%7={DZJMqnB^x^!tdPsxJtUS?;=x3ulMqn40?|n$O' );
define( 'AUTH_SALT',        ':#[Lt2CdwvZw<:k.2;edqRbtVgox)3epTe({zAu I^ug/3&}(hw_Z6(2zGrnFSoh' );
define( 'SECURE_AUTH_SALT', 'J4<I2>TzC$]Ip<P@^&Cm#G_XkrG`pCXh1Y<x/4n(6`f MOD(dZK{oKe[BTUI~}H>' );
define( 'LOGGED_IN_SALT',   'P~n$)6o7Fr0pbW~jR|e<B#L 1._|hq~VsF*&3P(wH1 P/)C.zefwN%v|6^EM~6F$' );
define( 'NONCE_SALT',       'N@X#l#w!o&[KY6hjF*TjI3:130y9riYWw)&V/6JpKDN1JVq/Y|79(g&?dw]dL3uF' );

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
