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
		.panel-body{
			min-height: 300px;
			background-color: #95D1D4;
		}
		.panel-body h1{
			line-height: 300px;text-align: center;
		}
		#items {
			font-size: 72px;
		}
		button{
			z-index: 999;
			margin-bottom: 5px !important;
		}
		.kuning{
			background-color: #FFEF47 !important;
		}
		.kuning2{
			background-color: #FFA845 !important;
		}
		</style>
	</head>
	<body>
		<h1 class="text-center">ProgramerJakarta</h1>
		<div class="container">
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
				<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to chart</button>
				<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to chart</button>
				<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to chart</button>
			</div>
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
				<div class="panel panel-primary">
					  <div class="panel-body">
							<h1>Drop Here...</h1>
					  </div>
				</div>
			</div>
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
				<h1 id="items"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span><span id="total">0</span></h1>
			</div>
		</div>
		
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
		<script type="text/javascript">
		jQuery(document).ready(function($) {
			var counter = $("#items").text(); // untuk mangambil nilai awal
			// alert(counter);
			$("button").draggable({
				"cancel":"true", 
				"revert" : "invalid", //untuk mengembalikan button jika tidak di drag ke tempat yang ditentukan
				"activeClass" : "kuning",
				"helper" : "clone"
			});
			$(".panel-body").droppable({
				"activeClass" : "kuning2",
				"accept" : "button",
				"connectToSortable" : "button",
				drop: function(){
					counter++; //untuk menambah nilai awal
					$(this).addClass('kuning2');
					$("#total").text(counter);
					$(this).find('h1').remove();
					// $(ui.draggable).appendTo(this);
				}
			});
		});
		</script>
	</body>
</html>