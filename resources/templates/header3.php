<!DOCTYPE html>
<html style="width: 100vw;
  overflow-x: hidden;">
  <head>
    <meta charset="utf-8">
    <title>ZAZAH</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Ledger|Nixie+One" rel="stylesheet">
  <script type="text/javascript"
	src="https://viralpatel.net/blogs/demo/jquery/jquery.shorten.1.0.js"></script>
  <link rel="icon" href="img/icon.ico">
  <link href="https://fonts.googleapis.com/css?family=Ledger|Nixie+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  </head>
<style>
  * {
    margin: 0;
}
html, body {
    height: 100%;
}
.wrapper {
    min-height: 100%;
    height: auto !important;
    height: 100%;
    margin: 0 auto -25px; /* the bottom margin is the negative value of the footer's height */
}
.footer, .push {
    height: 25px; /* .push must be the same height as .footer */
}

@media (min-width: 768px) {
  .navbar-nav.navbar-center, .navbar-header-center {
    margin-left: 50%;
    transform: translateX(-50%);

  }
  .navbar .nav > li > a {
  min-width: 6.5em;
  text-align:center;
}
}
/* navbar */
.navbar-default {
    background-color: white;
    border-color: black;
    border-top: 0px;
    border-left: 0px;
    border-right: 0px;
    border-radius: 0px;
}
/* Title */
.navbar-default .navbar-brand {


}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {

}
/* Link */
.navbar-default .navbar-nav > li > a {

}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {

}
.navbar-nav>.active>a, .navbar-nav>.active>a:hover, .navbar-nav>.active>a:focus {
  text-decoration:underline;
  background-color:white !important;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {

}
/* Caret */
.navbar-default .navbar-nav > .dropdown > a .caret {
    border-top-color: #777;
    border-bottom-color: #777;
}
.navbar-default .navbar-nav > .dropdown > a:hover .caret,
.navbar-default .navbar-nav > .dropdown > a:focus .caret {
    border-top-color: #333;
    border-bottom-color: #333;
}
.navbar-default .navbar-nav > .open > a .caret,
.navbar-default .navbar-nav > .open > a:hover .caret,
.navbar-default .navbar-nav > .open > a:focus .caret {
    border-top-color: #555;
    border-bottom-color: #555;

}
/* Mobile version */
.navbar-default .navbar-toggle {
    border-color: #DDD;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {

}
.navbar-default .navbar-toggle .icon-bar {

}
@media (max-width: 767px) {
    .navbar-default .navbar-nav .open .dropdown-menu > li > a {

    }
    .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
    .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {

    }
}
.navbar .navbar-brand {
  padding-top: 15px;
}

.navbar .navbar-brand img {
  height: 18px;
  width: 160px;
}


p {
  color:black;
}

.navbar li {
  margin: 5px;
}


.navbar-brand {
  background: url('img/logo2.jpg') center / contain no-repeat;
  width: 160px;
  margin: 5px;
}

.dropdown-menu > .active > a, .dropdown-menu > .active > a:hover, .dropdown-menu > .active     >     a:focus {
    background-color: #8266a8 !important;
    background-repeat: repeat-x !important;
    color: #FFFFFF;
    outline: 0 none;
    text-decoration:none;

}
  </style>
  <body style="font-family: 'Montserrat', sans-serif;" id="override">
<div class="wrapper">
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-2">
    </div>
<nav class="navbar navbar-default col-lg-8">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"></a>
    </div>

    <div class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-right">
      <li <?=echoActiveClassIfRequestMatches("index")?>><a href="index.php">HOME</a></li>
      <li <?=echoActiveClassIfRequestMatches("about")?>><a href="about.php">ABOUT</a></li>
      <li <?=echoActiveClassIfRequestMatches("work1modal")?>
        <?=echoActiveClassIfRequestMatches("work2modal")?>
        <?=echoActiveClassIfRequestMatches("work3modal")?> class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">WORK
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li <?=echoActiveClassIfRequestMatches("work1modal")?>><a href="work1modal.php">Recent</a></li>
          <li <?=echoActiveClassIfRequestMatches("work2modal")?>><a href="work2modal.php">2010 - 2012</a></li>
          <li <?=echoActiveClassIfRequestMatches("work3modal")?>><a href="work3modal.php">2006 - 2009</a></li>
        </ul>
      </li>
      <li <?=echoActiveClassIfRequestMatches("contact")?>><a href="contact.php">CONTACT</a></li>

    </ul>
  </div>
  </div>
</nav>
<div class="col-lg-2">
</div>
</div>
</div>




      <?php
      function echoActiveClassIfRequestMatches($requestUri) {
        $current_file_name = basename($_SERVER['REQUEST_URI']);
        if (strpos($current_file_name, $requestUri) !== false) {
          echo 'class="active"';
        }
      }
      ?>
