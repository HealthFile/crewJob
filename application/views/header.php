<!DOCTYPE HTML>
<html>

<head>
    <title>CrewJob</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="css/images/favicon.png"/>
    <link
        href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
        rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/crewjob.css" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.fs.selecter.css" type="text/css"
          media="all"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" media="all"/>

</head>
<body>


<header class="header">
    <div class="shell clearfix">
        <a href="<?php echo base_url(); ?>home" class="logo">
            <img src="<?php echo base_url(); ?>assets/img/logo-main.png">
        </a>

        <ul>
            <li class="active">
                <a href="<?php echo base_url(); ?>home">Начало</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>projects">Проекти</a>
            </li>
            <?php if (empty($_SESSION['user_id'])) { ?>
                <li>
                    <a href="<?php echo base_url(); ?>login">Вход</a>
                </li>
            <?php } else { ?>
                <li>
                    <a href="<?php echo base_url(); ?>portfolio">Портфолио</a>
                </li>
                <li>
                    <a onclick="json_sbm('account/logout','');">Изход</a>
                </li>
                <li class="accent-button">
                    <a href="<?php echo base_url(); ?>projects/create">Стартирай проект</a>
                </li>
            <?php } ?>
        </ul>
    </div>
</header>