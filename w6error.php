<?php
session_start();
?>

<?php ob_start(); ?>

<HTML>
<HEAD>
<TITLE>test</TITLE>
<META charset="utf-8">
    
</HEAD>
<BODY text="black" bgcolor="#B9DBEF">

    非法進入網頁<br>
    網頁將在三秒後跳轉至登入頁面或<br>
    <a href="w6.php">點這邊</a>

    <?php
        header("Refresh:3;url=w6.php")
    ?>
</BODY>
</HTML>

<?php ob_flush(); ?>