<?php

if (empty($_POST)) {
    // GET
} else {
    // POST

//<?php
//    session_start();
//    require_once("conexionBD.php");    
//
//// recuperamos los datos del formulario
//$usuario = $_POST["usuario"];
//$password = $_POST["password"];
//$iden_sesion = session_id();
//
//
//function validarUsuario($usuario, $password, $id_sesion)
//{
// //  $consulta = pg_query("SELECT * FROM usuario WHERE login='".$usuario."' and contrasena='".$password."';");
//  // $recuperado=pg_fetch_Array($consulta);
//
//    //var_dump($recuperado);
//
//   //if($usuario==$recuperado['login'] && $password==$recuperado['contrasena'] )
//    $sql = "select validar_usuarios('".$usuario."','".$password."','".$id_sesion."');";
//    $consulta  = pg_query($sql);
//
//    $recuperado=pg_fetch_array($consulta);
//    
//   if($recuperado[0] != 0)
//   {
//       echo 'usuario valido';
//       
//       //$sql = "select validar_usuarios('".$usuario."','".$password."','".$id_sesion."');";
//       //pg_query($sql);
//       echo 'se hizo la session ';
//   }
//   else{
//      
//       echo  '<SCRIPT LANGUAGE="javascript">  location.href = "login.php"; </SCRIPT>';
//
//   }
//}
//
//  validarUsuario($usuario, $password, $iden_sesion);
//
//
////if()
// // $sql = "INSERT INTO usuario(id_usuario,login,contrasena) VALUES (7,'denni','pinchador');";
//        // Ejecutamos la consulta (se devolverá true o false):
//    //     pg_query( $enlace, $sql );
//
//
//
//
///*$result = pg_query('SELECT password, usuario FROM usu_login WHERE usuario=\''.$usuario.'\'');
//if($row = pg_fetch_array($result)){
//if($row["password"] == $password){
//$_SESSION["k_username"] = $row['usuario'];
//echo 'Has sido logueado correctamente '.$_SESSION['k_username'].' <p>';
//echo '<a href="index.php">Index</a></p>';
////Elimina el siguiente comentario si quieres que re-dirigir automáticamente a index.php
///*Ingreso exitoso, ahora sera dirigido a la pagina principal.
//<SCRIPT LANGUAGE="javascript">
//location.href = "index.php";
//</SCRIPT>*/
///*
//        }else{
//}
//echo 'Password incorrecto';
//}
//}else{
//echo 'Usuario no existente en la base de datos';
//}
//pg_free_result($result);
//}else{
//echo 'Debe especificar un usuario y password';
//}
//pg_close();
// * */
//
//
//

}
