<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress-db' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'wordpress-db' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'admin' );

/** Nome do host do MySQL */
define( 'DB_HOST', '127.0.0.1' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'kF^iGRWY@LE&]GT7)Rdy7R1zkQPqEleR:X#>Vs]X`^asda]?Hu~k=I~L84k/[N@e' );
define( 'SECURE_AUTH_KEY',  '!<_6IPk#dia|r*G-<)ldIQ-L/azpP:o}OC=OR)qUq=o`(-m{T9bVYFa:@R?]g+Tj' );
define( 'LOGGED_IN_KEY',    '^#<bMuSW)>YGTFqGe8m1x0a[VgTDRm{?]A;*6StP{(?^1tl?}899Z*B_unedSsfw' );
define( 'NONCE_KEY',        'zl@k&h{TGB+z9_LL02CQtb%gn;TDci$9Q#`ZzEbqoDyPHaqBrKV)46b}JfmFU<O3' );
define( 'AUTH_SALT',        'V6e**$GR{DJ>^1 Z$sG$/%#k<mh]682/*fqP31TOLQ@q/p.,4dfZ$twKyLC $e/M' );
define( 'SECURE_AUTH_SALT', '[w.la7/:bkNVP?fsNjCP(@$P<SWolRoV6)4/<t+$>]J>&C!JH?RK{p($1g{@Ucab' );
define( 'LOGGED_IN_SALT',   '0tZ7Y+/c*W%wyK$@?={z#I7>HP3l=U.Kwy#nkx0-l-X7hVDnGRH5-VCZ-DF|w!:t' );
define( 'NONCE_SALT',       'pEjd<2^]m(1N}20H/u!^S9VSnsn&-pg2%E=DFI_yv{{>(C SX<g7>g?RKkhL`KD:' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
