<?php
session_start();

if($_SESSION["login"]=="tc"){

}
else if($_SESSION["login"]=="hm"){

}
else{
    header("Location:w6error.php");
}

?>

<HTML>
<HEAD>
<TITLE>test</TITLE>
<META charset="utf-8">    
</HEAD>
<BODY text="black" bgcolor="#B9DBEF">

<?php 
    echo $_SESSION["login"];
?>

老師早安阿<br>
<a href="w6logout.php">logout</a>
</BODY>
</HTML>