<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to school portal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="login.php">
<link rel="stylesheet" href="index.php">
</head>
<body background="pics/fc.jpg" class="body_deg">
<div class="container min-vh-100 d-flex justify-content-center align-items-center ">
<form class="w-45 ms-4"  action="check.php"  method="POST" >
    <h3 class="text-center mb-3 bg-info">Login Form</h3>
    <h4>
        <?php
        error_reporting(0);
        session_start();
        session_destroy();

        echo $_SESSION['loginMessage'];

        ?>
    </h4>
  <!-- Email input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form1Example1">Username</label>
    <input type="name" name="username" id="form1Example1" class="form-control" />
    
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form1Example2">Password</label>
    <input type="password" name="password" id="form1Example2" class="form-control" />
    
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-info btn-block ms-5">Login</button>
</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>