<?php
/**
 * Configuración básica de WordPress.
 *
 * El script de creación utiliza este fichero para la creación del fichero wp-config.php durante el
 * proceso de instalación. Usted no necesita usarlo en su sitio web, simplemente puede guardar este fichero
 * como "wp-config.php" y completar los valores necesarios.
 *
 * Este fichero contiene las siguientes configuraciones:
 *
 * * Ajustes de MySQL
 * * Claves secretas
 * * Prefijo de las tablas de la Base de Datos
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solcite esta información a su proveedor de alojamiento web. ** //
/** El nombre de la base de datos de WordPress */
define('DB_NAME', 'melissa_garcia');

/** Nombre de usuario de la base de datos de MySQL */
define('DB_USER', 'root');

/** Contraseña del usuario de la base de datos de MySQL */
define('DB_PASSWORD', 'root');

/** Nombre del servidor de MySQL (generalmente es localhost) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para usar en la creación de las tablas de la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** El tipo de cotejamiento de la base de datos. Si tiene dudas, no lo modifique. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autenticación y salts.
 *
 * ¡Defina cada clave secreta con una frase aleatoria distinta!
 * Usted puede generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress.org}
 * Usted puede cambiar estos valores en cualquier momento para invalidar todas las cookies existentes. Esto obligará a todos los usuarios a iniciar sesión nuevamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5Bz@&1rICl4FohQ`y9~`f4c;F=bNzPgOsrwT7[Nx>3[IQa~gf$325/t.Ct:u;l!$');
define('SECURE_AUTH_KEY',  'v? &Kbh%yelpiY.@Eg=_g:+^U5Q_bxjs]VGm#1hk2)uDPmIH)e {8a_SXztt8ORB');
define('LOGGED_IN_KEY',    '^Em!Gzk~;&}omFH=$SNOAZ;.w(`.DX)( 8A}E%=^;n[+)0+SZT6*#*O~-.|YJZW?');
define('NONCE_KEY',        'DvR;m(L_*D{0d*1<56CjA12{:#MqaVepW`@-Ypof+XxoZ?As!b~WAYBWZzhnGN4z');
define('AUTH_SALT',        '&i2OT]:/1@it``hS x[#&i[J^t15mzcJF.&BO{7>Q5-QBv6G)UV/NI)(jKc4,2mG');
define('SECURE_AUTH_SALT', 'ak_-<JgV`9l*)(W2:pGpYhZXWej]|yf>@ *7NNKNG1=OKL_*;ed,>D(u,KVdhVzO');
define('LOGGED_IN_SALT',   'Q)DZ_xV:E,<[vVF6[$&=,w,Z2ClJ*WGqAO[;34<jjRoem/SPqnRR{+V)h*JH$[=I');
define('NONCE_SALT',       'M:o;zoQhZr:j|w=70J+@Oo4`1Nt Rp_-dA pv>p1m$0%Fd02#cdq}yKQK#mOUO<Y');

/**#@-*/

/**
 * Prefijo de las tablas de la base de datos de WordPress.
 *
 * Usted puede tener múltiples instalaciones en una sóla base de datos si a cada una le da 
 * un único prefijo. ¡Por favor, emplee sólo números, letras y guiones bajos!
 */
$table_prefix  = 'wp_';

/**
 * Para los desarrolladores: modo de depuración de WordPress.
 *
 * Cambie esto a true para habilitar la visualización de noticias durante el desarrollo.
 * Se recomienda encarecidamente que los desarrolladores de plugins y temas utilicen WP_DEBUG
 * en sus entornos de desarrollo.
 *
 * Para obtener información acerca de otras constantes que se pueden utilizar para la depuración, 
 * visite el Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deje de editar! Disfrute de su sitio. */

/** Ruta absoluta al directorio de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Establece las vars de WordPress y los ficheros incluidos. */
require_once(ABSPATH . 'wp-settings.php');
