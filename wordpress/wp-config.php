<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'wp_uno' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3sOVi0:!oC@w*X)_*=!!(8Z_Gc#IE9GV.kS(lgt4O+k`GPMXjF5/)]tc`2M}I<0F' );
define( 'SECURE_AUTH_KEY',  '8?SE?CrwGJv95EvSY/0>@V geRAI<tNQS1kzJm.>u[ZU.)U%`DI4fLt6~1QYBu==' );
define( 'LOGGED_IN_KEY',    '`[|4RNr}j=9P9~E +pN%k$X}R)t+hH[hZ-*LH!tHC+3V,8s#kp7zU2VAzBnzm_?r' );
define( 'NONCE_KEY',        'Whe4E:8<ZvUv&2t0u&y]HwYlY89|o>;]Tjw~dnEo</B!gyW>N2L@1p<#h+#$Ib/?' );
define( 'AUTH_SALT',        'ac%8/9|jO2wR~REZ-|tO%6-9`:z;.{}GbPLul#(27,up*4Jodp~hO)0G$&ub@!nM' );
define( 'SECURE_AUTH_SALT', '[h[L@yC=.d%/w}Q%*9v9AM{7w9>Z jy])L6QC6Vsvot QJ];m2Ur%*?TgFSQ-0}k' );
define( 'LOGGED_IN_SALT',   ' @nWe&ST;$rY~-E7dWir-sc4i}D<c[wEj-=xCDH|**)u5u)Xn,UeBWB% -nGMb}#' );
define( 'NONCE_SALT',       '^g`+OORpE.SOhZcZO>~(Y}V~P$v/`Fs[S4S7}[6eS;M9`E<Ug,M+Fv^6*UdOd1)U' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
