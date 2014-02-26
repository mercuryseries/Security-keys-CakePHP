<?php 
/*
	LES TEACHERS DU NET
	Created by Honoré Hounwanou
	@ www.youtube.com/hounwanou1993
	@ www.facebook.com/honore.hounwanou
	All rights reserved
	* Date: September 06, 2013
*------------------------------------------------------------------------------------------------*/

	require("includes/functions.php"); //Include the keys generator function (the only function in this file --> I'm lazy)
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Generating security keys for CakePHP framework</title>
		<link rel="stylesheet" href="./assets/css/style.css" />
		<meta charset="UTF-8" />
	</head>
	<body>
		<div class="container">
			<h1>Generating security keys for CakePHP framework <a href="."><img src="./assets/img/fleche.png" alt="Flèche" width="50"/></a></h1>
			<hr/>
			<?php $security_keys = cakephp_keys_generator(); //we generate the keys now :) ?> 
			<div id="content">
				<!-- Display results -->
				<p>Security.salt : <span class="bling"><?php echo $security_keys[0]; ?></span></p>
				<p>Security.cipherSeed : <span class="bling"><?php echo $security_keys[1]; ?></span></p>
			</div>
			<footer>
				<p>&copy; Les TEACHERS DU NET - <small>By Honoré HOUNWANOU</small> </p>
			</footer>
		</div>
	</body>
</html>