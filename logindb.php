<?php
session_start();
include('db.php');

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM registerdata 
              WHERE reg_email = '$email' AND reg_pass = '$password'";

    $res = mysqli_query($conn , $query);

    if(!$res){
        die("Query failed: " . mysqli_error($conn));
    } else {
        if(mysqli_num_rows($res) > 0){

          $_SESSION['email'] = $email;
            header("Location: index.php");
            exit();

        } else {
            echo "Invalid Email or Password ❌";
        }
    }
}
?>