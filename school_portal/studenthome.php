<?php

session_start();
if(!isset($_SESSION['username']))
{
    header("location:login.php");
}

else if($_SESSION['usertype']=='admin')
{
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="my_student_profile.php">
    <link rel="stylesheet" href="adminn.css">
    
    <title>Student dashboard</title>
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
    
<header class="header">
    <a href="" class="">Student Dashboard</a>

    <div class="logout">
        <a href="login.php" class="btn btn-primary">Logout</a>
    </div>
</header>

<Aside class=" ">
<ul class="nav h-100 flex-column bg-info  w-25 text-center pt-4">
<li class="nav-item mb-4">
    <a class="nav-link text-white fw-bold" href="my_student_profile.php">My profile</a>
  </li>
  <li class="nav-item mb-4">
    <a class="nav-link text-white fw-bold" href="#">My Courses</a>
  </li>
  <li class="nav-item mb-4">
    <a class="nav-link text-white fw-bold" href="#">My Result</a>
  </li>
 
</ul>
</Aside>

<!--down admin-->
<div class="contentq">
    <h1>Accordion</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam at quasidoloribus maxime?</p>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>