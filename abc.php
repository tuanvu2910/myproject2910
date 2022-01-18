<?php
define( 'DB_NAME', 'hocaws' );
define( 'DB_USER', 'admin' );
define( 'DB_PASSWORD', 'tuanvu1992' );
define( 'DB_HOST', 'hocaws.c3svsoujecwk.ap-southeast-1.rds.amazonaws.com' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );
define( 'AUTH_KEY',         'gVyde-7Iqiqn%G2D3`!Ly-&4hMW6vC6ktts)}N8u$;dI(kdEHqOa_m&,^*dix0EL' );
define( 'SECURE_AUTH_KEY',  'X~nO&SzKeD,};DB?K6u(-Hh6*s]SCz& ljyobyF1k[4Yl9s}xD/omC{!9.Si!nhm' );
define( 'LOGGED_IN_KEY',    'cBM48AUxS4lXJnY352hGB1sCbi7iD5oQC7fp39<hWjw><`8P}s*drJ-swZfJ-N}&' );
define( 'NONCE_KEY',        '&14f2b[UslD&F[;aaH)E7i{:aKr=[!t3_bdQ<?Z/[p?Mw$ljPH6FUUedgLsuKPK5' );
define( 'AUTH_SALT',        'Kscg,.09zP;[cPz.&(TTPmujDR8fu>b sW_Ry4FOP[?6>=,(O-Q&}0D9u2Q(C>>9' );
define( 'SECURE_AUTH_SALT', '^aUY+Oh,4OyM-qjbj~N.4lD|Qg^fQ[6c@42Zi3oL;Z#r}NtaL>Z~t#d`ykvv 5tR' );
define( 'LOGGED_IN_SALT',   'wi:Qgtv08F<imkP^IRdNfd<3h98xa]DYH9}a?p]>xP4PYBJvf+rE~oeJlsx(D&^%' );
define( 'NONCE_SALT',       'O?5aE2/YX.<!^3$q|XH=-4.-S)3E{A]-%t&Wy#,|gh[M*.3=^mb>G{wicd9`=%xf' );
$table_prefix = 'wp_';
define( 'WP_DEBUG', false );
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
require_once( ABSPATH . 'wp-settings.php' );
