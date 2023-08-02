<?php 
$servername = "localhost";
$username = "root";
$password = "marianokpo22";
$dbname = "consultas";

//create connection

$conn = new mysqli($servername,$username,$password,$dbname);



if($conn -> connect_error){
    die("Connection failed: " . $conn-> connect_error);
}
//echo "Connected successfully";
echo "<br>";
//create database
function crearDB($conn){
    $sql = "CREATE DATABASE consultas";

    if($conn -> query($sql) === TRUE){
        echo "Database created successfully";
    }else{
        echo "Error creating database " . $conn -> error;
    }   
}

function crearTabla($conn){
  $sql = "CREATE TABLE personas(
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      nombre VARCHAR(100) NOT NULL,
      apellido VARCHAR(100) NOT NULL,
      telefono VARCHAR(20) NOT NULL,
      reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";

  if($conn ->query($sql) === TRUE){
     echo "tabla personas ha sido creada satisfactoriamente";
  }else{
     echo "Error al crear la tabla: " . $conn->error;
  }
}
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$numero = $_POST["telefono"];

function insertarDatosTabla($conn,$nombre,$apellido,$numero){
   
   if(empty($nombre) && empty($apellido) && empty($numero)){
      $sql = "INSERT INTO personas(nombre,apellido,telefono)
      VALUES ($nombre,$apellido,$numero)"; 
      
      if($conn -> query($sql) === TRUE){
         echo "New record created successfully";

      }else{
         echo "Error: " . $sql . "<br>" . $conn-> error;
      }
   } 
}
if(empty($nombre) && empty($apellido) && empty($numero)){
   echo "los campos estan vacios";
 }else{
    $sql = "INSERT INTO personas(nombre,apellido,telefono)
    VALUES ('$nombre','$apellido','$numero')"; 
    
    if($conn -> query($sql) === TRUE){
       echo "New record created successfully";

    }else{
       echo "Error: " . $sql . "<br>" . $conn-> error;
    }
 }

//crearDB($conn);
//crearTabla($conn);
//insertarDatosTabla($conn,$nombre,$apellido,$numero);
$conn -> close();


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>redirigiendo a la pagina principal</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="../img/logo_portfolio.ico" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/estilos.css">
  <link rel="stylesheet" href="../css/fuentes.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/author.css">
  <link rel="stylesheet" href="../css/retoques.css">
  <link rel="stylesheet" href="../css/social.css">
  <link rel="stylesheet" href="../css/contacto.css">
  <link rel="stylesheet" href="../css/respuesta.css">
</head>
  <body>
    <p class='respuesta'>
        Tu dato han sido agendado. Pronto le respondo
    </p>
    <script src="../js/redireccionar.js"></script>
</body>
</html>

