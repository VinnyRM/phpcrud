<?php
  /*define('HOST', 'localhost');
  define('USER', 'root');
  define('PASS', '');
  define('BASE', 'phpcrud');
  
  $conn = new mysqli(HOST, USER, PASS, BASE);*/

  /*$conn = new PDO("mysql:dbname=phpcrud;host=localhost:3310", "root", "");*/

  $host = "127.0.0.1:3307";
  $user = "root";
  $pass = "1234";
  $db = "phpcrud";

  /*$conn = mysqli_connect('localhost', 'root', '', 'phpcrud');*/
  $conn = mysqli_connect($host, $user, $pass, $db);

  if ($conn->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}