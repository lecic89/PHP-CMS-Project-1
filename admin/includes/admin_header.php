<?php ob_start(); ?> <!-- ovo se koristi kada hocemo da sve  aktiviramo u isto vreme tipa sve nase php tag header footer idt... -->
<?php include "../includes/db.php";?>
<?php include "functions.php";?>

<?php session_start(); ?>

<?php

if(!isset($_SESSION['user_role'])) {

    header("Location: ../index.php");

}

?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <link href="css/styles.css" rel="stylesheet">

    <!--  [link for google chart]  -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <!--  [link for co-editor ]  -->
     <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
     <script src="js/scripts.js"></script>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

</head>

<body>