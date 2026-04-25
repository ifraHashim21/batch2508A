<?php
include('db.php');

 $id = $_GET['id'];


 $query = "DELETE FROM registerdata WHERE reg_id = $id";



mysqli_query($conn,$query);

header("Location: fetchregister.php");

?>