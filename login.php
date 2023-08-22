<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	include 'connection.php';
	if(isset($_POST['login.php'])){
		$username=$_POST['username'];
        $password=ms5($_POST['password']);

        $sql="select * from validation where username='$username' and password='$password'";
        $result=mysqli_query($conn,$sql);
        if($result){
        	$num=mysqli_num_rows($result);
        	if($num>0){
        		echo "login sucessfully";
        	}
        	else{
        		echo "invalid credential";
        	}
        }
	}
}



?>