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

$sql="SELECT * FROM course";

$result=mysqli_query($data,$sql);


if($_GET['course_id'])
{
    $c_id=$_GET['course_id'];

    $sql2="DELETE FROM course WHERE id='$c_id' ";

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
    <h1>View All Courses</h1>

    <table class="table ">
  
    <tr>
    
      <th class="table_th p-5">Name</th>
      <th class="table_th p-5">About Course</th>
      <th class="table_th p-5">Hour</th>
      <th class="table_th p-5 me-5">Delete</th>
      <th class="table_th p-5 me-5">Update</th>
      
    </tr>

  <?php


while($info=$result->fetch_assoc())
{
?>
 
    <tr>
      <td class="table_td p-5 "><?php  echo"{$info['name']}"   ?></td>
      <td class="table_td p-5 w-25 "><?php  echo"{$info['description']}"   ?></td>
      <td class="table_td p-5"> <?php  echo"{$info['credit']}"   ?> </td>

      <td class="table_td p-5 ">
        <?php

       echo"
      <a onClick=\"javascript:return confirm('Are you Sure To Delete This');\" class='btn btn-danger' href='admin_view_course.php?course_id={$info['id']} '>
      
      Delete
      
      </a>";
      ?>
      
    </td>

    <td class="table_td p-5 ">
        <?php
        echo "
        
        <a class='btn btn-success' href='admin_update_course.php?course_id={$info['id']}'>Update</a>";
        ?>
    </td>
    </tr>

    <?php

}
?>
   

</table>

</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>