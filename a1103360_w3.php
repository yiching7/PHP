<meta charset="utf8">
<?php

    if(isset($_POST["id"])){

        $id=$_POST["id"];
        $pwd=$_POST["pwd"];
        $mail=$_POST["mail"];
        $tel=$_POST["tel"];
        $toast=$_POST["toast"];
        

        echo "請輸入你的帳號:".$id."<br>";
        echo "請輸入你的密碼:".$pwd."<br>";
        echo "請輸入信箱:".$mail."<br>";
        echo "連絡電話:".$tel."<br>";
    
        if($toast=="yes"){
            echo "要吐司";
        }
        else{
            echo "不要吐司";
        }

        echo "<br>";

        echo "你能吃的肉種類:";
        if(isset($_POST["pork"])){
            $pork=$_POST["pork"];
            echo "豬肉";
        }
        if(isset($_POST["beef"])){
            $beef=$_POST["beef"];
            echo "牛肉";
        }
        if(isset($_POST["lamb"])){
            $lamb=$_POST["lamb"];
            echo "羊肉";
        }
        if(isset($_POST["chicken"])){
            $chicken=$_POST["chicken"];
            echo "雞肉";
        }

        echo "<br>";

        $cost=$_POST["cost"];
        echo "你需要交的價錢是:";

        foreach($cost as $value){
            echo $value." ";
        }

        echo "<br>";
        $comment=$_POST["comment"];
        echo"有額外的問題請留言給系學會:<br>";
        echo nl2br(strip_tags($comment));

    }
    
    else{
        echo "資料輸入錯誤";
    }
?>