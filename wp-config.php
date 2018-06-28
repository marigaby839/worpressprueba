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
define('DB_NAME', 'word_prueba');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', 'nifY4$GtkFWaSkqh|s(Ss,[Ll`lj/khxljgq0Z6Aripvz9M}Y7t!.(^-q$M~.UIA');
define('SECURE_AUTH_KEY', 'fsRd%_&RU0K)u{Ax`[V)I.AvVM!~iR3*$s9(J)]CW+AAs_u/WX.)WU Xbm[63hj4');
define('LOGGED_IN_KEY', 'uRS@Z/b}N>T ~CG8R6I3!E``I5Wj8Ip+6P;daj-pGYV<Ik_JMNATc+NW{[F+U9<b');
define('NONCE_KEY', '?K d?Sf>(fC-3gk?g*@[%AEX[A%PhBpej71eP<<=}?fQXHE0M7947>_xS#kwg0m0');
define('AUTH_SALT', '*l;C{)D[Yz&  o`uw_*u:gG8mztcy<JC05oz-gZ2o+ oxVW_iC^=?p$Q2VljN~VP');
define('SECURE_AUTH_SALT', '~7dq3zIf_rd?6lO#[dJPI5[(MX6` g^tZ7;T2)bqorKR?RC$/`I:TC$YO.wwmQ++');
define('LOGGED_IN_SALT', 'Ak.]aJ0~JMiwzh5yhMWx9D@bE6a$A&5z|iGd)v|;!^~)}EcQ%bgRY]47fv-~wRe0');
define('NONCE_SALT', 'vpj&D=oVGC-]A16a|(:`#=v4y<PbA/|m,tck5&[.rngoEu-%O` &P#9MO1,v?$u+');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wpti_';


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

