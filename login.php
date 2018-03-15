<?php
	

  require_once 'config.php';
 

 $email = $_POST['email'];
 $password = $_POST['password'];
 
 
 
 $query= "SELECT email,password FROM zalego_db WHERE email='".$email."' and password='".$password."'";

 $result=mysqli_query($link,$query);

 
 //$fetch = mysqli_fetch_array($result);
  $row = mysqli_num_rows($result);
 
 if($row>0){

 echo "success";
 }else{
 echo "Invalid Username or Password";
 }
 




