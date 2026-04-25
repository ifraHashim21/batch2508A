<?php

include('db.php');

  $id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];
$phone = $_POST['phone'];



 $query = "UPDATE registerdata SET reg_id='$id',reg_name='$name',reg_email='$email',reg_pass='$password',reg_address='$address',reg_phone='$phone' WHERE reg_id = '$id'";



mysqli_query($conn,$query);

header("Location:fetchregister.php")

?>