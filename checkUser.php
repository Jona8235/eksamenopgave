<?php 
$formUsername = $_POST['formUsername'];
$formPassword = $_POST['formPassword'];

require_once "connect.php";

$statement = $DBH->prepare("SELECT * FROM user WHERE dbUsername=?");
$statement->bindParam(1, $formUsername);
$statement->execute();

$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

if(empty($rows)){
	echo "Kan ikke finde bruger!";
	header( "Refresh :3; url=index.php");

}else {
	foreach ($rows as $row){
		if($row['dbPassword'] == $formPassword){
			echo "succes";
			session_start();
			$_SESSION['username'] = $formUsername;
			 
			header("location: index.php");
		}
		# code...

	}
	echo "Ikke korrekt password!";
	header("Refresh:3, url=index.php");
}
$DBH = null;

?>