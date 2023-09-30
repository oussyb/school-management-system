<?php

session_start();
if(!isset($_SESSION['username']))
{
    header("location:login.php");
}

else if($_SESSION['usertype']=='student')
{
    header("location:login.php");
}



$host="localhost";
$user="root";
$password="";
$db="schoolportal";

$data=mysqli_connect($host,$user,$password,$db);

$id=$_GET['student_id'];

$sql="SELECT * FROM users WHERE id='$id' ";

$result=mysqli_query($data,$sql);

$info=$result->fetch_assoc();



if(isset($_POST['update']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];

    $query="UPDATE users SET username='$name', email='$email', phone='$phone', password='$password' WHERE id='$id' ";

    $result2=mysqli_query($data,$query);

    if($result2)
    {
        header("location:view_student.php");
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="admission.php">
    <link rel="stylesheet" href="add_student.php">
    <link rel="stylesheet" href="view_student.php">
    <link rel="stylesheet" href="admin_add_teacher.php">
    <link rel="stylesheet" href="admin_add_course.php">
    <link rel="stylesheet" href="admin_view_course.php">
    

  
    <link rel="stylesheet" href="adminn.css">
   
    <title>Admin Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>


<header class="header">
    <a href="" class="">Admin Dashboard</a>

    <div class="logout">
        <a href="login.php" class="btn btn-primary">Logout</a>
    </div>
</header>

<Aside class=" ">
<ul class="h-100 nav flex-column bg-info  w-25 text-center pt-4">

  <li class="nav-item mb-4">
    <a class="nav-link text-white fw-bold" href="admission.php">Admission</a>
  </li>
  <li class="nav-item mb-4">
    <a class="nav-link text-white fw-bold" href="add_student.php">Add Student</a>
  </li>
  <li class="nav-item mb-4">
    <a class="nav-link text-white fw-bold" href="view_student.php">View Student</a>
  </li>
  <li class="nav-item mb-4">
    <a class="nav-link text-white fw-bold" href="admin_add_teacher.php">Add Teacher</a>
  </li>
  <li class="nav-item mb-4">
    <a class="nav-link text-white fw-bold" href="admin_view_teacher.php">View Teacher</a>
  </li>
  <li class="nav-item mb-4">
    <a class="nav-link text-white fw-bold" href="admin_add_course.php">Add Courses</a>
  </li>
  <li class="nav-item mb-4">
    <a class="nav-link text-white fw-bold" href="admin_view_course.php">View Courses</a>
  </li>
  
</ul>
</Aside>

<!--down admin-->
<div class="content">
    <h1>Update Student</h1>

    <div>
    <form class="w-25 ms-5" action="#" method="POST">
  <!-- Name input -->
  <div class="form-outline mb-2">
    <label class="form-label" for="form4Example1">Username</label>
    <input type="text" name="name" id="form4Example1" class="form-control" value="<?php echo "{$info['username']}"  ?>" />
    
  </div>

  <!-- Email input -->
  <div class="form-outline mb-2">
    <label class="form-label" for="form4Example2">Email</label>
    <input type="email" name="email" id="form4Example2" class="form-control" value="<?php echo "{$info['email']}"  ?>"/>
    
  </div>


  <!-- phone input -->
  <div class="form-outline mb-2">
    <label class="form-label" for="form4Example2">Phone</label>
    <input type="number" name="phone" id="form4Example2" class="form-control" value="<?php echo "{$info['phone']}"  ?>" />
    
  </div>

  <!-- password input -->
  <div class="form-outline mb-2">
    <label class="form-label" for="form4Example2">Password</label>
    <input type="text" name="password" id="form4Example2" class="form-control" value="<?php echo "{$info['password']}"  ?>"/>
    
  </div>


 

  <!-- update button -->
  <button type="update" name="update" value="update" class="btn btn-success btn-block mb-4">Update</button>
</form>
</div>

</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>