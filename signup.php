<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	include 'connection.php';
	if(isset($_POST['signup'])){
$username=$_POST['username'];
$password=md5($_POST['password']);
$conpassword=md5($_POST['conpassword']);

// $sql="insert into validation (username,password) values('$username','$password')";
// $result=mysqli_query($conn,$sql);
// if($result){
// 	echo "data insert sucessflly";`
// }
// else{
// 	die(mysqli_error($conn));
	
// }
$sql="select * from validation where username='$username'";
$result=mysqli_query($conn,$sql);
if($result){
	$num=mysqli_num_rows($result);
	if($num>0){
		echo "user alredy exist";
	}
	else{
		if($password==$conpassword){
			$sql="insert into validation (username,password) values('$username','$password')";
		    $result=mysqli_query($conn,$sql);

		    if($result){

			    echo "signup sucessfull";
			}}
			else{
				echo "password did not matched";

		}
			die(mysqli_error($conn));
	}


	}
}
}
?>
