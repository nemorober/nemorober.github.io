<!DOCTYPE html>
<html style="width: 100vw;
  overflow-x: hidden;">
  <head>
    <meta charset="utf-8">
    <title>Zazah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="icon" href="icon.ico">
  <link href="https://fonts.googleapis.com/css?family=Ledger|Nixie+One" rel="stylesheet">
  </head>
  <style>
  @media screen and (min-width:768px){
      .navbar-brand-centered {
          position: absolute;
          left: 50%;
          display: block;
          width: 160px;
          text-align: center;
          background-color: #eee;
      }
      .navbar>.container .navbar-brand-centered,
      .navbar>.container-fluid .navbar-brand-centered {
          margin-left: -80px;
      }
  }

  .navbar-brand {
    background: url('img/logo2.jpg') center / contain no-repeat;
    width: 160px;
  }
  .navbar-nav>.active>a, .navbar-nav>.active>a:hover, .navbar-nav>.active>a:focus {
    text-decoration:underline;
    background-color:white !important;
  }

  </style>
  <body style="font-family: 'Ledger';" id="override">

<nav class="navbar navbar-default" role="navigation">
<div class="container">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <a href="index.php" class="navbar-brand navbar-brand-centered"></a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="navbar-brand-centered">
  <ul class="nav navbar-nav" >
    <li <?=echoActiveClassIfRequestMatches("index")?>><a href="index.php">HOME</a></li>
    <li <?=echoActiveClassIfRequestMatches("about")?>><a href="about.php">ABOUT</a></li>

  </ul>
  <ul class="nav navbar-nav navbar-right" >
    <li style="cursor:pointer;"<?=echoActiveClassIfRequestMatches("work1modal")?>
      <?=echoActiveClassIfRequestMatches("work2modal")?>
      <?=echoActiveClassIfRequestMatches("work3modal")?>

      class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="work1.php">WORK
      </a>
      <ul class="dropdown-menu">
        <li <?=echoActiveClassIfRequestMatches("work1modal")?>><a href="work1modal.php">Recent</a></li>
        <li <?=echoActiveClassIfRequestMatches("work2modal")?>><a href="work2modal.php">2010 - 2012</a></li>
        <li <?=echoActiveClassIfRequestMatches("work3modal")?>><a href="work3modal.php">2006 - 2009</a></li>
      </ul>
    </li>
    <li <?=echoActiveClassIfRequestMatches("contact")?>><a href="contact.php">CONTACT</a></li>

  </ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>

<?php
function echoActiveClassIfRequestMatches($requestUri) {
  $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");
  if ($current_file_name == $requestUri) {
    echo 'class="active"';
  }
}
?>
