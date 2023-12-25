<?php
@$location=$_REQUEST['location'];
@$distination=$_REQUEST['distination'];
@$number=$_REQUEST['number'];
@$date=$_REQUEST['date'];
@$time=$_REQUEST['time'];
@$email=$_REQUEST['email'];
if (isset($_POST['btntest']))
{
  $host="localhost";
  $user="root";
  $password="";
  $db="taxi";

    @$conn=mysqli_connect($host,$user,$password,$db);

    $insert="insert into users values('$location','$distination','$number','$date','$time','$email')";

    mysqli_query($conn,$insert);
    if($conn){
        echo("<h1 style='color:blue;'>your registration is done!</h1> ");
    }
    else{
      echo("<h1 style='color:red;'>your registration is failed!</h1> ");
    }
}





?>