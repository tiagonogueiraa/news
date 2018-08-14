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
define('DB_NAME', 'news');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'adm');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'news@123');

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
define('AUTH_KEY',         '1z??WoynU#J;(Ng+#).=_7rg:v%.=,=b<ws=yS3IFQ/o0~tCJe%:!L[8@Q1ay#e.');
define('SECURE_AUTH_KEY',  'U,7<[?EmG=,-eZj~~T~cukwFzEZ(4wY[bMvGmu//Gxu/Cz 6Sbqo]}gKNw9)j;c-');
define('LOGGED_IN_KEY',    '~K7uFNPIu$[Q]%0APxH;SD IT@U/V(ljRAhfq6ioyQe[;(qmG HNv9TGVeWCs~:H');
define('NONCE_KEY',        'dfLD)?RVJ5Xwn*Ilj*z7R&~mbnC{_y5ou]Vb:g06)(n2:20ej{mR81~;oNy<Re,Z');
define('AUTH_SALT',        '!|az-,^:$]Fpt%LX152u=, xPN:w|;qcccp0OgWZsZI;o9C!$jhgD!^*ls/#C<U9');
define('SECURE_AUTH_SALT', ')#bK~9O7$K!2P8LH8TP{z_+vD)*H<5q7jUJz5-/Kz($VF<TOLg>-C;fIlt-lIXun');
define('LOGGED_IN_SALT',   '#T8W<.r=B,rH5o J.Hg~}b5ppS?$RBsyb4(Q]zMIIud^@@IlIX2KJ$xU|u?ICsdm');
define('NONCE_SALT',       '&SA4S89Nw/.4d3a5Nd0/DZ=hm7kq|3#@01jW5M4JOn~{6=4extS.Y1.Jh?ucDkgn');

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
