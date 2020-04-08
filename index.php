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
	require_once("view/slider.php");
	?>






<!-- jQuery -->
<script src="public/js/jquery-3.4.1.js"></script>
<!--javascript links-->
<!--slider-->
<script src="public/js/Slider.js"></script>
<script type="text/javascript">

	//SLIDER
var slides = document.getElementsByClassName("sliderImg");
var slider = new Slider(slides);
slider.change();


//chevrons
if ($("#chevronRight").click(function(){
	slider.plusRight(slider.slides);
	console.log("chevronRight Ok!");
}));

if ($("#chevronLeft").click(function(){
	slider.plusLeft();
	console.log("chevronLeft Ok!");

}));

//clavier
document.addEventListener("keydown", function(event) {
	if (event.which===39){
		slider.plusRight(slider.slides);
		console.log("FlècheLeft Ok!");
	}

	if (event.which===37){
		slider.plusLeft();
		console.log("FlècheRight Ok!");
	}

});

//pause & play
if ($("#play").click(function() { 
	//console.log(play);
	play.setAttribute("style", "z-index: 3");
	slider.change();
	console.log("Play Ok!");

}));

	if ($("#pause").click(function(){
		slider.pause();
		play.setAttribute("style", "z-index: 5");
		console.log("Pause Ok!");
	}));

</script>
<!-- fontawesome -->
<script src="https://kit.fontawesome.com/7e70710549.js"></script>
<!--bootstrap-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>




