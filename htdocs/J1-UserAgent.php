<!doctype html>
<html>
   <head>
      <meta charset="utf-8" />
      <title>UserAgent</title>
	  <link rel="stylesheet" type="text/css" href="main.css" />
   </head>
   <body>
		<div id="page-container">
			<div id="content-wrap">
				Les informations sur le Navigateur sont :
				<?php
					echo $_SERVER['HTTP_USER_AGENT'];
				?>
			</div>
			<div id="footer">
				<a href="J1-Imbrication.php">Suite</a>
			</div>
		</div>
   </body>
</html>