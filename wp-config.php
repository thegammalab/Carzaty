<?php
# Database Configuration
define( 'DB_NAME', 'wp_cardealerwp' );
define( 'DB_USER', 'cardealerwp' );
define( 'DB_PASSWORD', 'JIkl170m3rsQoS1q3kjo' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         '$gf+.A|6qG[]pFxxM+rp7bqxhr@j0-+#wY-+I~L$+BZW6Z(.aP=Cwrvo(1.~4JW1');
define('SECURE_AUTH_KEY',  'Zmmf:n(Fh@.LZE;BbK|B1?T:sxEb&FH^G<22rl(-y#K;%|M|38y&f{G<c$@mnt|I');
define('LOGGED_IN_KEY',    ',tHZQVPxERZlAmxOSbbo/~#Ou&R5[Hka>p*o:.1?L[TW8q#bj` Q>xXCeM!L;e1u');
define('NONCE_KEY',        ',(t4,,;?j)]iXBM <)ine26E[P:E(=5hg}O+=gy_#tCm7PHLo[Mr>`yoWx6~#=|W');
define('AUTH_SALT',        'A_P*Zg_#w9QFnWn-l1|U To.BShg,WtsBuwm5#feNI`c=+PRLfIcvEPTI]J?I3-v');
define('SECURE_AUTH_SALT', '0_@5vssMj2_@3l0<L+Rj!zOB4Mtb&2/_UZPRYSx<y(oq-U<y%ea_]MZ~C`{z:uI0');
define('LOGGED_IN_SALT',   'cad,Ev!im!9Wl`bs.bVK;P<<uxm%8dx2lf=xJja(Gb,c-Vf?z4NjnYWHd>5vQAP)');
define('NONCE_SALT',       'm`}VK|1_6-ub_+-~|)[lfZsKy1&M;z^7N%N|ilYBz hM^-k^9wd4r5!$;OH[$r).');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'cardealerwp' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', 'fad6c66b96cf8ae3bc5936857d8fbe0d042619bf' );

define( 'WPE_CLUSTER_ID', '30852' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '134.213.133.35' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'cardealerwp.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-30852', );

$wpe_special_ips=array ( 0 => '134.213.133.35', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( 0 =>  array ( 'match' => 'cardealerwp.wpengine.com', 'zone' => '4801wr48w9lw3xmygu1n35zm', 'enabled' => true, ), );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'cardealerwp.wpengine.com' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
