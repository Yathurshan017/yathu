

<?php

$db_host ="localhost";
$db_user ="root";
$db_password ="";
$db_name="demo";


$con =mysqli_connect($db_host,$db_user,$db_password,$db_name) or die ();

// check connection if database is connected or not


if (mysqli_connect_error())
{
	exit ('failed to connect to MySQL:'mysqli_connect_error());
	
}
 // check any variable empty or not
 if (!isset($_POST['UserName']),$_POST['E-mail'],$_POST['Phone'],$_POST['Subject']),$_POST['Message']){
	 
	 exit(''Empty Field(s));
 }
 if(empty($_POST['UserName'] || empty($_POST['E-mail')|| empty($_POST['Phone'])|| empty($_POST['Subject'])||empty($_POST['Message']) ) ) {
	 exit ('value is empty');
 }
    if($stmt =$conn->prepare('SELECT * FROM users WHERE UserName = ?')){
		$stmt ->bind_param('s',$_POST['UserName']);
		$stmt ->execute();
		$stmt ->store_results();

		if($stmt ->num_rows >0){
			echo 'UserName is already in use Try a different one';
		}

		else {
			if($stmt =$con ->prepare('INSERT INTO users (UserName,E-mail,Phone,Subject,Message) VALUES (?,?,?,?,?)')){
				$stmt->bind_param('sssss',$POST['UserName',$POST['E-mail']),$POST['Phone'],$POST['Subject'],$POST['Message'];
				$Stmt ->execute();

				$stmt ->store_result();
				echo 'Successfully registered';
			}
			else {
				echo 'Error Occurred';
			}
		}
		$stmt ->close();
	} else {
		echo 'Error Occurred';
	}
 $con ->close();
?>
