<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        body{
font-family:sans-serif;

    }

    li{
        font-size: 20px;
        border-bottom:2px #cccccc dotted;
        padding:10px;
    }
    </style>
</head>
<body>
    <h1 style="font-size: 40px;">更新情報</h1>
    <?php
    error_reporting(0);


    $o=0;
$s=fopen("./log.csv",r);
while($tpn=fgetcsv($s,1000)){
    list($l1[$o],$l2[$o],$l3[$o])=$tpn;
    $o++;
}
$o--;
$t=$o;
while($t>-1){
echo     '<li>'.$l1[$t].'-<a href="'.$l2[$t].'">'.$l3[$t].'</a></li>';

    $t--;
}
    ?>
</body>
</html>
