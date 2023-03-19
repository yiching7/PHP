<?php
session_start();

$myhmID="hmid";
$myhmPWD="1234";

$mytcID="tcid";
$mytcPWD="1234";

$mystID="stid";
$mystPWD="1234";

$id=$_POST["id"];
$pwd=$_POST["pwd"];

if(($myhmID==$id)&&$myhmPWD==$pwd){
    $_SESSION["login"]="hm";
    header("Location:w6headmaster.php");
  
}
else if(($mytcID==$id)&&$mytcPWD==$pwd){
    $_SESSION["login"]="tc";
    header("Location:w6teacher.php");
}
else if(($mystID==$id)&&$mystPWD==$pwd){
    $_SESSION["login"]="st";
    header("Location:w6student.php");
}
else{
    $_SESSION["login"]="No";
    header("Location:w6fail.php");
}







?>