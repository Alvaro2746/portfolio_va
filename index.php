<!DOCTYPE html>
<html lang="en" class="h-100">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/styles2.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js">
</head>
<?php


if(isset($_GET["m"])){ 
    if ($_GET["m"]=="home"){
        include_once("home.php"); 
    } elseif ($_GET["m"]=="contact"){
        include_once("contact.php"); 
    }elseif ($_GET["m"]=="projects") {
        include_once("projects.php"); 
    }elseif ($_GET["m"]=="about_me") {
        include_once("about_me.php"); 
}
}else{
    $_GET["m"]="home";
    if ($_GET["m"]=="home"){
        include_once("home.php"); 
    } elseif ($_GET["m"]=="contact"){
        include_once("contact.php"); 
    }elseif ($_GET["m"]=="projects") {
        include_once("projects.php"); 
    }elseif ($_GET["m"]=="about_me") {
        include_once("about_me.php");
    }
}
?>

</html>

