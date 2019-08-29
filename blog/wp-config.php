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
define('DB_NAME', 'terraver_wp199');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'terraver_wp199');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'XS@@2pI300');

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
define('AUTH_KEY', '/7 UX4 #g=gzO/>IP14]}zf/1) To>(/S[x4H|dJ:OxTW_p :@)dWS##EJ0_s8lC');
define('SECURE_AUTH_KEY', '||o~5K9,5KO5u=;<(EvmJO<pcHkWZ7z!$SnU]wD |8wUpT9RvB[|OGcgwDK(aw3v');
define('LOGGED_IN_KEY', '4Q<dsye?NM?&Z])A]c5Kub|zZWY-6bVi96D:%laMImr$cZ0]rI*boHg1q T= XO/');
define('NONCE_KEY', '9d8>9XNA>ugYybiBJ`pS;>n#]^!E5yBe)x:3U}lLp^4N%r/>k<WU2lm?4-u.7$[ ');
define('AUTH_SALT', 'bdYOx*Flp0XS97<EzX s5Cr&#`YOLsM.[&&|?#Osc.aW]CQf;7/f41D>Ii4{@@h7');
define('SECURE_AUTH_SALT', 'H((#_Xwt{VeuN;i1j,ujzbC9pysub#_6.Q8L%{BR<C_OuQiIB2tNmz[1X.5W@;>q');
define('LOGGED_IN_SALT', 'xl0e 0`iOIjQ#ugf1$CIf8Qt63u5yb,#7[m+WN/EFB6<D$m)^<>tA-.>]@2{@6{^');
define('NONCE_SALT', '3W9C;eP(F?|nwB<(uC}7weqQL>qA<Xw? p|TtIK.HnRMdy-:S6mqv@c +#lAWKUY');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'bg_';


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

