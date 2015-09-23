<!DOCTYPE html>
<html>
  <head>
  	<meta charset="utf-8">
    <title>Espace Gestion - QCM VISEO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="../css/admin.css" rel="stylesheet" media="screen">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

  </head>
  <body>
  	<header>
  	<nav class="navbar navbar-default">


  		<div class="navbar-inverse">

		    <div class="container">
		 
		    	<!-- Brand and toggle get grouped for better mobile display -->
		    	<div class="navbar-header">
		    		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		    			<span class="sr-only">Toggle navigation</span>
		    			<span class="icon-bar"></span>
		    			<span class="icon-bar"></span>
		    			<span class="icon-bar"></span>
		    		</button>
		    		<!-- Be sure to leave the navbar-brand out there if you want it shown -->
		      		<a class="navbar-brand" href="index.php" id="logo">VISEO</a>
		    	</div>
		 
		      <!-- Everything you want hidden at 940px or less, place within here -->
		      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"><!-- .nav, .navbar-search, .navbar-form, etc -->


		      <ul class="nav pull-right">
		      	<li><a href="index.php">Accueil</a></li>
		      	<li class="dropdown">
		      		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-pencil-square-o"></i>&nbsp;Gestion</a>
					<ul class="dropdown-menu">
						<li><a href="questions.php">Questions</a></li>
						<li><a href="reponses.php">Réponses</a></li>
						<li><a href="categories.php">Catégories</a></li>
						<?php if($_SESSION['group'] == 'admin') : ?><li><a href="admin.php">Administrateurs</a></li><?php endif; ?>
					</ul>
		      	</li>
		      	<li class="dropdown">
		      		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-plus-circle"></i>&nbsp;Ajouter</a>
					<ul class="dropdown-menu">
						<li><a href="add_question.php">Questions</a></li>
						<li><a href="add_reponse.php">Réponses</a></li>						
						<li><a href="add_category.php">Catégories</a></li>						
					</ul>
		      	</li>
		      	<?php if ( isset($_SESSION['id']) ) : ?><li><a href="deconnect.php"><i class="fa fa-power-off"></i>&nbsp;Se deconnecter</a></li><?php endif; ?>
		      </ul>
		 
		      
		      </div><!-- /.navbar-collapse -->
		 
		    </div><!-- /.container -->

		</div>

	</nav>
  	</header>
	

	    