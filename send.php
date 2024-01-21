<?php
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$con=new mysqli('localhost','root','','t-fast');
if($con){
    $sql="insert into contact(name,email,subject,message)values('$name','$email','$subject','$message')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "suc";
    }else{
        die(mysqli_error($con));
    }
}else{
    die(mysqli_error($con));
    echo "echec";
}
?>