<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'aF!RuFuIj1.Rhd~7/g0AOG}HF!I[D0}gbz4O}A}v!Df9t maNADBHZ_! HA~Nlf=' );
define( 'SECURE_AUTH_KEY',  'UOv2e:O81UlgvRKYFlM0B$amHn6VCMb`-)1= (Bh$G>#.zAI>VkR~(=dn*<t5%om' );
define( 'LOGGED_IN_KEY',    'M.6|=4fYHbe3@?vF<lZAM>SF,i/,7VQ i-PZ.!2-4fZ#k!RN~>|a=X[di9qfD4Ay' );
define( 'NONCE_KEY',        '[>>S>f<l}B;p0`s>@I1T-DfL|]t;Gq|)O}`E(p<nX+1eXY)O5VL}ZO-QP>+ofhLi' );
define( 'AUTH_SALT',        'q@Q:S2zS_/KwwN}4RuBdiei0%m1<KMtlRF]Jyn;LgcKvCqWf%@/,PJ[0lEg&hqKx' );
define( 'SECURE_AUTH_SALT', '>7S%C@GR-[;5Au&x.$fT1kBo_f:l:qbKli440hJJRfDEZ%udYipyuJXC3-hQ,)4E' );
define( 'LOGGED_IN_SALT',   '7!.Qubyf!TD!_fZSQj|<d;-(|cjh%#.1W.LUf?^u2<2yU5p=8Z%k],p;syZgU 5+' );
define( 'NONCE_SALT',       'FO^OHebXv>-:Y!z&Fco0Jl_V{<$eL8--PMqtZG(a4N#)Ijo!Qm?uVJ|iWz_{?;L$' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
