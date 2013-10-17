<?php

if (empty($_POST)) {
    // GET
} else {
    // POST
//    echo 'procesando el formulario';
    
    
//    <?php
//    session_start();
//    require_once("conexionBD.php");
//
//// recuperamos los datos del formulario
//$nombre = $_POST["nombre"];
//$paterno = $_POST["paterno"];
//$materno = $_POST["materno"];
//$ci = $_POST["ci"];
//$email = $_POST["email"];
//$sexo = $_POST["sexo"];
//$telefono = $_POST["telefono"];
//$direccion = $_POST["direccion"];
//$colegio = $_POST["colegio"];
//$tipo = $_POST["tipo"];
//$usuario = $_POST["usuario"];
//$contrasena = $_POST["contrasena"];
//$repetir = $_POST["repcontrasena"];
//$codigo = $_POST["codigo"];
//
//echo $nombre.'<br/>';
//echo $paterno.'<br/>';
//echo $materno.'<br/>';
//echo $ci.'<br/>';
//echo $email.'<br/>';
//echo $sexo.'<br/>';
//echo $telefono.'<br/>';
//echo $direccion.'<br/>';
//echo $colegio."<br/>"; 
//echo $tipo."<br/>"; 
//echo $usuario."<br/>"; 
//echo $contrasena."<br/>";
//echo $codigo.'<br/>';
//
//$iden_sesion = session_id();
//
//function registrarOlimpista($nombre,$paterno,$materno,$ci,$email,$sexo,$telefono,$direccion,$colegio,$usuario,$contrasena)
//{
//   //if($colegio!='' && $tipo=='OLIMPISTA'){
//     $sql = "select guardar_olimpista('".$nombre."','".$paterno."','".$materno."','".$ci."','".$email."','".$sexo."','".$telefono."','".$direccion."','"
//                                       .$colegio."','".$usuario."','".$contrasena."');";
//    $consulta  = pg_query($sql);
//    $recuperado= pg_fetch_array($consulta);
//
//      if($recuperado[0] != 0)
//      {
//         echo "<h3> OLIMPISTA REGISTRADO CORRECTAMENTE </h3>";
//      //   echo  '<SCRIPT LANGUAGE="javascript">  location.href = "problemas.php"; </SCRIPT>';
//      }
//      else{
//        // echo  '<SCRIPT LANGUAGE="javascript">  location.href = "registroUsuario.php"; </SCRIPT>';
//          echo 'no inserto nada';
//      }
//
//   //}
//}
//function registrarComite($nombre,$paterno,$materno,$ci,$email,$sexo,$telefono,$direccion,$usuario,$contrasena,$codigo)
//{
//     $sql = "select guardar_comite('".$nombre."','".$paterno."','".$materno."','".$ci."','".$email."','".$sexo."','".$telefono."','".$direccion."','"
//                                     .$usuario."','".$contrasena."','".$codigo."');";
//    $consulta  = pg_query($sql);
//    $recuperado= pg_fetch_array($consulta);
//
//      if($recuperado[0] != 0 && $codigo=='COM456')
//      {
//         echo "<h3> COMITE REGISTRADO CORRECTAMENTE </h3>";
//         echo  '<SCRIPT LANGUAGE="javascript">  location.href = "problemas.php"; </SCRIPT>';
//      }
//      else{
//          echo 'no inserto nada';
//          echo  '<SCRIPT LANGUAGE="javascript">  location.href = "registroUsuario.php"; </SCRIPT>';
//      }
//}
//
//function registrarAdministrador($nombre,$paterno,$materno,$ci,$email,$sexo,$telefono,$direccion,$usuario,$contrasena,$codigo)
//{ 
//     $sql = "select guardar_comite('".$nombre."','".$paterno."','".$materno."','".$ci."','".$email."','".$sexo."','".$telefono."','".$direccion."','"
//                                     .$usuario."','".$contrasena."','".$codigo."');";
//    $consulta  = pg_query($sql);
//    $recuperado= pg_fetch_array($consulta);
//
//      if($recuperado[0] != 0 && $codigo=='ADM123')
//      {
//         echo "<h3> ADMINISTRADOR REGISTRADO CORRECTAMENTE </h3>";
//         echo  '<SCRIPT LANGUAGE="javascript">  location.href = "problemas.php"; </SCRIPT>';
//      }
//      else{
//          echo 'no inserto nada';
//          echo  '<SCRIPT LANGUAGE="javascript">  location.href = "registroUsuario.php"; </SCRIPT>';
//      }
//}
//
//
// if($colegio!="" && $tipo=="OLIMPISTA")
//  {
//     registrarOlimpista($nombre,$paterno,$materno,$ci,$email,$sexo,$telefono,$direccion,$colegio,$usuario,$contrasena);
//  }
//  else{
//      if($tipo=='COMITE ACADEMICO'){
//         registrarComite($nombre, $paterno, $materno, $ci, $email, $sexo, $telefono,$direccion, $usuario, $contrasena, $codigo);
//      }
//      else{  
//            registrarAdministrador($nombre, $paterno, $materno, $ci, $email, $sexo,$telefono ,$direccion,$usuario, $contrasena, $codigo);
//       
//      }
//  }
 

/* registrarOlimpista($nombre,$paterno,$materno,$ci,$email,$sexo,$telefono,$direccion,$colegio,$usuario,$contrasena);
  $sql = "select guardar_olimpista('".$nombre."','".$paterno."','".$materno."','".$ci."','".$email."','".$sexo."','".$telefono."','".$direccion."','"
                                       .$colegio."','".$usuario."','".$contrasena."');";
    $consulta  = pg_query($sql);
    $recuperado= pg_fetch_array($consulta);
    var_dump($recuperado);s
 *
 */
    
}
