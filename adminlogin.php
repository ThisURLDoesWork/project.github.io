<?php

if(isset($_POST['Admin'])){ $Admin = $_POST['Admin']; }
if(isset($_POST['password'])){ $password = $_POST['password']; }

$conn=new mysqli('localhost','root','','test');

if(!$conn){
	die('Connection failed:'.mysqli_connect_error);
	}
  else{
  $stmt=$conn->prepare("insert into hello(Admin, password) values(?,?)");
  $stmt->bind_param("ss",$Admin,$password);
  $stmt->execute();
  echo '<a href="https://parth10323.github.io/ServiceProvider/#recent-users">Click to enter admin homepage</a>';
}
?>
