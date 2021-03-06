<!DOCTYPE html>
<html lang="en">
<head>
	<!--Meta tags -->
	<meta name="description" content="Kom ind og se de mange islanske heste!">
	<meta name="keywords" content="Heste,DK,island,">
  	<meta name="author" content="Jonas Nielsen">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<title>Islændere í DK</title>

 <!--Google fonts-->

 <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
 


 <!--CSS-->
 <link rel="stylesheet" href="stylesheet.css">
 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
 
</head>
<body>
	<div class="container-fluid">
		<div class="flex-row">
		<h1 class="googlefont  ">Islændere i DK <img src="img/medlem-emblem.png" alt="bliv medlem idag" style="float:right; "></h1>
		
		</div>
		
		<div class="col-md-12" >
			<div class="col-md-12">
			<ul class="nav navbar-nav topnav flex-row " id="myTopnav" >
				<li class="toprow-li"><a href="index.php" style="color:#041b87;">Forside</a></li>
				<li class="toprow-li"><a href="#" style="color:#041b87;">Nyheder </a></li>
				<li class="toprow-li"><a href="#" style="color:#041b87;">Sitemap</a></li>
				<li class="toprow-li"><a href="#" style="color:#041b87;">Print</a></li>
				<li class="toprow-li"><a href="#" style="color:#041b87;">Kontakt</a></li>
				

				
    		<li class="icon">
					<a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
				</li>
			</ul>
			</div>
		
		</div>
			<aside class="panel panel-default"  id="Margin">
		<?php 
		if(isset($_SESSION['username']) && !empty($_SESSION['username'])){ ?>
	<div class="loginBox col-md-2">
		<div class="panel panel info">
			<div class="panel-heading">
				<h4>Velkommen!</h4>
			</div>
			<div class="panel-body">
				<h5>
					<?php echo $_SESSION['username'];?>
				</h5>
				<a href="logout.php?logout=true" class="btn btn-default">Log ud</a>
			</div>
		</div>

	</div>
	<?php 



 } else {

 }

 ?>
			<form action="checkUser.php" method="post" >
					<div class="form-group" style="float:right;" >
					<label for="formUsername" >Username </label>
					
					<input type="text" class="form-control" id="username" placeholder="Skriv dit username her" name="formUsername" >
					<div class="form-group">
						<label for="formPassword">Password</label>
						<input type="password" class="form-control" id="password" placeholder="Skriv dit password her" name="formPassword" >
						<div class="form-check">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" id="checkbox">
								Husk mig
							</label><br>
							<input type="submit" class="btn btn-default" id="button" value="Log på">
							<a href="#">Registrer dig her</a>
						</div>

					</div>
					</div>
        		
				</div>

        </div>



        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<script>

			function myFunction() {
				var x = document.getElementById("myTopnav");
				if (x.className === "topnav") {
					x.className += " responsive";
				} else {
					x.className = "topnav";
				}
			}


			</script>
</body>
</html>