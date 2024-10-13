<?php 
   require_once __DIR__ . '/../vendor/autoload.php';

   use App\model\Usuario;
   use App\persistence\ConnectionFactory;

   $u = new Usuario();
   $u -> nome = "Davi Lucas";

   $sqlInsert = "INSERT INTO usuarios (nome) VALUES ('" . $u->nome . "')"; 

   //echo $sqlInsert;

   $conn = ConnectionFactory::getConnection();
   $conn->exec($sqlInsert);
   