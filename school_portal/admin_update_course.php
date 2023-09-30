<?php

session_start();
error_reporting(0);
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

if($_GET['course_id'])
{

$c_id=$_GET['course_id'];

$sql="SELECT * FROM course WHERE id='$c_id' ";

$result=mysqli_query($data,$sql);

$info=$result->fetch_assoc();

}

if(isset($_POST['update_course']))
{
    $id=$_POST['id'];

    $c_name=$_POST['name'];

    $c_des=$_POST['description'];

    $c_credit=$_POST['credit'];

    

    if($file){
        $sql2="UPDATE course SET name='$c_name', description='$c_des', credit='$c_credit' WHERE id='$id' ";


    }

    else{
        $sql2="UPDATE course SET name='$c_name', description='$c_des', credit='$c_credit' WHERE id='$id' ";

    }

    
    $result2=mysqli_query($data,$sql2);

    if($result2){
        header('location:admin_view_course.php');
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
    <h1>Update Course</h1>

    
    <div>
    <form class="w-25 ms-5" action="#" method="POST" enctype="multipart/form-data">
  
    <input type="text" name="id" value="<?php echo"{$info['id']}"   ?>" hidden>
    <!-- course name input -->
  <div class="form-outline mb-2">
    <label class="form-label" for="form4Example1">Course Name</label>
    <input type="text" name="name" value="<?php echo"{$info['name']}"   ?>" id="form4Example1" class="form-control" />
    
  </div>

  <!-- description  input -->
  <div class="form-outline mb-2">
    <label class="form-label" for="form4Example2">About course</label>
    <textarea class="form-control"  name="description"  id="form4Example3" rows="4"><?php echo"{$info['description']}" ?></textarea>
    
  </div>

 <!-- credit  input -->
 <div class="form-outline mb-2">
    <label class="form-label" for="form4Example2">Hour</label>
    <textarea class="form-control"  name="credit"  id="form4Example3" rows="4"><?php echo"{$info['credit']}" ?></textarea>
    
  </div>


  <!-- Submit button -->
  <button type="submit" name="update_course" value="update_course" class="btn btn-success btn-block mb-4">Update</button>
</form>
    </div>

</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>