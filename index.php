<!--rassemble avec php les diff parties du site-->


<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Projet 5</title>
	<!--bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<!-- mediaqueries -->
	<link rel="stylesheet" type="text/css" href="public/css/mediaqueries.css">
	<!--viewport-->
	<meta name="viewport" content="initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="#" />
</head>

<body>

	<?php 
	require_once("view/header.php"); 
	require_once("view/cover.php");
	require_once("view/mainVideo.php");
	require_once("view/videos.php");
	require_once("view/footer.php");
	?>







<!-- jQuery -->
<script src="public/js/jquery-3.4.1.js"></script>
<!--javascript links-->

<!-- fontawesome -->
<script src="https://kit.fontawesome.com/7e70710549.js"></script>
<!--bootstrap-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>




