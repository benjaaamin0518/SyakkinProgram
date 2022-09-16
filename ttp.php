<html>
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<script type="text/javascript">  
$(function($) {
    WindowHeight = $(window).height();
    $('.drawr').css('height', WindowHeight); //メニューをwindowの高さいっぱいにする
     
    $(document).ready(function() {
        $('.btn').click(function(){ //クリックしたら
      if($('.drawr').is(":animated")){
        return false;
      }else{
        $('.drawr').animate({width:'toggle'}); //animateで表示・非表示
        $(this).toggleClass('peke'); //toggleでクラス追加・削除
        return false;
      }
        });
    });
   
  //別領域をクリックでメニューを閉じる
  $(document).click(function(event) {
    if (!$(event.target).closest('.drawr').length) {
      $('.btn').removeClass('peke');
      $('.drawr').hide();
    }
  });
   
});
</script>
<style type="text/css">
    body{
font-family:sans-serif;

    }

.header{
width:960px;
border-bottom:2px solid #999999;
height:150px;
background-color:rgba(0,0,0,0.1);
position:absolute;
z-index:10000;
padding-left:20px;
left:0px;
top:0px;
font-weight:800;
color:green;
padding-top:35px;
font-size:90px;
}
.bbd{
    position:absolute;
height:800px;
left:0px;
top:185px;

background-color:rgba(255,255,0,0.3);
width:980px;


}
.bbd .tft{
width:980px;
position:relative;

left:0px;
top:5px;
height:120px;
background-color:#ffcc00;


}
.ttp{
    position:absolute;

left:130px;
top:0px;



color:#ffffff;

font-weight:800;
font-size:90px;

}
.ttf{
    position:absolute;

left:-10px;
top:10px;


color:#ffffff;

font-weight:800;
font-size:150px;
line-height:40px;
}
.bbd .tft2{
width:980px;
position:relative;

left:0px;
top:380px;
height:120px;
background-color:green;


}


.bbd .tft3{
width:980px;
position:absolute;

left:0px;
top:710px;
height:120px;
background-color:#ffcc00;


}


.ttt{
    position:absolute;

top:280px;

height:400px;
width:980px;
background-color:#ffffff;



}
#nata{
color:#000000;
font-size:50px;
position:relative;
top:100px;




}
#nata li{
    font-family:"fantasy";
color:rgba(0,0,0,0.7);
list-style:none;
}

#nata li b{
    color:black;
    padding-left:10px;
font-family:"游ゴシック";
list-style:none;
letter-spacing:10px;
}
.x2{
position:absolute;
top:20px;
left:50px;


}
.x2 a{
    font-size:50px;
font-weight:700;
color:rgb(75, 74, 74);
}
.tt2 span{

    position:absolute;
top:-80px;
left:200px;

font-size:50px;



}
.tt2{
    height:15px;
        position:relative;
        top:5px;
        left:40px;
        background-color:#37679e;



}
html{
font-family:"sans-serif"

}
.tt3{
    height:15px;
        position:absolute;
        top:100px;
        left:90px;
        background-color:#999999;



}
.ikutumo23{
background-color:rgba(255,255,0);
font-size:40px;
width:980px;
position:absolute;
top:px;
padding-top:30px;
z-index:900;

}
.header2{
position:absolute;
top:40px;
left:750px;
width:200px;
font-size:70px;
color:#ffffff;
background-color:rgba(0,128,0,0.6);
border-radius:10px;
text-align:center;
border:2px solid rgba(0,128,0);
}

.header2 a{
    text-decoration:none;
color:#ffffff;



}

.btn {
    display: block;
    cursor: pointer;
}
.peke {
    background-position: -35px 0;
}
.drawr {
    display: none;
    background-color:rgba(0,0,0,0.6);
    position: absolute;
    top: 180px;
    right:0;
    width:980px;
    z-index: 100;
}
#menu li {
    width:980px;
}
#menu li a {
    color:#fff;
    display: block;
    padding: 15px;
}
.tmago{
    position:relative;
    top:-160px;
width:980px;
height:250px;
border-bottom:1px solid #999999;
margin-top:40px;


}
.tmago input{
    width:			32px;			/* ボックスの横幅 */
	height:			32px;			/* ボックスの縦幅 */
	display:		inline-block;
    position:		absolute;
    top:-90px;
	left:			0;
	background-color:	#fff;
	box-shadow:		inset 1px 2px 3px 0px #000;
	border-radius:		6px 6px 6px 6px;}
.sater input{
font-size:40px;
padding:12px;
position:absolute;
top:-980px;
left:750px;
}
</style>

</head>
<body>
<div class="header">
？？通帳
</div>
</div>
<div class="bbd"><br>
<font style="font-size:50px;color:#999999;"><b style="color:#000000">？？</b>様の通帳

</font>
<br>
<br>
<div class="tft">
<div class="ttf">・<br>・<br>・
</div>

<div class="ttp">通帳情報
</div></div>
<div class="ttt">

<?php




error_reporting(0);





$goukei=0;
$syakkin=0;
$sisyutsu=0;
$fine=fopen("./syakkin.csv","r");
while($pix=fgetcsv($fine,1000)){

list($a,$i,$u,$e,$o,$ka)=$pix;
if($a=="支出"){
$a=1;


if($a==1){
$sisyutsu=$sisyutsu+$ka;
}
}
else{

$syakkin=$syakkin+$ka;
}

}
$goukei=$syakkin-$sisyutsu;
if($goukei<0){
$goukei=0;
}
$syakkin2=number_format($syakkin);
$sisyutsu2=number_format($sisyutsu);
$goukei2=number_format($goukei);




echo "<ul id='nata'>
<li>借金額
<b>".$syakkin2."円</b></li><li style='border-bottom:3px dotted #999999;'>支出額
<b>".$sisyutsu2."円</b></li><li>残借金
<b>".$goukei2."円</b></li>
</ul>





";
   if($goukei<0 || $goukei==0){
    echo '<div class="tt3" style="width:700px;"> </div>';
    echo '<div class="x2"><a>完済率</a><div class="tt2" style="width:700px;color:green;"> <span>100%</span></div></div>' ; 
    echo "</div>";
     }
     else{
        $ps=$syakkin/100;
        $ss=floor($ps);
        $ssd=$syakkin-$goukei;
        $uur=$ssd/$ss;
        $uur2=floor($uur) ;
      $ps2=$uur2*7;
      echo '<div class="tt3" style="width:700px;"> </div>';

        echo '<div class="x2"><a>完済率</a><div class="tt2" style="width:'.$ps2.'px;"> <span>'.$uur2.'%</span></div></div>' ; 
        echo "</div>";
      
      }
      ?>

          <br>

<div class="tft3">
<div class="ttf">・<br>・<br>・
</div>

<div class="ttp">通帳情報
</div></div>

          <div style='position:absolute;top:1000px;background-color:#ffffff;'>

<?php
error_reporting(0);
echo '<form method="post" action="text.php">';

$fine=fopen("./syakkin.csv","r");
$maboroshi=1;
$s=0;
$t=1;
$p=1;
while($tps=fgetcsv($fine,1000)){
    list($a2[$s],$i2[$s],$u2[$s],$e2[$s],$o2[$s],$ka2[$s])=$tps;
$p++;
$s=$s+1;
}
$s--;
$p--;
while($s>=0){
   
    $ka22[$s]=number_format($ka2[$s]);



        if($maboroshi==1&&"支出"==$a2[$s]){
        $a2[$s]=1;

        
        if($a2[$s]==1){

            echo "  <div class='tmago'>  
                           <div style='margin:10px;text-align:center;height:180px;width:200px;border-radius:20px;font-size:52px;color:#ffffff;background-color:#999999;'> <a style='padding-left:10px;border-bottom:10px solid #ffffff;'>".$i2[$s]."</a>
                          <br>
                            ".$u2[$s]."／
                           
                                ".$e2[$s]."</div>
                               
                                    <div style='position:absolute;top:0px;left:240px;font-size:80px;width:400px;height:240px;font-weight:550;'>".$o2[$s]."</div>
                                    
                                    <div style='position:absolute;top:130px;left:650px;font-size:70px;width:300px;'><input type='checkbox' value='".$t."' name='jvc".$t."'><font color='green'>".$ka22[$s]."</font></div>
                                     </div>";
$t++;
        }
    
            
            }
            else if(1==$maboroshi){
        
                echo "<div class='tmago'>  
                <div style='margin:10px;text-align:center;height:180px;width:200px;border-radius:20px;font-size:52px;color:#ffffff;background-color:#999999;'> <a style='padding-left:10px;border-bottom:10px solid #ffffff;'>".$i2[$s]."</a>
               <br>
                 ".$u2[$s]."／
                
                     ".$e2[$s]."</div>
                    
                         <div style='position:absolute;top:0px;left:240px;font-size:80px;width:400px;height:240px;font-weight:550;'>".$o2[$s]."</div>
                         
                         <div style='position:absolute;top:130px;left:650px;font-size:70px;width:300px;'><input type='checkbox' value='".$t."' name='jvc".$t."'><font color='red'>".$ka22[$s]."-</font></div>
                          </div>";
    

                          $t++;
                        }
             
    else if($a2[$s]=="支出"){
        $a2[$s]=1;
        
        
        if($a2[$s]==1){
            echo "              <div class='tmago'>  
            <div style='margin:10px;text-align:center;height:180px;width:200px;border-radius:20px;font-size:52px;color:#ffffff;background-color:#999999;'> <a style='padding-left:10px;border-bottom:10px solid #ffffff;'>".$i2[$s]."</a>
           <br>
             ".$u2[$s]."／
            
                 ".$e2[$s]."</div>
                
                     <div style='position:absolute;top:0px;left:240px;font-size:80px;width:400px;height:240px;font-weight:550;'>".$o2[$s]."</div>
                     
                     <div style='position:absolute;top:130px;left:650px;font-size:70px;width:300px;'><input type='checkbox' value='".$t."' name='jvc".$t."'><font color='green'>".$ka22[$s]."</font></div>
                      </div>";

                      $t++;
                    }
        }
        else{

    echo "      <div class='tmago'>  
    <div style='margin:10px;text-align:center;height:180px;width:200px;border-radius:20px;font-size:52px;color:#ffffff;background-color:#999999;'> <a style='padding-left:10px;border-bottom:10px solid #ffffff;'>".$i2[$s]."</a>
    <br>
     ".$u2[$s]."／
    
         ".$e2[$s]."</div>
        
             <div style='position:absolute;top:0px;left:240px;font-size:80px;width:400px;height:240px;font-weight:550;'>".$o2[$s]."</div>
             
             <div style='position:absolute;top:130px;left:650px;font-size:70px;width:300px;'><input type='checkbox' value='".$t."' name='jvc".$t."'><font color='red'>".$ka22[$s]."-</font></div>
              </div>";
    
    
              $t++;
                        
        }
    $maboroshi=$maboroshi+1;
    
$s--;


}



echo '<div class="sater"><input type="text" name="tt" value="'.$p.'" size="2" style="opacity:0;" readonly="readonly"><input type="submit" value="送信"></form></div>';


?>



</div>


</body>
</html>
