<?php
$servername = "localhost";
$username = "profesor";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "CREATE TABLE `dimarcodb`.`usuarios` (`id` INT(100) NOT NULL AUTO_INCREMENT , `user` VARCHAR(40) NOT NULL , `pass` VARCHAR(50) NOT NULL , `name` VARCHAR(40) NOT NULL , `surname` VARCHAR(40) NOT NULL , `dni` VARCHAR(10) NOT NULL , `direccion` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Las tablas fueron creadas con exito ";
  
} catch (PDOException $e) {
  //   echo $sql . "<br>" . $e->getMessage();
  echo "La tabla no pudo ser creada. Cree primero la base de datos dandole al boton 'Crear BD'";
  echo "<br>";
  echo "Si una vez creada la base de datos el problema persiste, pongase en contacto con el administrador, gracias.";
}

$conn = null;
try {
  $conn2 = new PDO("mysql:host=$servername", $username, $password);
  // set the PDO error mode to exception
  $conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql2 = "CREATE TABLE `dimarcodb`.`mascotas` (`id` INT(100) NOT NULL AUTO_INCREMENT , `user` VARCHAR(40) NOT NULL , `pass` VARCHAR(50) NOT NULL , `name` VARCHAR(40) NOT NULL , `surname` VARCHAR(40) NOT NULL , `dni` VARCHAR(10) NOT NULL , `direccion` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
  // use exec() because no results are returned
  $conn2->exec($sql2);
  echo "Las tablas fueron creadas con exito ";
  
} catch (PDOException $f) {
  //   echo $sql . "<br>" . $e->getMessage();
  echo "La tabla no pudo ser creada. Cree primero la base de datos dandole al boton 'Crear BD'";
  echo "<br>";
  echo "Si una vez creada la base de datos el problema persiste, pongase en contacto con el administrador, gracias.";
}

$conn2 = null;

?>

<html>

<br>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<br>
<span class="material-symbols-outlined">
  keyboard_return
</span>
<a href="index.php">Back</a>

</html>