<?php
include 'connect.php';
$name=$_POST['student_name'];
$age=$_POST['student_age'];
$addres=$_POST['student_address'];
$gpa=$_POST['student_gpa'];
$gender='';
if (isset($_POST['male'])){
    $gender='Male';
}
else{
    $gender='Female';
}
if(isset($_POST['insert'])){
$query="INSERT INTO student_info (Student_Name,	Age,Address,Gender,	GPA)
VALUES ('$name','$age','$addres','$gender','$gpa')";

if(mysqli_query($conn,$query)){
echo 'alert("Insert New Student ")'; 
header('location: StudentInfo.html');}
else
echo 'ERROR : '. mysqli_connect_error();
}
if(isset($_POST['Delete'])){

    $query="DELETE FROM student_info WHERE Student_ID=9 ";
    
    if(mysqli_query($conn,$query)){
    echo 'alert("Insert New Student ")'; 
    header('location: StudentInfo.html');
}
}
    else{
    echo 'ERROR : '. mysqli_connect_error();
    
    }
    if(isset($_POST['update'])){

        $query="UPDATE student_info 
        SET 
        Student_Name = 'Shahem',
        Age = 2,
        Address = 'Amman',
        Gender = 'Male',
        GPA = 99
            WHERE
             Student_ID=10 ";
        
        if(mysqli_query($conn,$query)){
        echo 'alert("Update Student ")'; 
        header('location: StudentInfo.html');
    }
    }
        else{
        echo 'ERROR : '. mysqli_connect_error();
        
        }
        if(isset($_POST['show'])){

header('location: show.php');
        }
?>