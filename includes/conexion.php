<?php
  $servername = "127.0.0.1:3306";
  $username = "root";
  $password = "root";
  $dbname = "hotel";
 

  // Crea la Conexión
  $conexion = mysqli_connect($servername, $username, $password, $dbname);

  // Verifica la Conexión
/*
  if (!$conexion) {
    die("La Conexión ha fallado: " . mysqli_connect_error());
  }else{
  echo "Conexión exitosa <br>";
  }
  */
  //La conexión se cerrará automáticamente cuando finalice el script. 
  //Para cerrar la conexión antes, usa: mysqli_close($conexion);
  
?>