<?php

$mysqli_connection = new MySQLi('localhost', 'root', '', 'cesta_dos_sonhos');
if($mysqli_connection->connect_error){
   echo "Desconectado! Erro: " . $mysqli_connection->connect_error;
}else{
   // echo "Conectado!";
}