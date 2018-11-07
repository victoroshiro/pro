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
define('DB_NAME', 'promilitares');

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
define('AUTH_KEY',         'uZinGxF:,BwtemQ|*0i8YnHNz@A^,Re(_T&Q`&9+d!<^WNK{LHCAR$X:aO@>e)%|');
define('SECURE_AUTH_KEY',  ',]8mG|JVgBM{qZxHt0qo@rl]tS0xmV]Qi9684|y2)ey-s]gQm$FI3puB<6?(q&Zt');
define('LOGGED_IN_KEY',    '{iKwK$?37`h&kV{j-;c,}xYepI n-(E?sc4,_.]#AO5-g^Hj4JCC_hS`?8`BkT4=');
define('NONCE_KEY',        '0-6&KaHT!(Y:=$j65%C)bW&UE-&(^$/Ii?>0Uu!YJc24*jFVxv@5OqI;i&VOu~lo');
define('AUTH_SALT',        '4%P+UZ(_v,V_[$=+RQoqDafu<92*/cd+dt|R~.iXil1xm%J:2Q2$jTdOB$0I-S{1');
define('SECURE_AUTH_SALT', '=m,Miix/= Us!0!~`C~#,1@!YI?k=/ |wHN$G{yOasLI=}jwjlg#lzq~@N<k^}@`');
define('LOGGED_IN_SALT',   'd7D{)ieDDINhmpU:pg([PgnJW^rret~T>T}Rc}Vy%FV</B?G;K-|>`M bHI]{B6G');
define('NONCE_SALT',       'QUqj2MA6Rj5OwtGykDkjeTTyg.:wOE]TdMk54ZJU6Zk5%tm?y%>xEJ?aD)XxI4X2');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
