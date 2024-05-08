<?php
include 'connect.php';
if(isset($_POST['signUp'])){
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);
    // check if the table exist 
    $checkEmail="SELECT  * From user where email ='$email'";
    $result=$conn->query($checkEmail);
    if($result->num_rows >0){
        echo"Email address already exists!";
    }
    // insert insto user table 
    else{
        $insertQuery="INSERT INtO user(firstname ,	lastname,email,password);
    }
}
?>