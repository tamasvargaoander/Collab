<?php
/**
 * A WordPress fő konfigurációs állománya
 *
 * Ebben a fájlban a következő beállításokat lehet megtenni: MySQL beállítások
 * tábla előtagok, titkos kulcsok, a WordPress nyelve, és ABSPATH.
 * További információ a fájl lehetséges opcióiról angolul itt található:
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 *  A MySQL beállításokat a szolgáltatónktól kell kérni.
 *
 * Ebből a fájlból készül el a telepítési folyamat közben a wp-config.php
 * állomány. Nem kötelező a webes telepítés használata, elegendő átnevezni
 * "wp-config.php" névre, és kitölteni az értékeket.
 *
 * @package WordPress
 */

// ** MySQL beállítások - Ezeket a szolgálatótól lehet beszerezni ** //
/** Adatbázis neve */
define('DB_NAME', '');

/** MySQL felhasználónév */
define('DB_USER', '');

/** MySQL jelszó. */
define('DB_PASSWORD', '');

/** MySQL  kiszolgáló neve */
define('DB_HOST', 'localhost');

/** Az adatbázis karakter kódolása */
define('DB_CHARSET', 'utf8mb4');

/** Az adatbázis egybevetése */
define('DB_COLLATE', '');

/**#@+
 * Bejelentkezést tikosító kulcsok
 *
 * Változtassuk meg a lenti konstansok értékét egy-egy tetszóleges mondatra.
 * Generálhatunk is ilyen kulcsokat a {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org titkos kulcs szolgáltatásával}
 * Ezeknek a kulcsoknak a módosításával bármikor kiléptethető az összes bejelentkezett felhasználó az oldalról.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'lenBg432ARpa$k$9ONY>2r+kJe+D[ns!6p6CExa=.7^Y7[x]Q:2!cXp;q}_xW&O=');
define('SECURE_AUTH_KEY', '5pFRqSq$q6-ZmUW0l,M&R_LJV9a~~Nfa!NNNBN2IdoaSpyYG%?*VucpCXg(OYVsE');
define('LOGGED_IN_KEY', 'PpV;: .Fj|wDu5`?_P8y`#mY2!Kj5,6NnjTg(D}2?|c6hbW[?<_[.P#yv(CQj{`{');
define('NONCE_KEY', 'yU+^,v@?dPZn`G<:e(|GW{AsrA1$z&py%A(!.p_ma-2uq}2>>y?yt+fX:JS];/GO');
define('AUTH_SALT',        'x64+[lVrQb<Is/vk0x_>[kSIG6Ai#n(f#TKT{MFUUc9u]V)JjbtNx/qb_ksm63sk');
define('SECURE_AUTH_SALT', '_n(FXaf*S:;ETKZB>+ mYx~n`*po3&ZdPQ/689~pslV<bT4t3H3Z_NegP#0gk?.!');
define('LOGGED_IN_SALT',   'qBe,?rgPEfsN/9a1tpw~>%KH:2!xpZpV6ub;[fXSeZ1kMeEa[T :?b]tI9kA_J_z');
define('NONCE_SALT',       '+EIjmW34VGUDVPlY3Z?2<l]L3)IM.-%v<!v0++NyGR`/DJ:x=x#`PE,hNySK#`vO');

/**#@-*/

/**
 * WordPress-adatbázis tábla előtag.
 *
 * Több blogot is telepíthetünk egy adatbázisba, ha valamennyinek egyedi
 * előtagot adunk. Csak számokat, betűket és alulvonásokat adhatunk meg.
 */
$table_prefix  = 'wp_';

/**
 * Fejlesztőknek: WordPress hibakereső mód.
 *
 * Engedélyezzük ezt a megjegyzések megjelenítéséhez a fejlesztés során.
 * Erősen ajánlott, hogy a bővítmény- és sablonfejlesztők használják a WP_DEBUG
 * konstansot.
 */
define('WP_DEBUG', false);

/* Ennyi volt, kellemes blogolást! */

/** A WordPress könyvtár abszolút elérési útja. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Betöltjük a WordPress változókat és szükséges fájlokat. */
require_once(ABSPATH . 'wp-settings.php');
