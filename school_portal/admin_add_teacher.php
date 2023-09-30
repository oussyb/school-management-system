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

$data= mysqli_connect($host,$user,$password,$db);

if(isset($_POST['add_teacher']))
{
    $t_name=$_POST['name'];
    $t_description=$_POST['description'];
    $file=$_FILES['image']['name'];
    $dst="./image/".$file;
    $dst_db="image/".$file;

    move_uploaded_file($_FILES['image']['tmp_name'], $dst);

    $sql="INSERT INTO teacher(name,description,image) VALUES('$t_name','$t_description','$dst_db')";

    $result=mysqli_query($data,$sql);

    if($result)
    {
        header('location:admin_add_teacher.php');
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
    <link rel="stylesheet" href="admin_view_teacher.php">
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
    <h1>Add Teacher</h1>

    <div>
    <form class="w-25 ms-5" action="#" method="POST" enctype="multipart/form-data">
  <!-- teacher name input -->
  <div class="form-outline mb-2">
    <label class="form-label" for="form4Example1">Teacher name</label>
    <input type="text" name="name" id="form4Example1" class="form-control" />
    
  </div>

  <!-- description  input -->
  <div class="form-outline mb-2">
    <label class="form-label" for="form4Example2">Descrption</label>
    <textarea class="form-control"  name="description" id="form4Example3" rows="4"></textarea>
    
  </div>


  <!-- image input -->
  <div class="form-outline mb-2">
    <label class="form-label" for="form4Example2">image</label>
    <input type="file" name="image" id="form4Example2" class="form-control" />
    
  </div>



 

  <!-- Submit button -->
  <button type="submit" name="add_teacher" value="Add teacher" class="btn btn-primary btn-block mb-4">Add Teacher</button>
</form>
    </div>

</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>