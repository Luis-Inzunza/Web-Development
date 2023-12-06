<?php

    $con = null;
 try {
    $con = mysqli_connect("localhost","Sube_baja","","sistema_de_libros") or die("Couldn't connect");
} catch (mysqli_sql_exception $e) {
    header("Location: ../Estructura/Login.html?mensaje=ConnectionLost");
}
