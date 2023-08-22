<?php
session_start();
$conn=mysqli_connect('127.0.0.2:3307' ,'root', ' ' , 'authentication');
if ($conn)
 {
	echo "connection sucessfully";
}
else{
	echo " connection failed";
}
?>