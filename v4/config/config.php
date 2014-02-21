<?php
session_start();
if (!isset($_SESSION["user"])) $_SESSION["user"] = "visitant";
if (!isset($_SESSION["pass"])) $_SESSION["pass"] = "web";
if (!isset($_SESSION["nomusuari"])) $_SESSION["nomusuari"] = "Visitant";
if (!isset($_SESSION["grup"])) $_SESSION["grup"] = 0;
$user=&$_SESSION["user"];
$pass=&$_SESSION["pass"];
$nom=&$_SESSION["nomusuari"];
$grup=&$_SESSION["grup"]; 

$server = "localhost";
$usuari="root";
$password="52165327";
$database="aeroport";
?>
