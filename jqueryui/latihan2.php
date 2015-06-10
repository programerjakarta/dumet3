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
		.well{
			width: auto !important;
			height:auto !important;
		}
		img {
			z-index: 999;
			width: 100px;
			height: 100px;
			float: left;
		}
		.panel-body{
			height: 200px;;
		}
		.kuning{
			background-color: #99E1D9;
		}
		.ungu{
			background-color: #F34CD5;
		}
		</style>
	</head>
	<body>
		<h1 class="text-center">ProgramerJakarta</h1>
		<div class="container">
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				<img id="apple" src="apple.jpeg" class="img-responsive" alt="Image">
				<img id="lg" src="lg.jpeg" class="img-responsive" alt="Image">
				<img id="sony" src="sony.png" class="img-responsive" alt="Image">
				<img id="samsung" src="samsung.png" class="img-responsive" alt="Image">
			</div>
			<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">Apple</h3>
						</div>
						<div class="panel-body" id="droppable_apple">
							
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title" >LG</h3>
						</div>
						<div class="panel-body" id="droppable_lg">
							
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">Samsung</h3>
						</div>
						<div class="panel-body" id="droppable_samsung">
							
						</div>
					</div>
				</div>
				
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">Sony</h3>
						</div>
						<div class="panel-body" id="droppable_sony">
							
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
		<script type="text/javascript">
		jQuery(document).ready(function($) {
			$( ".img-responsive" ).draggable({
				"revert" :"invalid"
			});
			$( "#droppable_apple" ).droppable({
				activeClass:"kuning",
				accept : "#apple",
				drop: function(){
					$(this).html("<strong>Good Job!</strong>").css('color', 'white').addClass('ungu');
				}
			});
			$( "#droppable_lg" ).droppable({
				activeClass:"kuning",
				accept : "#lg",
				drop: function(){
					$(this).html("<strong>Good Job!</strong>").css('color', 'white').addClass('ungu');
				}
			});
			$( "#droppable_sony" ).droppable({
				activeClass:"kuning",
				accept : "#sony",
				drop: function(){
					$(this).html("<strong>Good Job!</strong>").css('color', 'white').addClass('ungu');
				}
			});
			$( "#droppable_samsung" ).droppable({
				activeClass:"kuning",
				accept : "#samsung",
				drop: function(){
					$(this).html("<strong>Good Job!</strong>").css('color', 'white').addClass('ungu');
				}
			});
		});
		</script>
	</body>
</html>