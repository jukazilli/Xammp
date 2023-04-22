<?php 
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'phpmyadmin';
 
$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

 if ($conexao-> connect_errno )
 {
    print('Erro na conexao');
 } 
    else{
        print('Sucesso na conexao');
    }
?>