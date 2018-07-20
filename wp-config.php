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
define('DB_NAME', 'corujito');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '-tnTI`< !GKY-PfrC@d}q8PuWybiP!bp(:p7|/9Mh&$6RDLk;|Ovd1k%#RUxq+VT');
define('SECURE_AUTH_KEY',  '+:Rl5Jx6!xQ<O^8rpp.XqE0R*IXCfsKGSN`tktyz{H}^9Ea7])#nVw*D|IvvQ?S5');
define('LOGGED_IN_KEY',    'TM`9zo%9t&n>mR$XpI#n=qt8-~>DJt(rBy,Q>%rp~>+5IQp|T]{:]8>RoqMiidd#');
define('NONCE_KEY',        'MT>Upg[BUu*oJaNqpilH]u@]@B5&R`ErTe`0`|8f7l+XF^kJAZ`vil6^jvnDm $*');
define('AUTH_SALT',        'st,aJa2l%@S0SA8=QkVNW!WwMIr/6J(f-Bj,wRf69+]#SHi4>xqE_XzA0@tVmmcQ');
define('SECURE_AUTH_SALT', 'nEk-v 8@HH;]>v!k+25!*kX-C{$89u|JV@{{J%NTT6)oOb[.nI$zLg}p]$Ux|<mV');
define('LOGGED_IN_SALT',   '$09J+i5XN<!o{.EOrD rgNm-A9GA)t.H^Y#-,_`7%M.N2Tu@vz^Gs=4_+g8uwYu+');
define('NONCE_SALT',       'M_-mCO)K;sQJM}P/k>#wu&;<yVcBb_dH9:j$r-:uS_e/J;AIq`$M}FzM9r9hAnA*');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'crjt_';

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
