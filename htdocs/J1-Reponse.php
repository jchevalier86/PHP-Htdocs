<!doctype html>
<html>
   <head>
      <meta charset="utf-8" />
      <title>Reponse</title>
	  <link rel="stylesheet" type="text/css" href="main.css" />
   </head>
   <body>
		<div id="page-container">
			<div id="content-wrap">
				<h1>Bonjour, <?php echo $_GET['nom'] ?></h1>
				<h2>Vous semblez avoir <?php echo $_GET['age'] ?> ans</h2>
				<?php
					$n = $_GET['nom'];
					$a = $_GET['age'];
				?>
				Votre nom est stocké dans la variable $n dont le type est <i><?php echo gettype($n) ?></i><br>
				Votre âge est stocké dans la variable <b>$a</b> dont le type est <i><?php echo gettype($a); ?></i><br>
				On peut la transformer en <i>integer</i> en faisant :
				<?php settype($a,"integer"); ?>settype($a,"integer");
				<br/>
				Type de $a :<?php echo gettype($a); ?>
			</div>
			<div id="footer">
				<a href="index.php">Retour</a>
			</div>
		</div>
   </body>
</html>