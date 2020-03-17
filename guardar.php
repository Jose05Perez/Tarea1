<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/estilos7.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
</head>
<body>
   <header>
        <a name="1"></a>
       <div id=" cabecera">
       <div class="logo">
            <img src="img/jce.png">
       </div>
       </div>
    <nav>   
        <ul>
            <li><a href ="prueba.html"><span class ="uno"> <i class= "icon icon-home "> </i> </span>Inicio</a></li>
            <li><a href ="nosotros.html"><span class ="dos"> <i class= "icon icon-oferta"> </i> </span>Sobre nosotros</a>
            <ul>
                <li><a href="#1">¿Quiénes somos?</a></li>
                <li><a href="#2">Mision y Vision</a></li>
                <li><a href="#3">Nuestros valores</a></li>
            </ul>
            </li>
            <li><a href ="registro.html"><span class ="tres"> <i class= "icon icon-cart"> </i> </span>Servicios</a>
               
            </li>
            <li><a href ="contacto.html"><span class ="cinco"> <i class= "icon icon-libro"> </i> </span>Contacto</a></li>
           
        </ul>
    </nav>
    <hr size="2px" color="#979A9A">
</header>
<span class ="enca"><a name ="1"><center>

<?php
$conexion=mysqli_connect("localhost","root","","bdactas") or
    die("Problemas con la conexión");
   
mysqli_query($conexion,"insert into tbactas(nombre,apellido,telefono,cedula,num_acta, num_folio) values 
                       ('$_REQUEST[name]','$_REQUEST[lastn]','$_REQUEST[num]','$_REQUEST[ced]','$_REQUEST[num_acta]','$_REQUEST[folio]')")
  or die("Problemas hubo un error en el los campos llenados favor ver el error y corregirlo: ".mysqli_error($conexion));
 

echo "Solicitud aprobada";



?>
</span></a></center>

<br><br>
<center>
<form action="registro.html">

<input type="submit" value="Volver" >
</form>
</center>

<footer><p>©Junta Central Electoral | Derechos reservados| GOB | <a href="#1">Subir </a></p><left><p><i class= "icon icon-twitter"> </i><i class= "icon icon-phone"></i> <i class= "icon icon-instagram"> </i><i class= "icon  icon-facebook"></i></p><left>

</footer>

</footer>
</body>
</html>
