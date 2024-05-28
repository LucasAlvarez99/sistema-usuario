<?php

$conn = new mysqli('localhost', 'root', '', 'sistema_usuarios');

//echo "Estamos conectados!!"; 

if($conn-> connect_error){
    echo "Lo sentimos, este sitio esta experimentando fallas";
        echo "Error". $conn->connect_errno . "\n";
        echo "Error". $conn->connect_error . "\n";
        exit();
}

require_once ('ajax/functions.php');