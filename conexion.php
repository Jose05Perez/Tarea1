<?php

    $mysqli= new mysqli ('localhost','root','','bdactas'); 

        if ($mysqli->connect_error){
    
            die('Problemas en la conexion ' . $mysqli->connect_error);

        }   


?>