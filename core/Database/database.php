<?php

require "./core/Database/config.php";

try {
  $conn = new PDO("mysql:host=$servername;dbname=schoolproject", $username, $password,[
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  ]);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $data = $conn->prepare("SELECT * FROM users");
  $data->execute();
  $users = $data->fetchAll();

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage(); 
}
