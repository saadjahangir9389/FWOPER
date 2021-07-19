<?php 
	include_once("database-config.php");
	session_start();

	$username = "";
	$password = "";
	
	if(isset($_POST['username'])){
		$username = $_POST['username'];
	}
	if (isset($_POST['password'])) {
		$password = $_POST['password'];
	}
	
	echo $username ." : ".$password;

	$q = 'SELECT * FROM users WHERE username=:username AND password=:password';

	$query = $dbh->prepare($q);

	$query->execute(array(':username' => $username, ':password' => $password));


	if($query->rowCount() == 0){
		header('Location: index.php?err=1');
	}else{

		$row = $query->fetch(PDO::FETCH_ASSOC);

		session_regenerate_id();
		$_SESSION['sess_user_id'] = $row['id'];
		$_SESSION['sess_username'] = $row['username'];
        $_SESSION['sess_userrole'] = $row['role'];

        echo $_SESSION['sess_userrole'];
		session_write_close();

		if( $_SESSION['sess_userrole'] == "0"){
			header('Location: IOPART.php');
			// header('Location: adminhome.php');
		}elseif($_SESSION['sess_userrole'] == "1"){
			// header('Location: jd.php');
			header('Location: testapprove.php');
		}elseif($_SESSION['sess_userrole'] == "2"){
			header('Location: part3.php');
		}elseif($_SESSION['sess_userrole'] == "3"){
			header('Location: part4.php');
		}else{
			header('Location: part5.php');
		}
	}


?>