<!DOCTYPE html>
<html lang="en">
<head>
  <title>Zazah</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="custom.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Ledger|Nixie+One" rel="stylesheet">
</head>
<body id="override" style="font-family: 'Ledger'">
      <nav class="navbar navbar-default center">
        <div class="navbar-inner">
      <div class="container-fluid center">
        <ul class="nav navbar-nav nav-center">
          <li <?=echoActiveClassIfRequestMatches("index")?>><a href="index.php">HOME</a></li>
          <li <?=echoActiveClassIfRequestMatches("about")?>><a href="about.php">ABOUT</a></li>
          <li><a style="font-family: 'Nixie One', cursive;
            font-size: 450%;"
             class="navbar-brand" href="index.php">ZAZAH</a> </li>
          <li <?=echoActiveClassIfRequestMatches("work1")?>
            <?=echoActiveClassIfRequestMatches("work2")?>
            <?=echoActiveClassIfRequestMatches("work3")?>

            class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="work1.php">WORK
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li <?=echoActiveClassIfRequestMatches("work1")?>><a href="work1.php">Recent</a></li>
              <li <?=echoActiveClassIfRequestMatches("work2")?>><a href="work2.php">2010 - 2012</a></li>
              <li <?=echoActiveClassIfRequestMatches("work3")?>><a href="work3.php">2006 - 2009</a></li>
            </ul>
          </li>
          <li <?=echoActiveClassIfRequestMatches("contact")?>><a href="contact.php">CONTACT</a></li>
        </ul>
      </div>
    </div>
    </nav>

    <?php
    function echoActiveClassIfRequestMatches($requestUri) {
      $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");
      if ($current_file_name == $requestUri) {
        echo 'class="active"';
      }
    }
    ?>
