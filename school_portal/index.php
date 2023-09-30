<?php

error_reporting(0);
session_start();
session_destroy();


if($_SESSION['message'])
{
  $message=$_SESSION['message'];
}

echo"<script type='text/javascript'>
alert('$message');

</script>";


$host="localhost";
$user="root";
$password="";
$db="schoolportal";

$data=mysqli_connect($host,$user,$password,$db);

$sql="SELECT * FROM teacher";

$result=mysqli_query($data,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.php">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     <title>School Portal</title>
  </head>
<body>
   
<!--navBAR-->
<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <a class="navbar-brand ms-5" href="#">Serekunda School</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item mx-2">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="#">Admission</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link btn btn-outline-success" href="login.php">Login</a>
        </li>
      </ul>
     
    </div>
  </div>
</nav>

<!---CArousell-->
<div id="carouselExampleTouch" class="carousel slide" data-mdb-touch="false">
 
   
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="pics/aa.jpg" class="d-block w-100" alt="Wild Landscape"/>
  
    </div>
    
    
  </div>
  
</div>

<!--cards-->
<main id="about">
    <div class="about mt-5 mb-5">
      <div class="container">
        <div class="row pt-5">
          <div class="col-md-6 align-items-stretch">
            <img class="img-fluid" src="pics/z.jpg">
          </div>
          <div class="col-md-6">
            <h5 class=" text-dark">Welcome To</h5>
            <h2 class="h2-responsive fw-bold text-start section-heading">Serekunda School</h2>
            <p class="lh-base text-muted">Nusrat Senior Secondary School is one of the many educational institutions run in various African countries.  It is a co-educational institution without any discrimination based on clan, colour, creed, gender, race or nationality and is run under strict rules of discipline and academic performance. <br> <br>

Located in the Kanifing Municipality, Nusrat is one of the leading senior secondary schools in The Gambia. Established in May 1970, the first batch of students started in September 1971 and for well over a quarter-century now, Nusrat has become a household name in academics country wide.
            </p>
          </div>
        </div>
      </div>
    </div>
  </main>


  <!--our teachers-->
  <h2 class="text-center md-4 fw-bold">Our Teachers</h2>
  <div class="card-group d-flex flex-row mt-5">
  <div class="row">
    <?php
    while($info=$result->fetch_assoc())
    {
     ?>

    <div class=" col-md-4">
      <img src="<?php echo "{$info['image']}"  ?>" class="card-img-top" alt="...">
     <h3><?php echo "{$info['name']}"  ?></h3>
     <h5><?php echo "{$info['description']}"  ?></h5>
    


     </div>

      <?php
      }
      ?>



    </div>
    
    
  
   </div>

   <!--
    <div class="card">
      <img src="pics/gg.jpg" class="card-img-top" alt="...">
      <div class="card-body">
         <p class="card-text">Teachers deserve our gratitude and respect. They dedicate their lives to teaching children and guiding them through life.</p>
     
      </div>
    </div>
    <div class="card">
      <img src="pics/gg.jpg" class="card-img-top" alt="...">
      <div class="card-body">
         <p class="card-text">Teachers deserve our gratitude and respect. They dedicate their lives to teaching children and guiding them through life.</p>
     
      </div>
    </div>
    --->
  

<!--course-->
<div class="course">
  <h2 class=" text-center md-4 mt-5 fw-bold">Our Courses</h2>
<div class="row row-cols-1 row-cols-md-3 mt-5">
  <div class="col">
    <div class="card h-50">
      <img src="pics/bs.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Graphics Designing</h5>
        
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-50">
      <img src="pics/cp.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Programming</h5>
    
      </div>
    </div>
  </div>
     <div class="col">
        <div class="card h-50">
           <img src="pics/bm.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Business Management</h5>
    
            </div>
       </div>
     </div>
  </div>
</div>

<!---contact--->
<form class="w-25 ms-5" action="data_check.php" method="POST">
  <h2 class="text-center mt-5">Admission Form</h2>
  <!-- Name input -->
  <div class="form-outline mb-2 mt-4">
    <label class="form-label" for="form4Example1">Name</label>
    <input type="name" name="name" id="form4Example1" class="form-control" />
    
  </div>

  <!-- Email input -->
  <div class="form-outline mb-2">
    <label class="form-label" for="form4Example2">Email address</label>
    <input type="email" name="email" id="form4Example2" class="form-control" />
    
  </div>

   <!-- Phone input -->
   <div class="form-outline mb-2">
    <label class="form-label" for="form4Example2">Phone</label>
    <input type="phone" name="phone" id="form4Example2" class="form-control" />
    
  </div>
  <!-- Message input -->
  <div class="form-outline mb-2">
     <label class="form-label" for="form4Example3">Message</label>
    <textarea class="form-control" name="message" id="form4Example3" rows="4"></textarea>
   
  </div>

  <!-- Submit button -->
  <button type="submit" name="apply" class="btn btn-primary text-center btn-block mb-4">Apply</button>
</form>

<!--footer-->
<footer class="bg-info text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-end me-5 p-3" style="background-color: info">
   All ©Copyright reserved by OussyTech
   
  </div>
  <!-- Copyright -->
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>