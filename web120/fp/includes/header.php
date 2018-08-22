<?php include 'portal-config.php'?>
<!DOCTYPE>
<html lang="en">
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/fpnav.css" />
<link rel="stylesheet" href="css/fpform.css" />
<link rel="stylesheet" href="css/fpportal.css" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
<!-- START WRAPPER -->
<div class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa <?=$logo?>"></i>Welcome To Chef Liao: Fine Dining Asian Cuisine</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
        <?=makeLinks($nav1)?>
        
        <!--
      <li><a href="index.php" class="selected">Wassup</a></li>
      <li><a href="contactgrease.php">Contact Us</a></li>
      <li><a href="menu.php">Grub!!!</a></li>
      <li><a href="faq.php">Frequently Asked Questions</a></li>
        -->
        
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
        
<!-- START LEFT COL -->
<section class="leftcol">
 <h2 class="PageID"><?=$PageID?></h2>