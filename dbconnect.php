<?php
$servername="localhost";
$username="root";
$password="";
$dbname="college";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
    die("connection failed".mysqli_connect_error());
}

if(isset($_POST['save']))
{
    $firstname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $lastname=$_POST['lastname'];
    $DOB=$_POST['DateofBirth'];
    
   
    
    $Branch=$_POST['Branch'];
    $Gender=$_POST['Gender'];
    $DOA=$_POST['DateofAddmission'];
    $Phone=$_POST['phone'];
    $address1=$_POST['Addr'];
    $email=$_POST['email'];
    
    $psw=$_POST['pass'];
  

    $sql_query="INSERT INTO student (firstname,middlename,lastname,DateofBirth,Branch,Gender,Dateofaddmission,phone,Addr,email,pass) VALUES ('$firstname','$middlename','$lastname','$DOB','$Branch','$Gender','$Phone','$address1','$email','$psw')";

    if(mysqli_query($conn,$sql_query))
    {
        echo "new student added succesfully...";
    }
    else
    {
        echo "error " .mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>