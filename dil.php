<?php 
session_start();
$dil = strip_tags($_GET["dil"]);
if ($dil == "tr" || $dil =="en" || $dil == "ar" || $dil =="rus"){
    $_SESSION["dil"] = $dil;
    header("Location:index.php");
}else{
    header("Location:index.php");
}
?>