<?php 
$hostDB = 'mysqlmikelayala';
$nombreDB = 'examendb';
$usuarioDB = 'MikelAyala';
$password = 'admin1234';

$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";

$localPDO = new PDO($hostPDO, $usuarioDB, $password);

$usuariosSQL = $localPDO->prepare('SELECT * from usuarios;');

$usuariosSQL->execute();

$usuarios = $usuariosSQL->fetchAll();

echo ("<table>");

foreach ($usuarios as $usuario => $fila){
    echo("<tr><td>".$fila['nombre']."</td></tr>");
}

echo ("</table>");
