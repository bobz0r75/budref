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
define('DB_NAME', 'refbudakalasz');

/** MySQL felhasználónév */
define('DB_USER', 'refbudakalasz');

/** MySQL jelszó. */
define('DB_PASSWORD', 'refbudakalasz');

/** MySQL  kiszolgáló neve */
define('DB_HOST', 'localhost');

/** Az adatbázis karakter kódolása */
define('DB_CHARSET', 'utf8');

/** Az adatbázis egybevetése */
define('DB_COLLATE', 'utf8_hungarian_ci');

define('WP_CACHE', true);
define('WPCACHEHOME', $_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/wp-super-cache/');

/**#@+
 * Bejelentkezést tikosító kulcsok
 *
 * Változtassuk meg a lenti konstansok értékét egy-egy tetszóleges mondatra.
 * Generálhatunk is ilyen kulcsokat a {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org titkos kulcs szolgáltatásával}
 * Ezeknek a kulcsoknak a módosításával bármikor kiléptethető az összes bejelentkezett felhasználó az oldalról. 
 *
 * @since 2.6.0
 */
define('AUTH_KEY','mmHH6o9CmEv0eDsFKP55pUNhbgmq5v8Rzx1CIFCmMJkuIOJjA2lZL35k89eaKeJU');
define('SECURE_AUTH_KEY','rKiQWrzPfAUyEz0x4Qoc8hSIwWlTLrT3GSpu8EaFySUTt3su6CsvCztIeRV0vp6E');
define('LOGGED_IN_KEY','lX3qAdhvAP0bemY76XBquT5qNIX2maYhmWOyiokZRBIPOP2y6jjFJgWhz21YJg4N');
define('NONCE_KEY','gGlCgt1Sf3speZPYMlm01X0PWYSEEYQOz9VPlKv4c2oVNEhGgY9PsWb5BzqXcw8s');
define('AUTH_SALT','nHUZowS8mW0XNiiYXQbZVtT4j1msVWyf6YZeDuP558cSEd9J32hP6PHY9aE8fqZn');
define('SECURE_AUTH_SALT','NNaz3lVEZ2TtWH8c30oLlSM5tS7D5Xn4prdzOob1QRkVcboXczRfTLh4Z0BKTb9v');
define('LOGGED_IN_SALT','GFkWlVzFtjHwgPhw4cm4SwOrV63KQ6aOTYCtnyV9ytfooCjziHCN73l8cx9rQ7Q0');
define('NONCE_SALT','B6TJWaRhBuOxADj1piFOjSvUQWSVsYqQzEJPtMssiIcvsLEuO3BXX6pZEmQdVbp9');

/**#@-*/

/**
 * WordPress-adatbázis tábla előtag.
 *
 * Több blogot is telepíthetünk egy adatbázisba, ha valamennyinek egyedi
 * előtagot adunk. Csak számokat, betűket és alulvonásokat adhatunk meg.
 */
$table_prefix  = 'refbk_';

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
