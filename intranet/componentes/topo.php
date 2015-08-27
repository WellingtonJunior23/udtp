<?php
include_once './bootstrap.php';
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>INTRANET UDTP</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/estilos.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel='shortcut icon' href='img/udtp_2.png'>
</head>
<body>
    
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="navbar-header">
	
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-principal">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
            
	</div>	
	  
	<div class="container-fluid collapse navbar-collapse" id="menu-principal">
            <h4 class="navbar-text"><a href="index.php"><span class="glyphicon glyphicon-home"></span></a> <b>UDTP - Unidade Dispensadora Tenente Pena</b></h4>
            <h5 class="navbar-right navbar-text"><span class="estiloniver"> <?php echo (date('d-m-Y')); ?> | <span id="timer"></span></span></h5><span class="navbar-right navbar-text"></span>		            
	</div>	
</nav>
<nav class="navbar"></nav>
