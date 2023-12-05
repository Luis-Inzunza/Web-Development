<?php

    $con = null;
 try {
    $con = mysqli_connect("localhost","Sube_baja","","tribunales_amigables") or die("Couldn't connect");
} catch (mysqli_sql_exception $e) {
    header("Location: ../Estructura/Login.html?mensaje=ConnectionLost");
}
