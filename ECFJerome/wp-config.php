<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'ecfjerome' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'Ig6dFS`NX<P6|e~jU%K(P+X>~?fX]mg{n(i);4eX*LcoqmIx5W{v-)d,MXXB+?5+' );
define( 'SECURE_AUTH_KEY',  'k;;G;$Bwl<ga[EjO[-/@;&XvKPq-Ke*+LQ}=+:-x=IM<aH.mTUq:X6dg9wC27UwI' );
define( 'LOGGED_IN_KEY',    'H[XpU-`]eLP{Qj*r^kZ184U@RN$6GOz?zzBt~?<|P|4?+qZA?_!|gRcf<7z(%LqV' );
define( 'NONCE_KEY',        'Lp{Q]XeT$odBe;IF<.)zCR&JgQ=N=A4(DqyLJ.LRA)Vh V$++dEx|NQ|!aQ8{0XD' );
define( 'AUTH_SALT',        'l7ZryYmWQ<a /(=w3o]_c^g9{K*Svi()%PQRg%t)#wUfVw<&8dA$pxYjpdEVjgU{' );
define( 'SECURE_AUTH_SALT', '<i*.ut?{1:iZ^eMr^4qEWO.5vke0vx<x<!ULPZ*~W=f#u6gSaajJjf;CD;[#mkzR' );
define( 'LOGGED_IN_SALT',   'x}br;0g14DF;Tt)2.*nS]Baows2*(]N^a[XnPTq(R]4#pQ}FbkY/^Kc4Le9E4ywb' );
define( 'NONCE_SALT',       'A9DnKYg_W^.Hp~d-ii68v1f[$]^6^ia6pz6*t-J8?W2E)pIKV|lY75W}]T%lPuz|' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
