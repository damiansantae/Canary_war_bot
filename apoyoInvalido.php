<?php
include_once 'class_db.php';
?>
<!DOCTYPE HTML>
<html lang="es">
<head>
	<title>REAL Canary War Bot</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CPoppins:400,500" rel="stylesheet">
	<link href="common-css/ionicons.css" rel="stylesheet">	
	<link rel="stylesheet" href="common-css/jquery.classycountdown.css">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#isla").change(function(){
			var aid = $("#isla").val();
			$.ajax({
				url: 'dataMunicipios.php',
				method: 'post',
				data: 'aid='+aid
			}).done(function(municipios){
				console.log(municipios);
				municipios = JSON.parse(municipios);
				$('#municipios').empty();
				municipios.forEach(function(municipios){
					$('#municipios').append('<option value="' + municipios.nombre + '">' + municipios.nombre + '</option>')
				})
			})
		})
	});
</script>
</head>
<body>
	<div class="container-contact100">
	<div class="contact100-map">	
	<div class="main-area center-text" style="background-image:url(images/no-validation-bg.jpg);" >
		<div class="display-table">
			<div class="display-table-cell">	
			<h2 class="desc font-white">¡ERROR! </h2>	
				<p class="desc font-white">Lo sentimos, quizás el correo utilizado ya ha realizado una votación, por favor inténtelo de nuevo más tarde con otro correo.</p>						
                <div id="normal-countdown" data-date="2019/06/11"></div><br>
                <button class="btn btn-danger" id="back-button">
			<i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp Volver
		</button>
			</div>
		</div>
	</div>
		</div>
    </div>
    <script type="text/javascript">
    document.getElementById("back-button").onclick = function () {
        location.href = "index.php";
    };
</script>
	<script src="common-js/jquery-3.1.1.min.js"></script>	
	<script src="common-js/jquery.countdown.min.js"></script>
	<script src="common-js/scripts.js"></script>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
	<script src="js/main.js"></script>	
</body>
</html>