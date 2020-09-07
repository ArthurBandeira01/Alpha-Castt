<?php 
    session_start();
    date_default_timezone_set('America/Sao_Paulo');
    $autoload = function($class){
        if($class == 'Email'){
            require_once('classes/phpmailer/PHPMailerAutoload.php');
        }
        include('classes/'.$class.'.php');    
    };

    spl_autoload_register($autoload);

    define('INCLUDE_PATH','http://localhost/Alpha%20Castt/Alpha%20Castt/');
    define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');
    define('BASE_DIR_PAINEL',__DIR__.'/painel');

    //Conexão com banco de dados:

    define('HOST','localhost');
    define('USER','root');
    define('PASSWORD',''); //esse têm senha no bd!!
    define('DATABASE','alphacastt');

    //Constantes para o painel
    define('NOME_EMPRESA','Alpha Castt');


?>