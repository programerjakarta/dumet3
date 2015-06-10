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
		.col-xs-4{
			padding-top: 15px;
		}
		.well{
			width: auto !important;
			height:auto !important;
		}
		button {
			cursor: move;
		}
		</style>
	</head>
	<body>
		<h1 class="text-center">ProgramerJakarta</h1>
		<div class="container">
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			<button type="button" class="btn btn-primary">Drag Me</button>
		</div>
		<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
			<div class="panel panel-primary">
				  <div class="panel-heading">
						<h3 class="panel-title">Droppable</h3>
				  </div>
				  <div class="panel-body">
						Drop here...
				  </div>
				  <div class="panel-footer">
						Drag and Drop
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
			$( "#draggable" ).draggable({
			});
		});
		</script>
	</body>
</html>