<?php
if($_POST["a"]&&$_POST["b"]&&$_POST["c"]&&$_POST["e"]||$_POST["d"]){
$s1=array("支出",$_POST["a"],$_POST["b"],$_POST["c"],$_POST["d"],$_POST["e"]);
$fp2=@fopen("./syakkin.csv","a");
fputcsv($fp2,$s1);
fclose($fp2);





}
else{
echo "<font color='red'>カテゴリー以外はすべて入力が必要です。</font>";

}

?>
<a href="bike.html" style="font-size:80px;">トップへ戻る</a>
