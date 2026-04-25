<?php 
include('db.php');

// 1. URL se ID pakadne ka logic
if(isset($_GET['id'])){
    $id = $_GET['id'];

    // 2. Database se specific user ka data nikalna
    $query = "SELECT * FROM registerdata WHERE reg_id = '$id'";
    $res = mysqli_query($conn, $query);
    
    // 3. Data ko $row variable mein dalna
    $row = mysqli_fetch_assoc($res);

    // Agar ID galat ho ya data na mile
    if(!$row){
        die("Record not found!");
    }
} else {
    die("No ID provided!");
}
?>

<!doctype html>
<html lang="en">
<head>
    <title>Update Student</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.php">StudentPortal</a>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="fetchregister.php">studentdata</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mt-5">
        <h1 class="text-center">Update Student Form</h1>
     
        <form action="updatedb.php" method="POST">
            <div class="mb-5 m-5 border border-dark p-5">
                
                <input type="hidden" name="id" value="<?php echo $row['reg_id']; ?>">

                <div class="mb-3">
                    <label class="form-label">Enter your name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $row['reg_name']; ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Enter your email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $row['reg_email']; ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Enter your Password</label>
                    <input type="text" class="form-control" name="password" value="<?php echo $row['reg_pass']; ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Enter your address</label>
                    <input type="text" class="form-control" name="address" value="<?php echo $row['reg_address']; ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Enter your Phone</label>
                    <input type="tel" class="form-control" name="phone" value="<?php echo $row['reg_phone']; ?>">
                </div>

                <button type="submit" name="update_btn" class="btn btn-primary mt-4">Update Data</button>
                <a href="fetchregister.php" class="btn btn-secondary mt-4">Cancel</a>
            </div>
        </form>
    </main>

    <script src="https://jsdelivr.net"></script>
</body>
</html>
