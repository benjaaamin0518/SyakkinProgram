<?php
error_reporting(0);
echo '<a href="bike.html" style="font-size:80px;">トップへ戻る</a>
';
$aja=1;
$tt=$_POST["tt"];
$fp2=fopen("syakkin.csv","r");

while($ts=fgetcsv($fp2,1000)){
list($a[$aja],$b[$aja],$c[$aja],$d[$aja],$e[$aja],$f[$aja])=$ts;

$aja++;

}
$aja--;
$fp3=fopen("syakkin.csv","r");

while($ts2=fgetcsv($fp3,1000)){
list($a[$aja],$b[$aja],$c[$aja],$d[$aja],$e[$aja],$f[$aja])=$ts2;
if($tt==0){
break;

}

else if($tt==$_POST["jvc$aja"]){
echo $aja.':'.$f[$aja];
    $tt--;
$aja--;
}
else if($_POST["jvc$aja"]==false){
    $wp[]="$a[$aja],$b[$aja],$c[$aja],$d[$aja],$e[$aja],$f[$aja]\n";

$tt--;

$aja--;
}

}
$ss=fopen("syakkin.csv","w");
foreach($wp as $value){
    fwrite($ss,$value);
}
fclose($ss);


fclose($fp2);
?>
