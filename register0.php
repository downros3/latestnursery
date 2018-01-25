<?php
/* include db connection file */
include 'dbconn.php';

$conn = Connect();

if(isset($_POST["Submit"]))
{ 	
	/* capture values from HTML form */
	$nur_name = $conn->real_escape_string($_POST['nur_name']);
	$nur_address= $conn->real_escape_string($_POST['nur_address']);
	$nur_post= $conn->real_escape_string($_POST['nur_post']);
	$nur_city= $conn->real_escape_string($_POST['nur_city']);
	$nur_state= $conn->real_escape_string($_POST['nur_state']);
	$nur_phone = $conn->real_escape_string($_POST['nur_phone']);
	$nur_email = $conn->real_escape_string($_POST['nur_email']);
	$nur_web = $conn->real_escape_string($_POST['nur_web']);
	$n_password = $conn->real_escape_string($_POST['n_password']);
	$nur_open = $conn->real_escape_string($_POST['n_password']);
	$nur_close = $conn->real_escape_string($_POST['nur_close']);
	$timex = $conn->real_escape_string($_POST['timex']);
	$timex1 = $conn->real_escape_string($_POST['timex1']);


	/*
	$ic = "SELECT * FROM customer WHERE cust_ic = '".$cust_ic."'";
	$result = mysqli_query($conn, $ic);
	if(mysqli_num_rows($result)>=1)
	{
		echo"ic number already exsited";
	}
		
	else {	
		*/

	/* execute SQL INSERT command */
		$query = "INSERT INTO nursery (nur_name, nur_address, nur_post, nur_city, nur_state, nur_phone, nur_email, nur_web, nur_open, nur_close, timex, timex1, n_password) VALUES ('".$nur_name."', '".$nur_address."', '".$nur_post."', '".$nur_city."', '".$nur_state."', '".$nur_phone."', '".$nur_email."', '".$nur_web."','".$nur_open."', '".$nur_close."', '".$timex."', '".$timex1."','".$n_password."')";
				
		$success = $conn->query($query);

		if(!$success)
		{
			die("Could not enter data: ".$conn->error);

		}

		header("Location: index.php");
	
}


		CloseCon($conn);

?>  