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
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'sortir-a-quimper' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[4v3.OxeF4wJMJUI d-B/4E~ZIui6j#[Q;%ze`[>Nt]I=_,?bTBx$K7L8STv-BYN' );
define( 'SECURE_AUTH_KEY',  '8Q8]Xy<y=S7xl_L$,T:sfa[y.SBvxBl]p,enT,KP._[1WB<,2pD,<cR0IjHrvGe)' );
define( 'LOGGED_IN_KEY',    ';+9bq*w7/fnuxnL{Nn*QB3G@LuBH#jw.Z|k^wlveG~hMM1C2JoG(nql[ah%_T,W+' );
define( 'NONCE_KEY',        'Q#f`%0AGhkX*;U;XaN,UQn |gne+|*4*X)Tv=gR$,,v}T,Scjnz|)4bat@O*bGHa' );
define( 'AUTH_SALT',        '(u) d|jALVGlP*E 4MVKD-Lt;g*m4?:SyIo>c3]Kqg7MpFQ2<}n,c_De)y-aL%js' );
define( 'SECURE_AUTH_SALT', '{V+.nS$FsZ%i=TA_`SK3OL, D$7CU-djAVkr,1{RAZrYX(K4Eib~>F+t$I?C-Ty/' );
define( 'LOGGED_IN_SALT',   'nDLTg1dz-<S~LK2^sMUxO(!Y3rE-y,XR}`L4hPQi6t}Q{(M ~.%r%Aqs]TXQ!@44' );
define( 'NONCE_SALT',       '(I9_,/DbO0dH:yh7I/tn`o/UD0v*Nb$ 41C|vA;2{I{c`XUrLm0-T|mvBBa3x|r}' );
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
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
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
