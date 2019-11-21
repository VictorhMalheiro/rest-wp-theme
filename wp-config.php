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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'restwp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'yyDK,B1|Xph@s|JcQC},E2t6qP,PSMv=x!b7sCKtj*?dR5Jp~qpkAT^G$(l._Y.G' );
define( 'SECURE_AUTH_KEY',  'sU%6xv8d+^CWWNi~:t8i~Kz)n8]W=C)b{62k(Spo#D1BM^G!%3GHBL ;_+3t8H~7' );
define( 'LOGGED_IN_KEY',    ',Ab7:aF2ZKiN!jDO/G1>kZ)8&$%PvHh*bf~[+u{a9);@TllJH]vlSx</XlZ]aBgi' );
define( 'NONCE_KEY',        's,S*A-]x]~q;|WbP}e|j;$q#u%>}C=53ILLQVwSdPb`Td@zA_/>IoC8$yi]_/7l#' );
define( 'AUTH_SALT',        '^WKn?@ff%sQOPTY]#a~jc(2+5C!J&0!O5Q$1:UEm^3`I6#z_8cm*Uw>d{Wz8/pMn' );
define( 'SECURE_AUTH_SALT', 'ShH#:ZKW-=NH@X7?19gjHN1-TpQ:Tr^!f+Q0}gqo}o!bDRqf;KwYfK%-{L@lGs31' );
define( 'LOGGED_IN_SALT',   '17L0+[^)qGuJ2_9%$rOQ{&lx:4r!={lRA7|`B],1V,FK6`O*IiW4CRU]UljHHD5b' );
define( 'NONCE_SALT',       'Cvj/i;_#M6O&B?o-~pon !7qIrma+Iv-P]5w5__b9JL(v4POu1Zqn*2^X8@z=<:7' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
