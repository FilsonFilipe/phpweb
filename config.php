<?php
define('HOST', 'host=localhost;');
define('USUARIO', 'root');
define('SENHA', '');
define('BANCO', 'dbname=cambas');
define('SGBD', 'mysql:');
define('DNS', SGBD.HOST.BANCO);
spl_autoload_register(function($classe){
    $diretorio=".".DIRECTORY_SEPARATOR."classes".DIRECTORY_SEPARATOR;
    $arquivo=$diretorio.$classe.".php";
    if (file_exists($arquivo)) {
        require_once $arquivo;
    }
    
});
