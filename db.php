 <?php

session_start();


 $servidor = "localhost";
 $usuario ="root" ;
 $pass = "admin123";
 $db= "bancomysavings";

 $conn = mysqli_connect(
      $servidor,
      $usuario,
      $pass,
      $db
 );


 

?>