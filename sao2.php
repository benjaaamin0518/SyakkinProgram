
<?php
if($_POST["a"]&&$_POST["b"]&&$_POST["c"]&&$_POST["e"]||$_POST["d"]){

$s=array("借金",$_POST["a"],$_POST["b"],$_POST["c"],$_POST["d"],$_POST["e"]);
$fp=@fopen("./syakkin.csv","a");
fputcsv($fp,$s);
fclose($fp);
}




else{
    echo "<font color='red'>カテゴリー以外はすべて入力が必要です。</font>";
    
    }
    



?>




<a href="bike.html" style="font-size:80px;">トップへ戻る</a>
