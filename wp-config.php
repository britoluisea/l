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
define('DB_NAME', 'portafolioweb');

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
define('AUTH_KEY', 'S@|n@8N4azocrdE3tH*uQ&($])If9swRwq)S2BmwjPv``[*1XMRZZ,(x@<gS44qx');
define('SECURE_AUTH_KEY', '26Y:&Ao;yp9D(3]a.XsntS.lCVs2_?BG/E1~X-$4CnWy#f2@k2359!doRoz$G;Y.');
define('LOGGED_IN_KEY', '+ s;JY9Wv&!Ca4<y#dw]r8PJps&Ua@z7!@tErLvQ$)R:MQe3UF*p%<!nIZ*=?UF9');
define('NONCE_KEY', ']Br_*4nQR*Oz(/&-tR@e-t;6{-R3xAbdAxNdS}RgG*6g4k F+/&N6|/3jHRU-22T');
define('AUTH_SALT', '):5^@9ZpN/VL`KI:XvXjVvA:7oEo5O<..WxiNx;X9X#I[-7bm@%Fgak+BxvoB3->');
define('SECURE_AUTH_SALT', ':`fm-wTC7?DZhrD(vdS~/[#w;:>(.xv!sX8d~iQ[Hfar8=[&T.+nX8pHzs,^]HOC');
define('LOGGED_IN_SALT', '/#ONixnhk1^+_!VRp+}MsUXA,Sh3Q@aMShp([pyCObGhT*bP%2mzY]KAeqED_S&p');
define('NONCE_SALT', 'tKweY]!G25w&*DX7O{<]E[*T)?Ma.,_Kba5to{0hKB=R~6!lLCT!c*w%.oX=TF+C');

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

