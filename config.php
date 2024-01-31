<?php

// criei variaveis de acesso para criar uma conexão com o banco de dados
$dbHost = 'Localhost';
$dbUsarname = 'root';
$dbPassword = '';
$dbName = 'mydb';

// conexão orientado a objeto
$conexao = new mysqli($dbHost, $dbUsarname, $dbPassword,$dbName );

/*       if($conexao-> connect_errno){
            echo"erro";
        }else {
            echo "realizado com sucesso";
        }
 */

?>