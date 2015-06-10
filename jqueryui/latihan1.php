<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>dumet3</title>
		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style type="text/css">
		.container{
			margin-top: 30px;
		}
		.connect{
			background:#FF6060;
		}
		.connect2 {
			background: #FCEA40;
		}
		.col-xs-2{
			padding-top: 15px;
		}
		</style>
	</head>
	<body>
		<h1 class="text-center">Hello World</h1>
		<div class="container">
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
			</div>
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 connect sortable1" >
				<div class="well">1. Lorem ipsum</div>
				<div class="well">2. Lorem ipsum</div>
				<div class="well">3. Lorem ipsum</div>
			</div>
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
			</div>
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 connect2 sortable2" >
				<div class="well">4. Lorem ipsum</div>
				<div class="well">5. Lorem ipsum</div>
				<div class="well">6. Lorem ipsum</div>
			</div>
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
			</div>
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 connect2 sortable2" >
				<div class="well">7. Lorem ipsum</div>
				<div class="well">8. Lorem ipsum</div>
				<div class="well">9. Lorem ipsum</div>
			</div>
		</div>
		<div class="container">
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
			</div>
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 connect sortable1" >
				<div class="well">1. Lorem ipsum</div>
				<div class="well">2. Lorem ipsum</div>
				<div class="well">3. Lorem ipsum</div>
			</div>
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
			</div>
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 connect2 sortable2" >
				<div class="well">4. Lorem ipsum</div>
				<div class="well">5. Lorem ipsum</div>
				<div class="well">6. Lorem ipsum</div>
			</div>
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
			</div>
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 connect2 sortable2" >
				<div class="well">7. Lorem ipsum</div>
				<div class="well">8. Lorem ipsum</div>
				<div class="well">9. Lorem ipsum</div>
			</div>
		</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
		<script type="text/javascript">
		jQuery(document).ready(function($) {
			/**
			 * Menghubungkan div dengan class sortable ke wadah div dengan class connect
			 */
			$( ".sortable1" ).sortable({
				"connectWith":".connect"
			});
			/**
			 * Menghubungkan div dengan class sortable2 ke wadah div dengan class connect2
			 */
			$( ".sortable2" ).sortable({
				"connectWith":".connect2"
			});
		});
		</script>
	</body>
</html>