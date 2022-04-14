<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Evenements</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse " >
			<div class="navbar navbar-default">
				<!-- Button for smallest screens -->
				<a class="navbar-brand" href="index.html"><img src="" alt="ProEvent"></a>
			</div>

			<div class="navbar navbar-expand-sn" > <!--changer-->
				<ul class="navbar-brand ">
					<li class="nav-item">
						
				<?php
				 if(isset($_SESSION['connect'])==true)
				 {
					 echo $_SESSION['nom'];

					 if ($_SESSION['role']==1)
					 {
						  echo "<a href=index.php?ctl=evenements&action=formAjoutEvent>Ajouter evenements</a>";
					 
					 }
					      echo "<a href=index.php?ctl=evenements&action=listerEvent>Les evenements</a>";
					 
				 }
				?>
				
					</a></li>

				<?php
				 if (isset($_SESSION['connect'])==true)
				 
						{
							echo "<li class='active'><a class='btn' href='index.php?ctl=connect&action=deconnect'>Deconnecter</a></li>";
								
						}
				?>
		
				</ul>
				
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>