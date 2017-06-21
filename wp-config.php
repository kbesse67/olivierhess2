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
define('DB_NAME', 'besse');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '*Q$tpk;Rg{LhZ`NUH`/4p;E;P2^TE%xxJOLUx*CcZrF.*3l_Elxf$KAd=LW8^&S[');
define('SECURE_AUTH_KEY',  'As% >z:*LGUP/)7HUh9|Xlk78E*G[NEC+grUuN!hySnUOgWy396UeRI6cYA<JHp6');
define('LOGGED_IN_KEY',    'Dz-Wwxj~0FMJDYyQ]++s@`L._C,w]!Cs*G4rAdX,R$1Bu5XI)596#)Jw%6uskdl5');
define('NONCE_KEY',        'd4g|Flz?U@O%*s^UMR*WZN^hGl~C3~w TMtvV |BZy/z]%{Dfv+UVrRmUjB-sGH$');
define('AUTH_SALT',        ',L^=2QwnPf#)3wS5SOt2o<BITCd}c;gf_NE(u7*~2a}?URTg2q_Mogd:lN=z/j>N');
define('SECURE_AUTH_SALT', '%V]y!9imnz}QJ_vq>ih@a@+apRd7)1%BrSY{eJ0`Vn/gE3Dd`}peI8[~:(&cgf!H');
define('LOGGED_IN_SALT',   'sT7b40|rEbml#Qs>Bp{YzOa48otCvcxxLfJXZa`j/F#SjuFdvB8AbBOJn^FxX@rs');
define('NONCE_SALT',       '^9.uO G~Ff07~n@G-_eV9v1Ljis1.GxuxJ;IR(F%B%1N~Y:+B c<%e)Y9YV_::?O');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');