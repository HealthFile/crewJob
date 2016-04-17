<!DOCTYPE HTML>
<html>

  <head>
  <title>CrewJob</title>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="css/images/favicon.png" />
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css" media="all" />
  <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css" media="all" />
  <link rel="stylesheet" href="assets/css/jquery.fs.selecter.css" type="text/css" media="all" />
  <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all" />
  <script src="assets/js/jquery-1.11.0.min.js" type="text/javascript"></script>
  <script src="assets/js/owl.carousel.js" type="text/javascript"></script>
  <script src="assets/js/jquery.fs.selecter.js" type="text/javascript"></script>
  <script src="assets/js/functions.js" type="text/javascript"></script>
</head>
<body>
  


<header class="header">
  <div class="shell clearfix">
    <a href="home" class="logo">
      <img src="assets/img/logo-main.png">
    </a>

    <ul>
      <li class="active">
        <a href="home">Home</a>
      </li>
      <li>
        <a href="#">Projects</a>
      </li>
<?php if (!isset($_SESSION['user_id'])) { ?>
      <li>
        <a href="login">Log in</a>
      </li>
<?php } else { ?>
      <li class="accent-button">
        <a href="#">Create Project</a>
      </li>
<?php } ?>
    </ul>
  </div>
</header>