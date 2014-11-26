<?php 

# Está online?
define('ONLINE', false);

# Timezone
define('DEFAULT_TIMEZONE', 'America/Sao_Paulo');

# Set Timezone
date_default_timezone_set(DEFAULT_TIMEZONE);

# Dados de conexão
if(ONLINE)
{
    # Dados para conexão online
    $server = "";
    $user = "";
    $pass = "";
    $bd = "";

    # Base URL
    define('BASE_URL', '');
    define('PATH_IMG', '');
}
else
{    
    # Dados para conexão local
    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "";

    # Base URL
    define('BASE_URL', 'http://localhost/Sistema-de-Gerenciamento-Escolar/');
}

# Definir o caminho base para a pasta root
define('BASE_PATH', dirname(__FILE__) . '/../');

try
{
    $pdo = new PDO("mysql:host=$server;dbname=$bd", $user, $pass);
}
catch(PDOException $e)
{
    echo '<pre>Falha na conexão com o banco de dados. <br/>Dados do erro: ' . $e->getMessage() . '</pre>';
}

# Pages
$page = isset($_GET['page']) && is_file(BASE_PATH . '/pages/' . mysql_real_escape_string($_GET['page']) . '.php') ? mysql_real_escape_string($_GET['page']) : "index";

if(isset($_GET['page']) && !is_file(BASE_PATH . '/pages/' . mysql_real_escape_string($_GET['page']) . '.php')){
    $page = 'pagina-nao-encontrada';
}

#Page title
switch ($page){
    case 'home';
        $title = 'Página inicial';
        break;
    case 'alunos';
        $title = 'Alunos';
        break;
    case 'colaboradores';
        $title = 'Colaboradores';
        break;
    case 'pagina-nao-encontrada';
        $title = '404 Página não encontrada';
        break;
    default:
        $title = 'Sistema Escolar';
}

# Inclusão e instanciamento das classes
include_once BASE_PATH . '/app/classes/Utils.php';
$Utils = new Utils();