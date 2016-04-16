<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" context="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <title>crewJob</title>
    <link rel="shortcut icon" type="image/png" href="assets/img/memory.png"/>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/crewjob.css" rel="stylesheet">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  </head>
<body>
  <div class="container">
    <header class="header">
      <a href="home" class="hidden-xs"><img src='assets/img/memory.png' style="width: 90px; margin-top: -15px;"/></a>
      <div id="login" class="pull-right">
<?php if (!isset($_SESSION['user_id'])) { ?>
        <div id="go_login" class="btn-group pull-right">
          <button id="enter" type="button" class="btn btn-warning dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            Вход &nbsp <span class="caret"></span>
          </button>
          <form action="account/login" class="dropdown-menu">
            <div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
              <input type="text" id="user" name="user" class="form-control" placeholder="e-mail">
            </div>
            <div class="input-group" style="margin-top: 5px">
              <span class="input-group-addon"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></span>
              <input type="password" id="pass" name="pass" class="form-control" placeholder="password">
            </div>
            <div class="divider"></div>
            <div id="no_user" class="alert alert-danger"><small>Грешен потребител и/или парола!</small></div>
            <button type="submit" class="btn btn-warning btn-sm pull-right"><b>OK</b></button>
          </form>
        </div>
        <div style="clear: both; height: 12px;"></div>
        <a href="account" class="pull-left"><span class="label label-default">Нов потребител</span></a>
        <a href="fpassword" class="pull-right"><span class="label label-default">Забравена парола</span></a>
<?php } else { ?>
        <div id="user_name">
          <span class="glyphicon glyphicon-user" aria-hidden="true"></span> &nbsp;
          <?php echo $_SESSION['email']; ?>
        </div>
        <button type="button" class="btn btn-danger btn-sm pull-right" onclick="json_sbm('account/logout','');">Изход</button>
        <div style="clear: both; height: 12px;"></div>
        <a href="portfolio" class="pull-left"><span class="label label-default">Портфолио</span></a>
        <a href="change_pass" class="pull-right"><span class="label label-default">Смяна на парола</span></a>
<?php } ?>
      </div>
    </header>
    <script>$('.header .dropdown-toggle').dropdown();</script>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand visible-xs-block" href="home"><img src='assets/img/memory.png' style="width: 40px; margin-top: -10px"/></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav" id="menu">
            <li><a href="home">Начало</a></li>
            <li><a href="#">mmmm1</a></li>
            <li><a href="#">mmmm2</a></li>
            <li><a href="#">mmmm3</a></li>
          </ul>
        </div>
      </div>
    </nav>

