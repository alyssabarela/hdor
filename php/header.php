<?php session_start(); ?>
<!-- $pageTitle = $_SESSION['pageTitle']; -->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="High Desert Off-Road Club is...">
  <meta name="keywords" content="off-road,truck,buggy,jeep,rock,mud">
  <title>High Desert Off-Road</title>
  <base href="/hdor/" />
  <link rel="icon" type="image/x-icon" href="logos/favicon.ico">
  <link rel="shortcut icon" href="logos/favicon.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/main.min.css">
</head>
<body id="home">
<div class="container"> <!-- container -->
  <!-- row 1: nav -->
  <?php include 'php/nav.php';?>

  <div class="row">
    <header class="header">
      <div class="col-sm-4">
        <a class="brand" href="#">
          <img class="img-responsive" src="logos/lizard.png"></img>
        </a>
      </div>
      <div class="col-sm-8">
        <h1>High Desert Off-Road</h1>
      </div>
    </header>
  </div>