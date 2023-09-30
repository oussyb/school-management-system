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

/****

if(isset($_POST['add_course']))
{

    $c_name=$_POST['name'];
    $c_description=$_POST['description'];
    $c_credit=$_POST['credit'];
    


    $check="SELECT * FROM course WHERE name ='$c_name' ";

    $check_course= mysqli_query($data,$check);


    $row_count1=mysqli_num_rows($check_course);

    if($row_count1>0)
    {
        echo "<script type='text/javascript'> alert('Course Already Exist.Try Another One') ;
        </script>";
    }

    else
    
    {

     $sql="INSERT INTO course(name,description,credit,) VALUES('$c_name','$c_description','$c_credit')";


     $result=mysqli_query($data,$sql);
  
            if($result)
                {
                 echo "<script type='text/javascript'> alert('Successful Upload') ;
                 </script>";
                }
      else
               {
                  echo "fail";
               }
  }

}

 */



if(isset($_POST['add_course']))
{
    $c_name=$_POST['name'];
    $c_description=$_POST['description'];
    $c_credit=$_POST['credit'];
  

   

    $sql="INSERT INTO course(name,description,credit) VALUES('$c_name','$c_description','$c_credit')";

    $result=mysqli_query($data,$sql);

    if($result)
    {
        header('location:admin_add_course.php');
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
    

  
    <link rel="stylesheet" href="adminn.css">
    <link rel="stylesheet" href="view_student.php">
    <link rel="stylesheet" href="add_student.php">
    <link rel="stylesheet" href="adminn.css">
    <link rel="stylesheet" href="admin_add_teacher.php">
    <link rel="stylesheet" href="admin_view_teacher.php">
    <link rel="stylesheet" href="admin_add_course.php">
    <link rel="stylesheet" href="admin_view_course.php">
   
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

<!--Add student-->
<div class="content">
    <h1>Add A Course</h1>

    <div>
    <form class="w-25 ms-5" action="#" method="POST">
  <!-- Name input -->
  <div class="form-outline mb-2">
    <label class="form-label" for="form4Example1">Course Name</label>
    <input type="text" name="name" id="form4Example1" class="form-control" />
    
  </div>

   <!-- description  input -->
   <div class="form-outline mb-2">
    <label class="form-label" for="form4Example2">Course Descrption</label>
    <textarea class="form-control"  name="description" id="form4Example3" rows="4"></textarea>
    
  </div>

 <!-- credit input -->
 <div class="form-outline mb-2">
    <label class="form-label" for="form4Example2">Credit Hour</label>
    <input type="number" name="credit" id="form4Example2" class="form-control" />
    
  </div>

  <!-- Submit button -->
  <button type="submit" name="add_course" value="Add Course" class="btn btn-primary btn-block mb-4">Add Course</button>
</form>
    </div>

</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>