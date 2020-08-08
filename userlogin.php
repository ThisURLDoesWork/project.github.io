<?php
if(isset($_POST['username'])){ $username = $_POST['username']; }
if(isset($_POST['password'])){ $password = $_POST['password']; }

$conn=new mysqli('localhost','root','','test');

if(!$conn){
	die('Connection failed:'.mysqli_connect_error);
	}
  else{
  $stmt=$conn->prepare("insert into hellouser (username, password) values(?,?)");
  $stmt->bind_param("ss",$username,$password);
  $stmt->execute();
  echo '<a href="https://n00bmaster69-07.github.io/">Click to enter homepage</a>';
}
?>
