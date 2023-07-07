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
define( 'DB_NAME', 'sva' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'sva' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'b67686pxKaoChLFK' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'rds-sites.cluster-crx3yjfpcdby.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         '/R,0Rj= 2F#b@Sz`qNpI%<1fVV7j$MUdH|F9=T) )-4~;wS88:Gn<c3GgLW7)-eS' );
define( 'SECURE_AUTH_KEY',  'OjdFn3rHZX>}jJ[</W09q4czlGvmx{Ee:w##N8cVz~m7RE?Mt?C;=VS(RZNiSmUl' );
define( 'LOGGED_IN_KEY',    '`Ga#ewU:lW2S3u/Vl(24+RKcmykq8Suzzd5cBHn}TqGk&xwx)2B=8wtu%,[$^,7g' );
define( 'NONCE_KEY',        ' 2A:TEY#GW.bfpAWVG<1J~:sW.wG*6Xwr3AU46(yl92fm:#p;9aO!r%sAVm%)vQF' );
define( 'AUTH_SALT',        ' !P,$Ch{ngGI:fCf~lBN^k(^Hb7nQTS49_nt;f2k%Oby<Mzze{V*S7?,Rlk )])z' );
define( 'SECURE_AUTH_SALT', 'PKzD&b]d [53t_Kbv4y{i33o@d8EO:,U {>H[]uFY~%7ej5 ?Mmz$0hH7aHAKvU$' );
define( 'LOGGED_IN_SALT',   '?%4<W3Yg$>;PZud`!KpHO@j1.|JCH:s%G3@r~BPGWM$*a2H`D`p5fB)<`1oByTKU' );
define( 'NONCE_SALT',       '@LT<p=}u8w6S_0IM<JxG>Pd;HvzV;4Kqoi4(a&AIEhV3bn?x)Cn3_RLk*Q`QQ^iG' );

/**#@-*/

define( 'FORCE_SSL', true );
define( 'FORCE_SSL_ADMIN',true );
$_SERVER['HTTPS']='on';


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
