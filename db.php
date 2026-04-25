<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentdata";


///createconnection ///


$conn = mysqli_connect($servername , $username , $password , $dbname);

// check //


if(!$conn){
    echo("connnection failed:".mysqli_connect_error());
}
else{
    echo "connection successfully";
}


/// record insert database feedback ///
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $addres = $_POST['address'];
    $descrp = $_POST['description'];


 $query =  "insert into student(name , email , password , address, description)
 values('$name' , '$email' , '$password' , '$addres' , '$descrp')";



 $res = mysqli_query($conn,$query);


 if($res){
    echo "data inserted scccessfully";
 }

 else{
    echo "data is not inserted";
 }











}







?>