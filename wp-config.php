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
define( 'DB_NAME', 'autodrive' );

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
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7VyJ&cGb48 ?Np~thnqQ_ez{VrB-]D2$zNO#vAMz983(0BN/mS%Fa1bzzgY4$}^w' );
define( 'SECURE_AUTH_KEY',  'i_6;WV]cUaL8~^lYt @{lh;}^7=aJ,?0AFE^:PMJ.}$o#o2,N8QL:U{47>]x<{_<' );
define( 'LOGGED_IN_KEY',    'xd7`,t#t{,${./1)8lpUiy>r+-!I4/n4d*R}^F&wL5^]nH3Y%?,Vs.gHHV@3$W]6' );
define( 'NONCE_KEY',        'y]*q!qHTTf(YU|wfYcm.Xqu|)D:|L:dXOd$g_7(xNYDlJiqt>5?#e%[IATKXkt.z' );
define( 'AUTH_SALT',        '% cB]oIvdqT?X=d:%&.>SYOnfxTHX bI4b77LC3P=a$4d(j [/+8reviyNc4_BVz' );
define( 'SECURE_AUTH_SALT', 'Nk GYisGoylB:l i/L]N3NkSTRhEc}yO,{`/XV!/ap7K],>YvZRA{br>{+F%J$kO' );
define( 'LOGGED_IN_SALT',   'ce+}W6R)otUs=Oo6;K[/jMEede`^,?yp-wJC8|.o(D/nntRrMRAhw`Zu~G_m~_dI' );
define( 'NONCE_SALT',       '54o.53g2{1aXb4tI:L@5kIK+5N :f(xMbY9@J6)ScDa!,nABar~[aBVw%vIU,wkG' );

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
