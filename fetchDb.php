<?php 
	require_once "connect.php";

	$statement = $DBH->prepare("SELECT * FROM articles");
	$statement->execute();

	while ($row = $statement->fetch(PDO::FETCH_ASSOC)){ ?>
		<article class="container">
		<img src="img/<?php echo $row['imgSrc'] ?>" alt="<?php echo $row['imgAlt'] ?>" class="col-md-12 img-responsive" id="Padding">
		<h1 class="text-center"><?php echo $row['heading'] ?></h1>
		<p class="text-center "><?php echo $row['time'] ?> <br> 6:00</p>
		<p class="text-center " id="Padding"><?php echo $row['articleText'] ?><br></p>
		 <div class="col-md-12"> <?php echo $row['username'] ?><br></div>

	</article>
<?php 
	}
	
	?>