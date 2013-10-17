<?php


global $enlace;

$enlace = pg_connect("host=localhost port=5432 dbname=juezvirtual user=juezvirtual password=") or die("<h1>Error de conexion.</h1> ". pg_last_error());


        // ***   funciono la conexion
        //$enlace=pg_connect("host=localhost port=5432 dbname=prueba user=postgres password=postgres") or die("<h1>Error de conexion.</h1> ". pg_last_error());
        
 /*
  //  echo "<h1> jala la coneccion </h1>";
    function insertarPersona()
    {
       // $sql = "INSERT INTO usuario VALUES (".$id.", '".$nombre."')";
       $sql = "INSERT INTO usuarito(id_usuario,nombre) VALUES (2,'sofia');";
        // Ejecutamos la consulta (se devolverá true o false):
         return pg_query( $conexion, $sql );
    }
    $salida = insertarPersona();
    echo '$salida';
    
    echo "<h1>hola a todos </h1>";

    $usu=pg_query($conexion,"select * from usuarito;");
    while($datos=pg_fetch_Array($usu)){
        echo $datos['id_usuario'];
    }*/

?>
