<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'osportWordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'ies29700412');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'X?F<MuIbUNq1ee&wRnxN#1@kc7|kMIg8{.6~MJ#v,d0U}R:N9m$3aiYsdl>j{VQq');
define('SECURE_AUTH_KEY',  'umkJ=XP@}-ML`$fzZ3.qKpGtDZ*/[rXX6ObW%kN29qM&x|?/&)7|U-`H$__xh)dD');
define('LOGGED_IN_KEY',    '+7]K.Jd,_<(K+OSUH$;REz2jG/g-18<A-{-/;4Ekd-8#_@cX|>d7.5`J>-so_5O8');
define('NONCE_KEY',        'Wel~CIxrV;K6+XksDE$@:{pnAQvP|0Zd8U,HM2> oVnL{s+)G}:ELm?T~]A~A$]l');
define('AUTH_SALT',        'Hy!h#!J)=YpZ=]uSL^+V5s]0F#PY~~k@r4>IRtj_X-q8Asy9kHY),Dh+8iOxNJw_');
define('SECURE_AUTH_SALT', ':}SA_-@ _OtVu+`KOt`Za.fdMHy!y`YQVLE e^=C%x[%.v&>X#,$X|, ?u/QcJ~s');
define('LOGGED_IN_SALT',   'C?QgKf|)|371Hy5IlFuQLg27B`F/+6?Zp.goLoQA,7T:8o,J&FGd#|VtGM_&7R<U');
define('NONCE_SALT',       'r:Pi4j`,hNI%d,hEX_o%|seN7AVF.s#,_[WR9v!3jT;=SkkT!uo5;2Nt=DZ+XRpf');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

