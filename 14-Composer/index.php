<?php

    require_once('vendor/autoload.php');

    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;

    //Create a log channel
    $log = new Logger ('banco_de_dados');
    $log->pushHandler (new StreamHandler ('path/to/warning.log', Logger::WARNING));

    //add records to the log
    $log->warning('Cuidado, o arquivo não foi encontrado');
    $log->error('Erro ao tentar abrir o arquivo');

?>