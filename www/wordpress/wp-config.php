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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         'H`T}Bk$R|=D4~>sz,$OLPHGg%wN{YkrQpy@zdc$@[.72A7p/u,t=V[!>qTbT2%hw' );
define( 'SECURE_AUTH_KEY',  '<jqk-mv(g(`fF^A=H:&{ Q%,x2ror.@@fcR!Xo$IMYgZV+[Wxf`Fg-[Y[38c0EqK' );
define( 'LOGGED_IN_KEY',    ']HpVV5H,|wDU-XnO<KF6IrH`lgX13L)Ic{g_UN2vGhl[#-#iI*1psv5 OS%XUhC%' );
define( 'NONCE_KEY',        ',s^3=fQ_>]95ki&7qE3Am&B?rk6kPl#kBf-)M__S{C;iU!}7:[l^@V<abhMOUQZ$' );
define( 'AUTH_SALT',        '0IWcd4>f.wF9dST)wQaxIq /GQo-{.X:9.S:IPRf>Z|y?$k4EE:)7V/z5NS+sP4$' );
define( 'SECURE_AUTH_SALT', 'V7<[%T_;SCI isriL3e?-:J{GuJs}YT7qmThd`8F?2{,~Ph?4~Vi_A}u aar:)@q' );
define( 'LOGGED_IN_SALT',   'aaZ*9*)!x6z_ifa1}^/aSDI7Wn;@g9Pws8*oCL1VX0E)T3a}RvnM5Lb#;59^d !Q' );
define( 'NONCE_SALT',       'n{9RdN%~9&Fxy Dr}_u:|$@~*Tb%l3$wB9^G(mu+S/nFTqTY)0w#t43|[gGVH*YL' );

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
