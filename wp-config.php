<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'LAMZO-IMMOBILER' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'LAMZO' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Lamine-123@-2019' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '/k5F,7Gba3sG<CxC((^LSN]5~bS?%I,b%8ka[W$gPJEDNLAVFOROE y3+G#$j^Co' );
define( 'SECURE_AUTH_KEY',  '8xf4N!BTELE`nZMzT95BhNPd&.z^`p2UULo|_H.|%8(uR0ed]@mlBo{a39N)%^o#' );
define( 'LOGGED_IN_KEY',    ':J6C>m%>?>Ap]wPIQ?^]@k1ea1z#5&E7b{YL<D@hVDpFY-YZ[0o,>yfPYvfp:8-6' );
define( 'NONCE_KEY',        '3FF9+Y+V6~ _6oqsBPyX9f2th4G$nux`=9ytkQ|}Y1<%a8H,AB[6ky-=~Fp^)2pC' );
define( 'AUTH_SALT',        'xD~8-$sXb9!Ck_.ni:,E/)~@,Gy-uqR,ST795$W54p!uK|rDj`]]QQWFzZ2Nv7$n' );
define( 'SECURE_AUTH_SALT', 'i`vv}AT|4,+,R7EyTSojxt?`&xj<-8|Tx3WV9dy<8ql=X nFHg%@DRG}Bgzcj <m' );
define( 'LOGGED_IN_SALT',   '{HHCjD VCrE*vt@dvxXnF$r_x1 >9*Nn4F&%lR_u-?[D0XaOm79At^j`bH. f$v]' );
define( 'NONCE_SALT',       '$F~LwTAx0cZiU47t6-3;sGRv8D:G= +F!u^.->_[`,l,IMBb><7Qb_%m<R1`a<S$' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
define('WP_MEMORY_LIMIT','128M');
define('FS_METHOD', 'direct');
