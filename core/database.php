<?php
$servername = "localhost";
$username = "root";
$password = "8423";

try {
  $conn = new PDO("mysql:host=$servername;dbname=schoolproject", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  /* echo "Connected successfully"; */

  $data = $conn->prepare("SELECT * FROM users");
  $data->execute();
  $users = $data->fetchAll();

} catch(PDOException $e) {
  /* echo "Connection failed: " . $e->getMessage(); */
}
