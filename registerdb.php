<?php


@include('db.php');


if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $addres = $_POST['address'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO registerdata(reg_name, reg_email, reg_pass, reg_address, reg_phone) VALUES ('$name' , '$email' , '$password' , 
    '$addres' ,'$phone')";

    $res = mysqli_query($conn , $query);

    if($res){
        echo "user register successfuly";
        header("location:./login.php");
    }
    else{
        echo "user not register";
    }
}



?>