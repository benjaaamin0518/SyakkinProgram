<link rel="stylesheet" href="sao.css">
<a href="saooop.php">戻る</a>

検索:
<?php
echo $_POST["a"]."/".$_POST["b"]."/".$_POST["c"]."/".$_POST["d"]."/".$_POST["e"].":<br><br>";


error_reporting(0);


$kokos=0;


$maboroshi=1;
if($_POST["a"]&&$_POST["b"]&&$_POST["c"]&&$_POST["d"]&&$_POST["e"]){
$fine=fopen("./syakkin.csv","r");
while($pix=fgetcsv($fine,1000)){

list($a,$i,$u,$e,$o,$ka)=$pix;
if($_POST["a"]==$i&&$_POST["b"]==$u&&$_POST["c"]==$e&&$_POST["d"]==$o&&$_POST["e"]==$ka){
    if($maboroshi==1&&"支出"==$a){
        $a=1;
        
        
        if($a==1){

            $ka2=number_format($ka);

            echo "<table> <tr class='anone5'><th>
            支・借
            </th><th>
                年
            </th><th>
                月
                </th><th>
                    日
                    </th><th>
                        カテゴリー
                        </th><th>
                            金額
                            </th></tr>        <tr class='anone4'><th class='hate'>
                            支出
                            </th><th>
                            ".$i."
                            </th><th>
                            ".$u."
                            </th><th>
                                ".$e."
                                </th><th>
                                    ".$o."
                                    </th><th>
                                       ".$ka2."
                                        </th>
                                    </tr>";
                                    $kokos=$kokos+$ka;

        }
    
    
            
            }
            else if($maboroshi==1){
        
                $ka2=number_format($ka);

                echo "<table> <tr class='anone3'><th>
                支・借
                </th><th>
                    年
                </th><th>
                    月
                    </th><th>
                        日
                        </th><th>
                            カテゴリー
                            </th><th>
                                金額
                                </th></tr>        <tr class='anone4'><th class='hate2'>
                                借金
                                </th><th>
                                ".$i."
                                </th><th>
                                ".$u."
                                </th><th>
                                    ".$e."
                                    </th><th>
                                        ".$o."
                                        </th><th>
                                           ".$ka2."
                                            </th>
                                        </tr>";
                                        $kokos=$kokos-$ka;

                }
    
                else if("支出"==$a){
                    $a=1;
                    
                    
                    if($a==1){

                        $ka2=number_format($ka);

                        echo "<table> <tr class='anone5'><th>
                        支・借
                        </th><th>
                            年
                        </th><th>
                            月
                            </th><th>
                                日
                                </th><th>
                                    カテゴリー
                                    </th><th>
                                        金額
                                        </th></tr>        <tr class='anone4'><th class='hate'>
                                        支出
                                        </th><th>
                                        ".$i."
                                        </th><th>
                                        ".$u."
                                        </th><th>
                                            ".$e."
                                            </th><th>
                                                ".$o."
                                                </th><th>
                                                   ".$ka2."
                                                    </th>
                                                </tr>";
                                                $kokos=$kokos+$ka;

                    }
                
                
                        
                        }
                        else{
                    
                            $ka2=number_format($ka);

                            echo "<table> <tr class='anone3'><th>
                            支・借
                            </th><th>
                                年
                            </th><th>
                                月
                                </th><th>
                                    日
                                    </th><th>
                                        カテゴリー
                                        </th><th>
                                            金額
                                            </th></tr>        <tr class='anone4'><th class='hate2'>
                                            借金
                                            </th><th>
                                            ".$i."
                                            </th><th>
                                            ".$u."
                                            </th><th>
                                                ".$e."
                                                </th><th>
                                                    ".$o."
                                                    </th><th>
                                                       ".$ka2."
                                                        </th>
                                                    </tr>";
                                                    $kokos=$kokos-$ka;

                            }
                
            
}
$maboroshi=1+$maboroshi;
}
}

else if($_POST["a"]&&$_POST["c"]&&$_POST["d"]&&$_POST["e"]){
$fine=fopen("./syakkin.csv","r");
while($pix=fgetcsv($fine,1000)){

list($a,$i,$u,$e,$o,$ka)=$pix;
if($_POST["a"]==$i&&$_POST["c"]==$e&&$_POST["d"]==$o&&$_POST["e"]==$ka){
    if($maboroshi==1&&"支出"==$a){
        $a=1;
        
        
        if($a==1){


            $ka2=number_format($ka);




            echo "<table> <tr class='anone5'><th>
            支・借
            </th><th>
                年
            </th><th>
                月
                </th><th>
                    日
                    </th><th>
                        カテゴリー
                        </th><th>
                            金額
                            </th></tr>        <tr class='anone4'><th class='hate'>
                            支出
                            </th><th>
                            ".$i."
                            </th><th>
                            ".$u."
                            </th><th>
                                ".$e."
                                </th><th>
                                    ".$o."
                                    </th><th>
                                       ".$ka2."
                                        </th>
                                    </tr>";
                                    $kokos=$kokos+$ka;

        }
    
    
            
            }
            else if($maboroshi==1){
        
                $ka2=number_format($ka);


                echo "<table> <tr class='anone3'><th>
                支・借
                </th><th>
                    年
                </th><th>
                    月
                    </th><th>
                        日
                        </th><th>
                            カテゴリー
                            </th><th>
                                金額
                                </th></tr>        <tr class='anone4'><th class='hate2'>
                                借金
                                </th><th>
                                ".$i."
                                </th><th>
                                ".$u."
                                </th><th>
                                    ".$e."
                                    </th><th>
                                        ".$o."
                                        </th><th>
                                           ".$ka2."
                                            </th>
                                        </tr>";
                                        $kokos=$kokos-$ka;

                }
    
                else if("支出"==$a){
                    $a=1;
                    
                    
                    if($a==1){

                        $ka2=number_format($ka);

                        echo "<table> <tr class='anone5'><th>
                        支・借
                        </th><th>
                            年
                        </th><th>
                            月
                            </th><th>
                                日
                                </th><th>
                                    カテゴリー
                                    </th><th>
                                        金額
                                        </th></tr>        <tr class='anone4'><th class='hate'>
                                        支出
                                        </th><th>
                                        ".$i."
                                        </th><th>
                                        ".$u."
                                        </th><th>
                                            ".$e."
                                            </th><th>
                                                ".$o."
                                                </th><th>
                                                   ".$ka2."
                                                    </th>
                                                </tr>";
                                                $kokos=$kokos+$ka;

                    }
                
                
                        
                        }
                        else{
                            $ka2=number_format($ka);

                
                            echo "<table> <tr class='anone3'><th>
                            支・借
                            </th><th>
                                年
                            </th><th>
                                月
                                </th><th>
                                    日
                                    </th><th>
                                        カテゴリー
                                        </th><th>
                                            金額
                                            </th></tr>        <tr class='anone4'><th class='hate2'>
                                            借金
                                            </th><th>
                                            ".$i."
                                            </th><th>
                                            ".$u."
                                            </th><th>
                                                ".$e."
                                                </th><th>
                                                    ".$o."
                                                    </th><th>
                                                       ".$ka2."
                                                        </th>
                                                    </tr>";
                                                    $kokos=$kokos-$ka;

                            }
                
            
}
$maboroshi=1+$maboroshi;
}
}


else if($_POST["a"]&&$_POST["b"]&&$_POST["d"]&&$_POST["e"]){
$fine=fopen("./syakkin.csv","r");
while($pix=fgetcsv($fine,1000)){

list($a,$i,$u,$e,$o,$ka)=$pix;
if($_POST["a"]==$i&&$_POST["b"]==$u&&$_POST["d"]==$o&&$_POST["e"]==$ka){
    if($maboroshi==1&&"支出"==$a){
        $a=1;
        
        
        if($a==1){

            $ka2=number_format($ka);

            
            echo "<table> <tr class='anone5'><th>
            支・借
            </th><th>
                年
            </th><th>
                月
                </th><th>
                    日
                    </th><th>
                        カテゴリー
                        </th><th>
                            金額
                            </th></tr>        <tr class='anone4'><th class='hate'>
                            支出
                            </th><th>
                            ".$i."
                            </th><th>
                            ".$u."
                            </th><th>
                                ".$e."
                                </th><th>
                                    ".$o."
                                    </th><th>
                                       ".$ka2."
                                        </th>
                                    </tr>";
                                    $kokos=$kokos+$ka;

        }
    
    
            
            }
            else if($maboroshi==1){
        
                $ka2=number_format($ka);


                

                echo "<table> <tr class='anone3'><th>
                支・借
                </th><th>
                    年
                </th><th>
                    月
                    </th><th>
                        日
                        </th><th>
                            カテゴリー
                            </th><th>
                                金額
                                </th></tr>        <tr class='anone4'><th class='hate2'>
                                借金
                                </th><th>
                                ".$i."
                                </th><th>
                                ".$u."
                                </th><th>
                                    ".$e."
                                    </th><th>
                                        ".$o."
                                        </th><th>
                                           ".$ka2."
                                            </th>
                                        </tr>";
                                        $kokos=$kokos-$ka;

                }
    
                else if("支出"==$a){
                    $a=1;
                    
                    
                    if($a==1){

                        $ka2=number_format($ka);

                        echo "<table> <tr class='anone5'><th>
                        支・借
                        </th><th>
                            年
                        </th><th>
                            月
                            </th><th>
                                日
                                </th><th>
                                    カテゴリー
                                    </th><th>
                                        金額
                                        </th></tr>        <tr class='anone4'><th class='hate'>
                                        支出
                                        </th><th>
                                        ".$i."
                                        </th><th>
                                        ".$u."
                                        </th><th>
                                            ".$e."
                                            </th><th>
                                                ".$o."
                                                </th><th>
                                                   ".$ka2."
                                                    </th>
                                                </tr>";
                                                $kokos=$kokos+$ka;

                    }
                
                
                        
                        }
                        else{
                    
                            $ka2=number_format($ka);
   
                            echo "<table> <tr class='anone3'><th>
                            支・借
                            </th><th>
                                年
                            </th><th>
                                月
                                </th><th>
                                    日
                                    </th><th>
                                        カテゴリー
                                        </th><th>
                                            金額
                                            </th></tr>        <tr class='anone4'><th class='hate2'>
                                            借金
                                            </th><th>
                                            ".$i."
                                            </th><th>
                                            ".$u."
                                            </th><th>
                                                ".$e."
                                                </th><th>
                                                    ".$o."
                                                    </th><th>
                                                       ".$ka2."
                                                        </th>
                                                    </tr>";
                                                    $kokos=$kokos-$ka;

                            }
                
            
}
$maboroshi=1+$maboroshi;
}
}



else if($_POST["a"]&&$_POST["b"]&&$_POST["c"]&&$_POST["e"]){
$fine=fopen("./syakkin.csv","r");
while($pix=fgetcsv($fine,1000)){

list($a,$i,$u,$e,$o,$ka)=$pix;
if($_POST["a"]==$i&&$_POST["b"]==$u&&$_POST["c"]==$e&&$_POST["e"]==$ka){
    if($maboroshi==1&&"支出"==$a){
        $a=1;
        
        
        if($a==1){
            $ka2=number_format($ka);

            echo "<table> <tr class='anone5'><th>
            支・借
            </th><th>
                年
            </th><th>
                月
                </th><th>
                    日
                    </th><th>
                        カテゴリー
                        </th><th>
                            金額
                            </th></tr>        <tr class='anone4'><th class='hate'>
                            支出
                            </th><th>
                            ".$i."
                            </th><th>
                            ".$u."
                            </th><th>
                                ".$e."
                                </th><th>
                                    ".$o."
                                    </th><th>
                                       ".$ka2."
                                        </th>
                                    </tr>";
                                    $kokos=$kokos+$ka;

        }
    
    
            
            }
            else if($maboroshi==1){
        
                $ka2=number_format($ka);

                echo "<table> <tr class='anone3'><th>
                支・借
                </th><th>
                    年
                </th><th>
                    月
                    </th><th>
                        日
                        </th><th>
                            カテゴリー
                            </th><th>
                                金額
                                </th></tr>        <tr class='anone4'><th class='hate2'>
                                借金
                                </th><th>
                                ".$i."
                                </th><th>
                                ".$u."
                                </th><th>
                                    ".$e."
                                    </th><th>
                                        ".$o."
                                        </th><th>
                                           ".$ka2."
                                            </th>
                                        </tr>";
                                        $kokos=$kokos-$ka;

                }
    
                else if("支出"==$a){
                    $a=1;
                    
                    
                    if($a==1){

                        $ka2=number_format($ka);

                        echo "<table> <tr class='anone5'><th>
                        支・借
                        </th><th>
                            年
                        </th><th>
                            月
                            </th><th>
                                日
                                </th><th>
                                    カテゴリー
                                    </th><th>
                                        金額
                                        </th></tr>        <tr class='anone4'><th class='hate'>
                                        支出
                                        </th><th>
                                        ".$i."
                                        </th><th>
                                        ".$u."
                                        </th><th>
                                            ".$e."
                                            </th><th>
                                                ".$o."
                                                </th><th>
                                                   ".$ka2."
                                                    </th>
                                                </tr>";
                                                $kokos=$kokos+$ka;

                    }
                
                
                        
                        }
                        else{
                    
                            $ka2=number_format($ka);

                            echo "<table> <tr class='anone3'><th>
                            支・借
                            </th><th>
                                年
                            </th><th>
                                月
                                </th><th>
                                    日
                                    </th><th>
                                        カテゴリー
                                        </th><th>
                                            金額
                                            </th></tr>        <tr class='anone4'><th class='hate2'>
                                            借金
                                            </th><th>
                                            ".$i."
                                            </th><th>
                                            ".$u."
                                            </th><th>
                                                ".$e."
                                                </th><th>
                                                    ".$o."
                                                    </th><th>
                                                       ".$ka2."
                                                        </th>
                                                    </tr>";
                                                    $kokos=$kokos-$ka;

                            }
                
            
}
$maboroshi=1+$maboroshi;
}
}


else if($_POST["a"]&&$_POST["b"]&&$_POST["c"]&&$_POST["d"]){
$fine=fopen("./syakkin.csv","r");
while($pix=fgetcsv($fine,1000)){

list($a,$i,$u,$e,$o,$ka)=$pix;
if($_POST["a"]==$i&&$_POST["b"]==$u&&$_POST["c"]==$e&&$_POST["d"]==$o){
    if($maboroshi==1&&"支出"==$a){
        $a=1;
        
        
        if($a==1){
            $ka2=number_format($ka);

            echo "<table> <tr class='anone5'><th>
            支・借
            </th><th>
                年
            </th><th>
                月
                </th><th>
                    日
                    </th><th>
                        カテゴリー
                        </th><th>
                            金額
                            </th></tr>        <tr class='anone4'><th class='hate'>
                            支出
                            </th><th>
                            ".$i."
                            </th><th>
                                                           ".$u."
                            </th><th>
                                ".$e."
                                </th><th>
                                    ".$o."
                                    </th><th>
                                       ".$ka2."
                                        </th>
                                    </tr>";
                                    $kokos=$kokos+$ka;

        }
    
    
            
            }
            else if($maboroshi==1){
        
                $ka2=number_format($ka);

                echo "<table> <tr class='anone3'><th>
                支・借
                </th><th>
                    年
                </th><th>
                    月
                    </th><th>
                        日
                        </th><th>
                            カテゴリー
                            </th><th>
                                金額
                                </th></tr>        <tr class='anone4'><th class='hate2'>
                                借金
                                </th><th>
                                ".$i."
                                </th><th>
                                ".$u."
                                </th><th>
                                    ".$e."
                                    </th><th>
                                        ".$o."
                                        </th><th>
                                           ".$ka2."
                                            </th>
                                        </tr>";
                                        $kokos=$kokos-$ka;

                }
    
                else if("支出"==$a){
                    $a=1;
                    
                    
                    if($a==1){
                        $ka2=number_format($ka);

                        echo "<table> <tr class='anone5'><th>
                        支・借
                        </th><th>
                            年
                        </th><th>
                            月
                            </th><th>
                                日
                                </th><th>
                                    カテゴリー
                                    </th><th>
                                        金額
                                        </th></tr>        <tr class='anone4'><th class='hate'>
                                        支出
                                        </th><th>
                                        ".$i."
                                        </th><th>
                                        ".$u."
                                        </th><th>
                                            ".$e."
                                            </th><th>
                                                ".$o."
                                                </th><th>
                                                   ".$ka2."
                                                    </th>
                                                </tr>";
                                                $kokos=$kokos+$ka;

                    }
                
                
                        
                        }
                        else{
                    
                            $ka2=number_format($ka);


                            echo "<table> <tr class='anone3'><th>
                            支・借
                            </th><th>
                                年
                            </th><th>
                                月
                                </th><th>
                                    日
                                    </th><th>
                                        カテゴリー
                                        </th><th>
                                            金額
                                            </th></tr>        <tr class='anone4'><th class='hate2'>
                                            借金
                                            </th><th>
                                            ".$i."
                                            </th><th>
                                            ".$u."
                                            </th><th>
                                                ".$e."
                                                </th><th>
                                                    ".$o."
                                                    </th><th>
                                                       ".$ka2."
                                                        </th>
                                                    </tr>";
                                                    $kokos=$kokos-$ka;

                            }
                
            
}
$maboroshi=1+$maboroshi;
}
}


else if($_POST["a"]&&$_POST["b"]&&$_POST["c"]){
$fine=fopen("./syakkin.csv","r");
while($pix=fgetcsv($fine,1000)){

list($a,$i,$u,$e,$o,$ka)=$pix;
if($_POST["a"]==$i&&$_POST["b"]==$u&&$_POST["c"]==$e){
    if($maboroshi==1&&"支出"==$a){
        $a=1;
        
        
        if($a==1){

            $ka2=number_format($ka);





            echo "<table> <tr class='anone5'><th>
            支・借
            </th><th>
                年
            </th><th>
                月
                </th><th>
                    日
                    </th><th>
                        カテゴリー
                        </th><th>
                            金額
                            </th></tr>        <tr class='anone4'><th class='hate'>
                            支出
                            </th><th>
                            ".$i."
                            </th><th>
                            ".$u."
                            </th><th>
                                ".$e."
                                </th><th>
                                    ".$o."
                                    </th><th>
                                       ".$ka2."
                                        </th>
                                    </tr>";




                                    $kokos=$kokos+$ka;

        }
    
    
            
            }
            else if($maboroshi==1){
        
                $ka2=number_format($ka);

                echo "<table> <tr class='anone3'><th>
                支・借
                </th><th>
                    年
                </th><th>
                    月
                    </th><th>
                        日
                        </th><th>
                            カテゴリー
                            </th><th>
                                金額
                                </th></tr>        <tr class='anone4'><th class='hate2'>
                                借金
                                </th><th>
                                ".$i."
                                </th><th>
                                ".$u."
                                </th><th>
                                    ".$e."
                                    </th><th>
                                        ".$o."
                                        </th><th>
                                           ".$ka2."
                                            </th>
                                        </tr>";
                                        $kokos=$kokos-$ka;

                }
    
                else if("支出"==$a){
                    $a=1;
                    
                    
                    if($a==1){

                        $ka2=number_format($ka);


                        echo "<table> <tr class='anone5'><th>
                        支・借
                        </th><th>
                            年
                        </th><th>
                            月
                            </th><th>
                                日
                                </th><th>
                                    カテゴリー
                                    </th><th>
                                        金額
                                        </th></tr>        <tr class='anone4'><th class='hate'>
                                        支出
                                        </th><th>
                                        ".$i."
                                        </th><th>
                                        ".$u."
                                        </th><th>
                                            ".$e."
                                            </th><th>
                                                ".$o."
                                                </th><th>
                                                   ".$ka2."
                                                    </th>
                                                </tr>";
                                                $kokos=$kokos+$ka;

                    }
                
                
                        
                        }
                        else{
                    
                            $ka2=number_format($ka);

                            echo "<table> <tr class='anone3'><th>
                            支・借
                            </th><th>
                                年
                            </th><th>
                                月
                                </th><th>
                                    日
                                    </th><th>
                                        カテゴリー
                                        </th><th>
                                            金額
                                            </th></tr>        <tr class='anone4'><th class='hate2'>
                                            借金
                                            </th><th>
                                            ".$i."
                                            </th><th>
                                            ".$u."
                                            </th><th>
                                                ".$e."
                                                </th><th>
                                                    ".$o."
                                                    </th><th>
                                                       ".$ka2."
                                                        </th>
                                                    </tr>";
                                                    $kokos=$kokos-$ka;

                            }
                
            
}
$maboroshi=1+$maboroshi;
}
}



else if($_POST["a"]&&$_POST["c"]&&$_POST["d"]){

$fine=fopen("./syakkin.csv","r");
while($pix=fgetcsv($fine,1000)){

list($a,$i,$u,$e,$o,$ka)=$pix;
if($_POST["a"]==$i&&$_POST["c"]==$e&&$_POST["d"]==$o){
    if($maboroshi==1&&"支出"==$a){
        $a=1;
        
        
        if($a==1){
            $ka2=number_format($ka);

            echo "<table> <tr class='anone5'><th>
            支・借
            </th><th>
                年
            </th><th>
                月
                </th><th>
                    日
                    </th><th>
                        カテゴリー
                        </th><th>
                            金額
                            </th></tr>        <tr class='anone4'><th class='hate'>
                            支出
                            </th><th>
                            ".$i."
                            </th><th>
                            ".$u."
                            </th><th>
                                ".$e."
                                </th><th>
                                    ".$o."
                                    </th><th>
                                       ".$ka2."
                                        </th>
                                    </tr>";
                                    $kokos=$kokos+$ka;

        }
    
    
            
            }
            else if($maboroshi==1){
        
                $ka2=number_format($ka);

                echo "<table> <tr class='anone3'><th>
                支・借
                </th><th>
                    年
                </th><th>
                    月
                    </th><th>
                        日
                        </th><th>
                            カテゴリー
                            </th><th>
                                金額
                                </th></tr>        <tr class='anone4'><th class='hate2'>
                                借金
                                </th><th>
                                ".$i."
                                </th><th>
                                ".$u."
                                </th><th>
                                    ".$e."
                                    </th><th>
                                        ".$o."
                                        </th><th>
                                           ".$ka2."
                                            </th>
                                        </tr>";
                                        $kokos=$kokos-$ka;

                }
    
                else if("支出"==$a){
                    $a=1;
                    
                    
                    if($a==1){

                        $ka2=number_format($ka);

                        echo "<table> <tr class='anone5'><th>
                        支・借
                        </th><th>
                            年
                        </th><th>
                            月
                            </th><th>
                                日
                                </th><th>
                                    カテゴリー
                                    </th><th>
                                        金額
                                        </th></tr>        <tr class='anone4'><th class='hate'>
                                        支出
                                        </th><th>
                                        ".$i."
                                        </th><th>
                                        ".$u."
                                        </th><th>
                                            ".$e."
                                            </th><th>
                                                ".$o."
                                                </th><th>
                                                   ".$ka2."
                                                    </th>
                                                </tr>";
                                                $kokos=$kokos+$ka;

                    }
                
                
                        
                        }
                        else{
                    
                            $ka2=number_format($ka);

                            echo "<table> <tr class='anone3'><th>
                            支・借
                            </th><th>
                                年
                            </th><th>
                                月
                                </th><th>
                                    日
                                    </th><th>
                                        カテゴリー
                                        </th><th>
                                            金額
                                            </th></tr>        <tr class='anone4'><th class='hate2'>
                                            借金
                                            </th><th>
                                            ".$i."
                                            </th><th>
                                            ".$u."
                                            </th><th>
                                                ".$e."
                                                </th><th>
                                                    ".$o."
                                                    </th><th>
                                                       ".$ka2."
                                                        </th>
                                                    </tr>";
                                                    $kokos=$kokos-$ka;

                            }
                
            
}
$maboroshi=1+$maboroshi;
}
}

else if($_POST["a"]&&$_POST["b"]&&$_POST["c"]){

$fine=fopen("./syakkin.csv","r");
while($pix=fgetcsv($fine,1000)){

list($a,$i,$u,$e,$o,$ka)=$pix;
if($_POST["a"]==$i&&$_POST["b"]==$u&&$_POST["c"]==$e){
    if($maboroshi==1&&"支出"==$a){
        $a=1;
        
        
        if($a==1){

            $ka2=number_format($ka);

            echo "<table> <tr class='anone5'><th>
            支・借
            </th><th>
                年
            </th><th>
                月
                </th><th>
                    日
                    </th><th>
                        カテゴリー
                        </th><th>
                            金額
                            </th></tr>        <tr class='anone4'><th class='hate'>
                            支出
                            </th><th>
                            ".$i."
                            </th><th>
                            ".$u."
                            </th><th>
                                ".$e."
                                </th><th>
                                    ".$o."
                                    </th><th>
                                       ".$ka2."
                                        </th>
                                    </tr>";
                                    $kokos=$kokos+$ka;

        }
    
    
            
            }
            else if($maboroshi==1){
        
                $ka2=number_format($ka);

                echo "<table> <tr class='anone3'><th>
                支・借
                </th><th>
                    年
                </th><th>
                    月
                    </th><th>
                        日
                        </th><th>
                            カテゴリー
                            </th><th>
                                金額
                                </th></tr>        <tr class='anone4'><th class='hate2'>
                                借金
                                </th><th>
                                ".$i."
                                </th><th>
                                ".$u."
                                </th><th>
                                    ".$e."
                                    </th><th>
                                        ".$o."
                                        </th><th>
                                           ".$ka2."
                                            </th>
                                        </tr>";
                                        $kokos=$kokos-$ka;

                }
    
                else if("支出"==$a){
                    $a=1;
                    
                    
                    if($a==1){

                        $ka2=number_format($ka);

                        echo "<table> <tr class='anone5'><th>
                        支・借
                        </th><th>
                            年
                        </th><th>
                            月
                            </th><th>
                                日
                                </th><th>
                                    カテゴリー
                                    </th><th>
                                        金額
                                        </th></tr>        <tr class='anone4'><th class='hate'>
                                        支出
                                        </th><th>
                                        ".$i."
                                        </th><th>
                                        ".$u."
                                        </th><th>
                                            ".$e."
                                            </th><th>
                                                ".$o."
                                                </th><th>
                                                   ".$ka2."
                                                    </th>
                                                </tr>";
                                                $kokos=$kokos+$ka;

                    }
                
                
                        
                        }
                        else{
                    
                            $ka2=number_format($ka);

                            echo "<table> <tr class='anone3'><th>
                            支・借
                            </th><th>
                                年
                            </th><th>
                                月
                                </th><th>
                                    日
                                    </th><th>
                                        カテゴリー
                                        </th><th>
                                            金額
                                            </th></tr>        <tr class='anone4'><th class='hate2'>
                                            借金
                                            </th><th>
                                            ".$i."
                                            </th><th>
                                            ".$u."
                                            </th><th>
                                                ".$e."
                                                </th><th>
                                                    ".$o."
                                                    </th><th>
                                                       ".$ka2."
                                                        </th>
                                                    </tr>";
                                                    $kokos=$kokos-$ka;

                            }
                
            
}
$maboroshi=1+$maboroshi;
}
}


else if($_POST["a"]&&$_POST["e"]&&$_POST["d"]){
$fine=fopen("./syakkin.csv","r");
while($pix=fgetcsv($fine,1000)){

list($a,$i,$u,$e,$o,$ka)=$pix;
if($_POST["a"]==$i&&$_POST["d"]==$o&&$_POST["e"]==$ka){
    if($maboroshi==1&&"支出"==$a){
        $a=1;
        
        
        if($a==1){

            $ka2=number_format($ka);

            echo "<table> <tr class='anone5'><th>
            支・借
            </th><th>
                年
            </th><th>
                月
                </th><th>
                    日
                    </th><th>
                        カテゴリー
                        </th><th>
                            金額
                            </th></tr>        <tr class='anone4'><th class='hate'>
                            支出
                            </th><th>
                            ".$i."
                            </th><th>
                            ".$u."
                            </th><th>
                                ".$e."
                                </th><th>
                                    ".$o."
                                    </th><th>
                                       ".$ka2."
                                        </th>
                                    </tr>";




                                    $kokos=$kokos+$ka;

        }
    
    
            
            }
            else if($maboroshi==1){
        
                $ka2=number_format($ka);

                echo "<table> <tr class='anone3'><th>
                支・借
                </th><th>
                    年
                </th><th>
                    月
                    </th><th>
                        日
                        </th><th>
                            カテゴリー
                            </th><th>
                                金額
                                </th></tr>        <tr class='anone4'><th class='hate2'>
                                借金
                                </th><th>
                                ".$i."
                                </th><th>
                                ".$u."
                                </th><th>
                                    ".$e."
                                    </th><th>
                                        ".$o."
                                        </th><th>
                                           ".$ka2."
                                            </th>
                                        </tr>";
                                        $kokos=$kokos-$ka;

                }
    
                else if("支出"==$a){
                    $a=1;
                    
                    
                    if($a==1){

                        $ka2=number_format($ka);


                        echo "<table> <tr class='anone5'><th>
                        支・借
                        </th><th>
                            年
                        </th><th>
                            月
                            </th><th>
                                日
                                </th><th>
                                    カテゴリー
                                    </th><th>
                                        金額
                                        </th></tr>        <tr class='anone4'><th class='hate'>
                                        支出
                                        </th><th>
                                        ".$i."
                                        </th><th>
                                        ".$u."
                                        </th><th>
                                            ".$e."
                                            </th><th>
                                                ".$o."
                                                </th><th>
                                                   ".$ka2."
                                                    </th>
                                                </tr>";




                                                $kokos=$kokos+$ka;

                    }
                
                
                        
                        }
                        else{
                    
                            $ka2=number_format($ka);

                            echo "<table> <tr class='anone3'><th>
                            支・借
                            </th><th>
                                年
                            </th><th>
                                月
                                </th><th>
                                    日
                                    </th><th>
                                        カテゴリー
                                        </th><th>
                                            金額
                                            </th></tr>        <tr class='anone4'><th class='hate2'>
                                            借金
                                            </th><th>
                                            ".$i."
                                            </th><th>
                                            ".$u."
                                            </th><th>
                                                ".$e."
                                                </th><th>
                                                    ".$o."
                                                    </th><th>
                                                       ".$ka2."
                                                        </th>
                                                    </tr>";
                                                    $kokos=$kokos-$ka;

                            }
                
            
}
$maboroshi=1+$maboroshi;
}
}


else if($_POST["a"]&&$_POST["b"]&&$_POST["d"]){
$fine=fopen("./syakkin.csv","r");
while($pix=fgetcsv($fine,1000)){

list($a,$i,$u,$e,$o,$ka)=$pix;
if($_POST["a"]==$i&&$_POST["b"]==$u&&$_POST["d"]==$o){
    if($maboroshi==1&&"支出"==$a){
        $a=1;
        
        
        if($a==1){
            $ka2=number_format($ka);

            echo "<table> <tr class='anone5'><th>
            支・借
            </th><th>
                年
            </th><th>
                月
                </th><th>
                    日
                    </th><th>
                        カテゴリー
                        </th><th>
                            金額
                            </th></tr>        <tr class='anone4'><th class='hate'>
                            支出
                            </th><th>
                            ".$i."
                            </th><th>
                            ".$u."
                            </th><th>
                                ".$e."
                                </th><th>
                                    ".$o."
                                    </th><th>
                                       ".$ka2."
                                        </th>
                                    </tr>";
                                    $kokos=$kokos+$ka;

        }
    
    
            
            }
            else if($maboroshi==1){
        
                $ka2=number_format($ka);

                echo "<table> <tr class='anone3'><th>
                支・借
                </th><th>
                    年
                </th><th>
                    月
                    </th><th>
                        日
                        </th><th>
                            カテゴリー
                            </th><th>
                                金額
                                </th></tr>        <tr class='anone4'><th class='hate2'>
                                借金
                                </th><th>
                                ".$i."
                                </th><th>
                                ".$u."
                                </th><th>
                                    ".$e."
                                    </th><th>
                                        ".$o."
                                        </th><th>
                                           ".$ka2."
                                            </th>
                                        </tr>";
                                        $kokos=$kokos-$ka;

                }
    
                else if("支出"==$a){
                    $a=1;
                    
                    
                    if($a==1){


                    
                        $ka2=number_format($ka);



                        echo "<table> <tr class='anone5'><th>
                        支・借
                        </th><th>
                            年
                        </th><th>
                            月
                            </th><th>
                                日
                                </th><th>
                                    カテゴリー
                                    </th><th>
                                        金額
                                        </th></tr>        <tr class='anone4'><th class='hate'>
                                        支出
                                        </th><th>
                                        ".$i."
                                        </th><th>
                                        ".$u."
                                        </th><th>
                                            ".$e."
                                            </th><th>
                                                ".$o."
                                                </th><th>
                                                   ".$ka2."
                                                    </th>
                                                </tr>";
                                                $kokos=$kokos+$ka;

                    }
                
                
                        
                        }
                        else{
                    
                            $ka2=number_format($ka);

                            echo "<table> <tr class='anone3'><th>
                            支・借
                            </th><th>
                                年
                            </th><th>
                                月
                                </th><th>
                                    日
                                    </th><th>
                                        カテゴリー
                                        </th><th>
                                            金額
                                            </th></tr>        <tr class='anone4'><th class='hate2'>
                                            借金
                                            </th><th>
                                            ".$i."
                                            </th><th>
                                            ".$u."
                                            </th><th>
                                                ".$e."
                                                </th><th>
                                                    ".$o."
                                                    </th><th>
                                                       ".$ka2."
                                                        </th>
                                                    </tr>";
                                                    $kokos=$kokos-$ka;

                            }
                
            
}
$maboroshi=1+$maboroshi;
}
}


else if($_POST["a"]&&$_POST["b"]&&$_POST["e"]){

$fine=fopen("./syakkin.csv","r");
while($pix=fgetcsv($fine,1000)){

list($a,$i,$u,$e,$o,$ka)=$pix;
if($_POST["a"]==$i&&$_POST["b"]==$u&&$_POST["e"]==$ka){
    if($maboroshi==1&&"支出"==$a){
        $a=1;
        
        
        if($a==1){

            $ka2=number_format($ka);


            echo "<table> <tr class='anone5'><th>
            支・借
            </th><th>
                年
            </th><th>
                月
                </th><th>
                    日
                    </th><th>
                        カテゴリー
                        </th><th>
                            金額
                            </th></tr>        <tr class='anone4'><th class='hate'>
                            支出
                            </th><th>
                            ".$i."
                            </th><th>
                            ".$u."
                            </th><th>
                                ".$e."
                                </th><th>
                                    ".$o."
                                    </th><th>
                                       ".$ka2."
                                        </th>
                                    </tr>";
                                    $kokos=$kokos+$ka;

        }
    
    
            
            }
            else if($maboroshi==1){
        
                $ka2=number_format($ka);

                echo "<table> <tr class='anone3'><th>
                支・借
                </th><th>
                    年
                </th><th>
                    月
                    </th><th>
                        日
                        </th><th>
                            カテゴリー
                            </th><th>
                                金額
                                </th></tr>        <tr class='anone4'><th class='hate2'>
                                借金
                                </th><th>
                                ".$i."
                                </th><th>
                                ".$u."
                                </th><th>
                                    ".$e."
                                    </th><th>
                                        ".$o."
                                        </th><th>
                                           ".$ka2."
                                            </th>
                                        </tr>";
                                        $kokos=$kokos-$ka;

                }
    
                else if("支出"==$a){
                    $a=1;
                    
                    
                    if($a==1){

                        $ka2=number_format($ka);


                        echo "<table> <tr class='anone5'><th>
                        支・借
                        </th><th>
                            年
                        </th><th>
                            月
                            </th><th>
                                日
                                </th><th>
                                    カテゴリー
                                    </th><th>
                                        金額
                                        </th></tr>        <tr class='anone4'><th class='hate'>
                                        支出
                                        </th><th>
                                        ".$i."
                                        </th><th>
                                        ".$u."
                                        </th><th>
                                            ".$e."
                                            </th><th>
                                                ".$o."
                                                </th><th>
                                                   ".$ka2."
                                                    </th>
                                                </tr>";
                                                $kokos=$kokos+$ka;

                    }
                
                
                        
                        }
                        else{
                    
                            $ka2=number_format($ka);

                            echo "<table> <tr class='anone3'><th>
                            支・借
                            </th><th>
                                年
                            </th><th>
                                月
                                </th><th>
                                    日
                                    </th><th>
                                        カテゴリー
                                        </th><th>
                                            金額
                                            </th></tr>        <tr class='anone4'><th class='hate2'>
                                            借金
                                            </th><th>
                                            ".$i."
                                            </th><th>
                                            ".$u."
                                            </th><th>
                                                ".$e."
                                                </th><th>
                                                    ".$o."
                                                    </th><th>
                                                       ".$ka2."
                                                        </th>
                                                    </tr>";
                                                    $kokos=$kokos-$ka;

                            }
                
            
}
$maboroshi=1+$maboroshi;
}
}




else if($_POST["b"]&&$_POST["c"]&&$_POST["d"]){
$fine=fopen("./syakkin.csv","r");
while($pix=fgetcsv($fine,1000)){

list($a,$i,$u,$e,$o,$ka)=$pix;
if($_POST["b"]==$u&&$_POST["c"]==$e&&$_POST["d"]==$o){
    if($maboroshi==1&&"支出"==$a){
        $a=1;
        
        
        if($a==1){

            $ka2=number_format($ka);


            echo "<table> <tr class='anone5'><th>
            支・借
            </th><th>
                年
            </th><th>
                月
                </th><th>
                    日
                    </th><th>
                        カテゴリー
                        </th><th>
                            金額
                            </th></tr>        <tr class='anone4'><th class='hate'>
                            支出
                            </th><th>
                            ".$i."
                            </th><th>
                            ".$u."
                            </th><th>
                                ".$e."
                                </th><th>
                                    ".$o."
                                    </th><th>
                                       ".$ka2."
                                        </th>
                                    </tr>";
                                    $kokos=$kokos+$ka;

        }
    
    
            
            }
            else if($maboroshi==1){
        
                $ka2=number_format($ka);

                echo "<table> <tr class='anone3'><th>
                支・借
                </th><th>
                    年
                </th><th>
                    月
                    </th><th>
                        日
                        </th><th>
                            カテゴリー
                            </th><th>
                                金額
                                </th></tr>        <tr class='anone4'><th class='hate2'>
                                借金
                                </th><th>
                                ".$i."
                                </th><th>
                                ".$u."
                                </th><th>
                                    ".$e."
                                    </th><th>
                                        ".$o."
                                        </th><th>
                                           ".$ka2."
                                            </th>
                                        </tr>";
                                        $kokos=$kokos-$ka;

                }
    
                else if("支出"==$a){
                    $a=1;
                    
                    
                    if($a==1){


                        $ka2=number_format($ka);




                        echo "<table> <tr class='anone5'><th>
                        支・借
                        </th><th>
                            年
                        </th><th>
                            月
                            </th><th>
                                日
                                </th><th>
                                    カテゴリー
                                    </th><th>
                                        金額
                                        </th></tr>        <tr class='anone4'><th class='hate'>
                                        支出
                                        </th><th>
                                        ".$i."
                                        </th><th>
                                        ".$u."
                                        </th><th>
                                            ".$e."
                                            </th><th>
                                                ".$o."
                                                </th><th>
                                                   ".$ka2."
                                                    </th>
                                                </tr>";
                                                $kokos=$kokos+$ka;

                    }
                
                
                        
                        }
                        else{
                    
                            $ka2=number_format($ka);


                            echo "<table> <tr class='anone3'><th>
                            支・借
                            </th><th>
                                年
                            </th><th>
                                月
                                </th><th>
                                    日
                                    </th><th>
                                        カテゴリー
                                        </th><th>
                                            金額
                                            </th></tr>        <tr class='anone4'><th class='hate2'>
                                            借金
                                            </th><th>
                                            ".$i."
                                            </th><th>
                                            ".$u."
                                            </th><th>
                                                ".$e."
                                                </th><th>
                                                    ".$o."
                                                    </th><th>
                                                       ".$ka2."
                                                        </th>
                                                    </tr>";
                                                    $kokos=$kokos-$ka;

                            }
                
            
}
$maboroshi=1+$maboroshi;
}
}


else if($_POST["b"]&&$_POST["c"]&&$_POST["e"]){
$fine=fopen("./syakkin.csv","r");
while($pix=fgetcsv($fine,1000)){

list($a,$i,$u,$e,$o,$ka)=$pix;
if($_POST["b"]==$u&&$_POST["c"]==$e&&$_POST["e"]==$ka){
    if($maboroshi==1&&"支出"==$a){
        $a=1;
        
        
        if($a==1){

            $ka2=number_format($ka);


            echo "<table> <tr class='anone5'><th>
            支・借
            </th><th>
                年
            </th><th>
                月
                </th><th>
                    日
                    </th><th>
                        カテゴリー
                        </th><th>
                            金額
                            </th></tr>        <tr class='anone4'><th class='hate'>
                            支出
                            </th><th>
                            ".$i."
                            </th><th>
                            ".$u."
                            </th><th>
                                ".$e."
                                </th><th>
                                    ".$o."
                                    </th><th>
                                       ".$ka2."
                                        </th>
                                    </tr>";


                                    $kokos=$kokos+$ka;

        }
    
    
            
            }
            else if($maboroshi==1){
        
                $ka2=number_format($ka);


                echo "<table> <tr class='anone3'><th>
                支・借
                </th><th>
                    年
                </th><th>
                    月
                    </th><th>
                        日
                        </th><th>
                            カテゴリー
                            </th><th>
                                金額
                                </th></tr>        <tr class='anone4'><th class='hate2'>
                                借金
                                </th><th>
                                ".$i."
                                </th><th>
                                ".$u."
                                </th><th>
                                    ".$e."
                                    </th><th>
                                        ".$o."
                                        </th><th>
                                           ".$ka2."
                                            </th>
                                        </tr>";
                                        $kokos=$kokos-$ka;

                }
    
                else if("支出"==$a){
                    $a=1;
                    
                    
                    if($a==1){
                        $ka2=number_format($ka);

                        echo "<table> <tr class='anone5'><th>
                        支・借
                        </th><th>
                            年
                        </th><th>
                            月
                            </th><th>
                                日
                                </th><th>
                                    カテゴリー
                                    </th><th>
                                        金額
                                        </th></tr>        <tr class='anone4'><th class='hate'>
                                        支出
                                        </th><th>
                                        ".$i."
                                        </th><th>
                                        ".$u."
                                        </th><th>
                                            ".$e."
                                            </th><th>
                                                ".$o."
                                                </th><th>
                                                   ".$ka2."
                                                    </th>
                                                </tr>";
                                                $kokos=$kokos+$ka;

                    }
                
                
                        
                        }
                        else{
                    
                            $ka2=number_format($ka);


                            echo "<table> <tr class='anone3'><th>
                            支・借
                            </th><th>
                                年
                            </th><th>
                                月
                                </th><th>
                                    日
                                    </th><th>
                                        カテゴリー
                                        </th><th>
                                            金額
                                            </th></tr>        <tr class='anone4'><th class='hate2'>
                                            借金
                                            </th><th>
                                            ".$i."
                                            </th><th>
                                            ".$u."
                                            </th><th>
                                                ".$e."
                                                </th><th>
                                                    ".$o."
                                                    </th><th>
                                                       ".$ka2."
                                                        </th>
                                                    </tr>";
                                                    $kokos=$kokos-$ka;

                            }
                
            
}
$maboroshi=1+$maboroshi;
}
}



else if($_POST["b"]&&$_POST["d"]&&$_POST["e"]){

$fine=fopen("./syakkin.csv","r");
while($pix=fgetcsv($fine,1000)){

list($a,$i,$u,$e,$o,$ka)=$pix;
if($_POST["b"]==$u&&$_POST["d"]==$o&&$_POST["e"]==$ka){
    if($maboroshi==1&&"支出"==$a){
        $a=1;
        
        
        if($a==1){
            $ka2=number_format($ka);

            echo "<table> <tr class='anone5'><th>
            支・借
            </th><th>
                年
            </th><th>
                月
                </th><th>
                    日
                    </th><th>
                        カテゴリー
                        </th><th>
                            金額
                            </th></tr>        <tr class='anone4'><th class='hate'>
                            支出
                            </th><th>
                            ".$i."
                            </th><th>
                            ".$u."
                            </th><th>
                                ".$e."
                                </th><th>
                                    ".$o."
                                    </th><th>
                                       ".$ka2."
                                        </th>
                                    </tr>";
                                    $kokos=$kokos+$ka;

        }
    
    
            
            }
            else if($maboroshi==1){
        
                $ka2=number_format($ka);

                echo "<table> <tr class='anone3'><th>
                支・借
                </th><th>
                    年
                </th><th>
                    月
                    </th><th>
                        日
                        </th><th>
                            カテゴリー
                            </th><th>
                                金額
                                </th></tr>        <tr class='anone4'><th class='hate2'>
                                借金
                                </th><th>
                                ".$i."
                                </th><th>
                                ".$u."
                                </th><th>
                                    ".$e."
                                    </th><th>
                                        ".$o."
                                        </th><th>
                                           ".$ka2."
                                            </th>
                                        </tr>";
                                        $kokos=$kokos-$ka;

                }
    
                else if("支出"==$a){
                    $a=1;
                    
                    
                    if($a==1){
                        $ka2=number_format($ka);

                        echo "<table> <tr class='anone5'><th>
                        支・借
                        </th><th>
                            年
                        </th><th>
                            月
                            </th><th>
                                日
                                </th><th>
                                    カテゴリー
                                    </th><th>
                                        金額
                                        </th></tr>        <tr class='anone4'><th class='hate'>
                                        支出
                                        </th><th>
                                        ".$i."
                                        </th><th>
                                        ".$u."
                                        </th><th>
                                            ".$e."
                                            </th><th>
                                                ".$o."
                                                </th><th>
                                                   ".$ka2."
                                                    </th>
                                                </tr>";

                                                $kokos=$kokos+$ka;

                    }
                
                
                        
                        }
                        else{
                    
                            $ka2=number_format($ka);

                            echo "<table> <tr class='anone3'><th>
                            支・借
                            </th><th>
                                年
                            </th><th>
                                月
                                </th><th>
                                    日
                                    </th><th>
                                        カテゴリー
                                        </th><th>
                                            金額
                                            </th></tr>        <tr class='anone4'><th class='hate2'>
                                            借金
                                            </th><th>
                                            ".$i."
                                            </th><th>
                                            ".$u."
                                            </th><th>
                                                ".$e."
                                                </th><th>
                                                    ".$o."
                                                    </th><th>
                                                       ".$ka2."
                                                        </th>
                                                    </tr>";
                                                    $kokos=$kokos-$ka;

                            }
                
            
}
$maboroshi=1+$maboroshi;
}
}

else if($_POST["c"]&&$_POST["d"]&&$_POST["e"]){

$fine=fopen("./syakkin.csv","r");
while($pix=fgetcsv($fine,1000)){

list($a,$i,$u,$e,$o,$ka)=$pix;
if($_POST["c"]==$e&&$_POST["d"]==$o&&$_POST["e"]==$ka){
    if($maboroshi==1&&"支出"==$a){
        $a=1;
        
        
        if($a==1){

            $ka2=number_format($ka);



            echo "<table> <tr class='anone5'><th>
            支・借
            </th><th>
                年
            </th><th>
                月
                </th><th>
                    日
                    </th><th>
                        カテゴリー
                        </th><th>
                            金額
                            </th></tr>        <tr class='anone4'><th class='hate'>
                            支出
                            </th><th>
                            ".$i."
                            </th><th>
                            ".$u."
                            </th><th>
                                ".$e."
                                </th><th>
                                    ".$o."
                                    </th><th>
                                       ".$ka2."
                                        </th>
                                    </tr>";
                                    $kokos=$kokos+$ka;

        }
    
    
            
            }
            else if($maboroshi==1){
        
                $ka2=number_format($ka);



                echo "<table> <tr class='anone3'><th>
                支・借
                </th><th>
                    年
                </th><th>
                    月
                    </th><th>
                        日
                        </th><th>
                            カテゴリー
                            </th><th>
                                金額
                                </th></tr>        <tr class='anone4'><th class='hate2'>
                                借金
                                </th><th>
                                ".$i."
                                </th><th>
                                ".$u."
                                </th><th>
                                    ".$e."
                                    </th><th>
                                        ".$o."
                                        </th><th>
                                           ".$ka2."
                                            </th>
                                        </tr>";
                                        $kokos=$kokos-$ka;

                }
    
                else if("支出"==$a){
                    $a=1;
                    
                    
                    if($a==1){

                        $ka2=number_format($ka);


                        echo "<table> <tr class='anone5'><th>
                        支・借
                        </th><th>
                            年
                        </th><th>
                            月
                            </th><th>
                                日
                                </th><th>
                                    カテゴリー
                                    </th><th>
                                        金額
                                        </th></tr>        <tr class='anone4'><th class='hate'>
                                        支出
                                        </th><th>
                                        ".$i."
                                        </th><th>
                                        ".$u."
                                        </th><th>
                                            ".$e."
                                            </th><th>
                                                ".$o."
                                                </th><th>
                                                   ".$ka2."
                                                    </th>
                                                </tr>";




                                                $kokos=$kokos+$ka;

                    }
                
                
                        
                        }
                        else{
                    
                            $ka2=number_format($ka);



                            echo "<table> <tr class='anone3'><th>
                            支・借
                            </th><th>
                                年
                            </th><th>
                                月
                                </th><th>
                                    日
                                    </th><th>
                                        カテゴリー
                                        </th><th>
                                            金額
                                            </th></tr>        <tr class='anone4'><th class='hate2'>
                                            借金
                                            </th><th>
                                            ".$i."
                                            </th><th>
                                            ".$u."
                                            </th><th>
                                                ".$e."
                                                </th><th>
                                                    ".$o."
                                                    </th><th>
                                                       ".$ka2."
                                                        </th>
                                                    </tr>";
                                                    $kokos=$kokos-$ka;

                            }
                
            
}
$maboroshi=1+$maboroshi;
}
}

else if($_POST["a"]&&$_POST["b"]){
$fine=fopen("./syakkin.csv","r");
while($pix=fgetcsv($fine,1000)){

list($a,$i,$u,$e,$o,$ka)=$pix;
if($_POST["a"]==$i&&$_POST["b"]==$u){
    if($maboroshi==1&&"支出"==$a){
        $a=1;
        
        
        if($a==1){


            $ka2=number_format($ka);


            echo "<table> <tr class='anone5'><th>
            支・借
            </th><th>
                年
            </th><th>
                月
                </th><th>
                    日
                    </th><th>
                        カテゴリー
                        </th><th>
                            金額
                            </th></tr>        <tr class='anone4'><th class='hate'>
                            支出
                            </th><th>
                            ".$i."
                            </th><th>
                            ".$u."
                            </th><th>
                                ".$e."
                                </th><th>
                                    ".$o."
                                    </th><th>
                                       ".$ka2."
                                        </th>
                                    </tr>";
                                    $kokos=$kokos+$ka;

        }
    
    
            
            }
            else if($maboroshi==1){
        
                $ka2=number_format($ka);

                echo "<table> <tr class='anone3'><th>
                支・借
                </th><th>
                    年
                </th><th>
                    月
                    </th><th>
                        日
                        </th><th>
                            カテゴリー
                            </th><th>
                                金額
                                </th></tr>        <tr class='anone4'><th class='hate2'>
                                借金
                                </th><th>
                                ".$i."
                                </th><th>
                                ".$u."
                                </th><th>
                                    ".$e."
                                    </th><th>
                                        ".$o."
                                        </th><th>
                                           ".$ka2."
                                            </th>
                                        </tr>";
                                        $kokos=$kokos-$ka;

                }
    
                else if("支出"==$a){
                    $a=1;
                    
                    
                    if($a==1){

                        $ka2=number_format($ka);


                        echo "<table> <tr class='anone5'><th>
                        支・借
                        </th><th>
                            年
                        </th><th>
                            月
                            </th><th>
                                日
                                </th><th>
                                    カテゴリー
                                    </th><th>
                                        金額
                                        </th></tr>        <tr class='anone4'><th class='hate'>
                                        支出
                                        </th><th>
                                        ".$i."
                                        </th><th>
                                        ".$u."
                                        </th><th>
                                            ".$e."
                                            </th><th>
                                                ".$o."
                                                </th><th>
                                                   ".$ka2."
                                                    </th>
                                                </tr>";
                                                $kokos=$kokos+$ka;

                    }
                
                
                        
                        }
                        else{
                    
                            $ka2=number_format($ka);

                            echo "<table> <tr class='anone3'><th>
                            支・借
                            </th><th>
                                年
                            </th><th>
                                月
                                </th><th>
                                    日
                                    </th><th>
                                        カテゴリー
                                        </th><th>
                                            金額
                                            </th></tr>        <tr class='anone4'><th class='hate2'>
                                            借金
                                            </th><th>
                                            ".$i."
                                            </th><th>
                                            ".$u."
                                            </th><th>
                                                ".$e."
                                                </th><th>
                                                    ".$o."
                                                    </th><th>
                                                       ".$ka2."
                                                        </th>
                                                    </tr>";
                                                    $kokos=$kokos-$ka;

                            }
                
            
}
$maboroshi=1+$maboroshi;
}
}





else if($_POST["a"]&&$_POST["c"]){
$fine=fopen("./syakkin.csv","r");
while($pix=fgetcsv($fine,1000)){

list($a,$i,$u,$e,$o,$ka)=$pix;
if($_POST["a"]==$i&&$_POST["c"]==$e){
    if($maboroshi==1&&"支出"==$a){
        $a=1;
        
        
        if($a==1){
            $ka2=number_format($ka);

            echo "<table> <tr class='anone5'><th>
            支・借
            </th><th>
                年
            </th><th>
                月
                </th><th>
                    日
                    </th><th>
                        カテゴリー
                        </th><th>
                            金額
                            </th></tr>        <tr class='anone4'><th class='hate'>
                            支出
                            </th><th>
                            ".$i."
                            </th><th>
                            ".$u."
                            </th><th>
                                ".$e."
                                </th><th>
                                    ".$o."
                                    </th><th>
                                       ".$ka2."
                                        </th>
                                    </tr>";
                                    $kokos=$kokos+$ka;

        }
    
    
            
            }
            else if($maboroshi==1){
        
                $ka2=number_format($ka);

                echo "<table> <tr class='anone3'><th>
                支・借
                </th><th>
                    年
                </th><th>
                    月
                    </th><th>
                        日
                        </th><th>
                            カテゴリー
                            </th><th>
                                金額
                                </th></tr>        <tr class='anone4'><th class='hate2'>
                                借金
                                </th><th>
                                ".$i."
                                </th><th>
                                ".$u."
                                </th><th>
                                    ".$e."
                                    </th><th>
                                        ".$o."
                                        </th><th>
                                           ".$ka2."
                                            </th>
                                        </tr>";
                                        $kokos=$kokos-$ka;

                }
    
                else if("支出"==$a){
                    $a=1;
                    
                    
                    if($a==1){
                        $ka2=number_format($ka);




                        echo "<table> <tr class='anone5'><th>
                        支・借
                        </th><th>
                            年
                        </th><th>
                            月
                            </th><th>
                                日
                                </th><th>
                                    カテゴリー
                                    </th><th>
                                        金額
                                        </th></tr>        <tr class='anone4'><th class='hate'>
                                        支出
                                        </th><th>
                                        ".$i."
                                        </th><th>
                                        ".$u."
                                        </th><th>
                                            ".$e."
                                            </th><th>
                                                ".$o."
                                                </th><th>
                                                   ".$ka2."
                                                    </th>
                                                </tr>";
                                                $kokos=$kokos+$ka;

                    }
                
                
                        
                        }
                        else{
                    
                            $ka2=number_format($ka);

                            echo "<table> <tr class='anone3'><th>
                            支・借
                            </th><th>
                                年
                            </th><th>
                                月
                                </th><th>
                                    日
                                    </th><th>
                                        カテゴリー
                                        </th><th>
                                            金額
                                            </th></tr>        <tr class='anone4'><th class='hate2'>
                                            借金
                                            </th><th>
                                            ".$i."
                                            </th><th>
                                            ".$u."
                                            </th><th>
                                                ".$e."
                                                </th><th>
                                                    ".$o."
                                                    </th><th>
                                                       ".$ka2."
                                                        </th>
                                                    </tr>";
                                                    $kokos=$kokos-$ka;

                            }
                
            
}
$maboroshi=1+$maboroshi;
}
}


else if($_POST["a"]&&$_POST["d"]){
$fine=fopen("./syakkin.csv","r");
while($pix=fgetcsv($fine,1000)){

list($a,$i,$u,$e,$o,$ka)=$pix;
if($_POST["a"]==$i&&$_POST["d"]==$o){
    if($maboroshi==1&&"支出"==$a){
        $a=1;
        
        
        if($a==1){

            $ka2=number_format($ka);


            echo "<table> <tr class='anone5'><th>
            支・借
            </th><th>
                年
            </th><th>
                月
                </th><th>
                    日
                    </th><th>
                        カテゴリー
                        </th><th>
                            金額
                            </th></tr>        <tr class='anone4'><th class='hate'>
                            支出
                            </th><th>
                            ".$i."
                            </th><th>
                            ".$u."
                            </th><th>
                                ".$e."
                                </th><th>
                                    ".$o."
                                    </th><th>
                                       ".$ka2."
                                        </th>
                                    </tr>";
                                    $kokos=$kokos+$ka;

        }
    
    
            
            }
            else if($maboroshi==1){
        
                $ka2=number_format($ka);

                echo "<table> <tr class='anone3'><th>
                支・借
                </th><th>
                    年
                </th><th>
                    月
                    </th><th>
                        日
                        </th><th>
                            カテゴリー
                            </th><th>
                                金額
                                </th></tr>        <tr class='anone4'><th class='hate2'>
                                借金
                                </th><th>
                                ".$i."
                                </th><th>
                                ".$u."
                                </th><th>
                                    ".$e."
                                    </th><th>
                                        ".$o."
                                        </th><th>
                                           ".$ka2."
                                            </th>
                                        </tr>";
                                        $kokos=$kokos-$ka;

                }
    
                else if("支出"==$a){
                    $a=1;
                    
                    
                    if($a==1){

                        $ka2=number_format($ka);

                        echo "<table> <tr class='anone5'><th>
                        支・借
                        </th><th>
                            年
                        </th><th>
                            月
                            </th><th>
                                日
                                </th><th>
                                    カテゴリー
                                    </th><th>
                                        金額
                                        </th></tr>        <tr class='anone4'><th class='hate'>
                                        支出
                                        </th><th>
                                        ".$i."
                                        </th><th>
                                        ".$u."
                                        </th><th>
                                            ".$e."
                                            </th><th>
                                                ".$o."
                                                </th><th>
                                                   ".$ka2."
                                                    </th>
                                                </tr>";
                                                $kokos=$kokos+$ka;

                    }
                
                
                        
                        }
                        else{
                    
                            $ka2=number_format($ka);

                            echo "<table> <tr class='anone3'><th>
                            支・借
                            </th><th>
                                年
                            </th><th>
                                月
                                </th><th>
                                    日
                                    </th><th>
                                        カテゴリー
                                        </th><th>
                                            金額
                                            </th></tr>        <tr class='anone4'><th class='hate2'>
                                            借金
                                            </th><th>
                                            ".$i."
                                            </th><th>
                                            ".$u."
                                            </th><th>
                                                ".$e."
                                                </th><th>
                                                    ".$o."
                                                    </th><th>
                                                       ".$ka2."
                                                        </th>
                                                    </tr>";
                                                    $kokos=$kokos-$ka;

                            }
                
            
}
$maboroshi=1+$maboroshi;
}
}




else if($_POST["a"]&&$_POST["e"]){
$fine=fopen("./syakkin.csv","r");
while($pix=fgetcsv($fine,1000)){

list($a,$i,$u,$e,$o,$ka)=$pix;
if($_POST["a"]==$i&&$_POST["e"]==$ka){
    if($maboroshi==1&&"支出"==$a){
        $a=1;
        
        
        if($a==1){
            $ka2=number_format($ka);

            echo "<table> <tr class='anone5'><th>
            支・借
            </th><th>
                年
            </th><th>
                月
                </th><th>
                    日
                    </th><th>
                        カテゴリー
                        </th><th>
                            金額
                            </th></tr>        <tr class='anone4'><th class='hate'>
                            支出
                            </th><th>
                            ".$i."
                            </th><th>
                            ".$u."
                            </th><th>
                                ".$e."
                                </th><th>
                                    ".$o."
                                    </th><th>
                                       ".$ka2."
                                        </th>
                                    </tr>";
                                    $kokos=$kokos+$ka;

        }
    
    
            
            }
            else if($maboroshi==1){
        
                $ka2=number_format($ka);

                echo "<table> <tr class='anone3'><th>
                支・借
                </th><th>
                    年
                </th><th>
                    月
                    </th><th>
                        日
                        </th><th>
                            カテゴリー
                            </th><th>
                                金額
                                </th></tr>        <tr class='anone4'><th class='hate2'>
                                借金
                                </th><th>
                                ".$i."
                                </th><th>
                                ".$u."
                                </th><th>
                                    ".$e."
                                    </th><th>
                                        ".$o."
                                        </th><th>
                                           ".$ka2."
                                            </th>
                                        </tr>";
                                        $kokos=$kokos-$ka;

                }
    
                else if("支出"==$a){
                    $a=1;
                    
                    
                    if($a==1){
                        $ka2=number_format($ka);

                        echo "<table> <tr class='anone5'><th>
                        支・借
                        </th><th>
                            年
                        </th><th>
                            月
                            </th><th>
                                日
                                </th><th>
                                    カテゴリー
                                    </th><th>
                                        金額
                                        </th></tr>        <tr class='anone4'><th class='hate'>
                                        支出
                                        </th><th>
                                        ".$i."
                                        </th><th>
                                        ".$u."
                                        </th><th>
                                            ".$e."
                                            </th><th>
                                                ".$o."
                                                </th><th>
                                                   ".$ka2."
                                                    </th>
                                                </tr>";
                                                $kokos=$kokos+$ka;

                    }
                
                
                        
                        }
                        else{
                            $ka2=number_format($ka);

                
                            echo "<table> <tr class='anone3'><th>
                            支・借
                            </th><th>
                                年
                            </th><th>
                                月
                                </th><th>
                                    日
                                    </th><th>
                                        カテゴリー
                                        </th><th>
                                            金額
                                            </th></tr>        <tr class='anone4'><th class='hate2'>
                                            借金
                                            </th><th>
                                            ".$i."
                                            </th><th>
                                            ".$u."
                                            </th><th>
                                                ".$e."
                                                </th><th>
                                                    ".$o."
                                                    </th><th>
                                                       ".$ka2."
                                                        </th>
                                                    </tr>";




                                                    $kokos=$kokos-$ka;

                            }
                
            
}
$maboroshi=1+$maboroshi;
}
}


else if($_POST["b"]&&$_POST["c"]){

$fine=fopen("./syakkin.csv","r");
while($pix=fgetcsv($fine,1000)){

list($a,$i,$u,$e,$o,$ka)=$pix;
if($_POST["b"]==$u&&$_POST["c"]==$e){
    if($maboroshi==1&&"支出"==$a){
        $a=1;
        
        
        if($a==1){

            $ka2=number_format($ka);

            echo "<table> <tr class='anone5'><th>
            支・借
            </th><th>
                年
            </th><th>
                月
                </th><th>
                    日
                    </th><th>
                        カテゴリー
                        </th><th>
                            金額
                            </th></tr>        <tr class='anone4'><th class='hate'>
                            支出
                            </th><th>
                            ".$i."
                            </th><th>
                            ".$u."
                            </th><th>
                                ".$e."
                                </th><th>
                                    ".$o."
                                    </th><th>
                                       ".$ka2."
                                        </th>
                                    </tr>";




                                    $kokos=$kokos+$ka;

        }
    
    
            
            }
            else if($maboroshi==1){
        
                $ka2=number_format($ka);


                echo "<table> <tr class='anone3'><th>
                支・借
                </th><th>
                    年
                </th><th>
                    月
                    </th><th>
                        日
                        </th><th>
                            カテゴリー
                            </th><th>
                                金額
                                </th></tr>        <tr class='anone4'><th class='hate2'>
                                借金
                                </th><th>
                                ".$i."
                                </th><th>
                                ".$u."
                                </th><th>
                                    ".$e."
                                    </th><th>
                                        ".$o."
                                        </th><th>
                                           ".$ka2."
                                            </th>
                                        </tr>";
                                        $kokos=$kokos-$ka;

                }
    
                else if("支出"==$a){
                    $a=1;
                    
                    
                    if($a==1){

                        $ka2=number_format($ka);

                        echo "<table> <tr class='anone5'><th>
                        支・借
                        </th><th>
                            年
                        </th><th>
                            月
                            </th><th>
                                日
                                </th><th>
                                    カテゴリー
                                    </th><th>
                                        金額
                                        </th></tr>        <tr class='anone4'><th class='hate'>
                                        支出
                                        </th><th>
                                        ".$i."
                                        </th><th>
                                        ".$u."
                                        </th><th>
                                            ".$e."
                                            </th><th>
                                                ".$o."
                                                </th><th>
                                                   ".$ka2."
                                                    </th>
                                                </tr>";
                                                $kokos=$kokos+$ka;

                    }
                
                
                        
                        }
                        else{
                    
                            $ka2=number_format($ka);


                            echo "<table> <tr class='anone3'><th>
                            支・借
                            </th><th>
                                年
                            </th><th>
                                月
                                </th><th>
                                    日
                                    </th><th>
                                        カテゴリー
                                        </th><th>
                                            金額
                                            </th></tr>        <tr class='anone4'><th class='hate2'>
                                            借金
                                            </th><th>
                                            ".$i."
                                            </th><th>
                                            ".$u."
                                            </th><th>
                                                ".$e."
                                                </th><th>
                                                    ".$o."
                                                    </th><th>
                                                       ".$ka2."
                                                        </th>
                                                    </tr>";
                                                    $kokos=$kokos-$ka;

                            }
                
            
}
$maboroshi=1+$maboroshi;
}
}

else if($_POST["c"]&&$_POST["d"]){
$fine=fopen("./syakkin.csv","r");
while($pix=fgetcsv($fine,1000)){

list($a,$i,$u,$e,$o,$ka)=$pix;
if($_POST["c"]==$e&&$_POST["d"]==$o){
    if($maboroshi==1&&"支出"==$a){
        $a=1;
        
        
        if($a==1){


            $ka2=number_format($ka);

            echo "<table> <tr class='anone5'><th>
            支・借
            </th><th>
                年
            </th><th>
                月
                </th><th>
                    日
                    </th><th>
                        カテゴリー
                        </th><th>
                            金額
                            </th></tr>        <tr class='anone4'><th class='hate'>
                            支出
                            </th><th>
                            ".$i."
                            </th><th>
                            ".$u."
                            </th><th>
                                ".$e."
                                </th><th>
                                    ".$o."
                                    </th><th>
                                       ".$ka2."
                                        </th>
                                    </tr>";
                                    $kokos=$kokos+$ka;

        }
    
    
            
            }
            else if($maboroshi==1){
                $ka2=number_format($ka);

    
                echo "<table> <tr class='anone3'><th>
                支・借
                </th><th>
                    年
                </th><th>
                    月
                    </th><th>
                        日
                        </th><th>
                            カテゴリー
                            </th><th>
                                金額
                                </th></tr>        <tr class='anone4'><th class='hate2'>
                                借金
                                </th><th>
                                ".$i."
                                </th><th>
                                ".$u."
                                </th><th>
                                    ".$e."
                                    </th><th>
                                        ".$o."
                                        </th><th>
                                           ".$ka2."
                                            </th>
                                        </tr>";
                                        $kokos=$kokos-$ka;

                }
    
                else if("支出"==$a){
                    $a=1;
                    
                    
                    if($a==1){
                        $ka2=number_format($ka);

                        echo "<table> <tr class='anone5'><th>
                        支・借
                        </th><th>
                            年
                        </th><th>
                            月
                            </th><th>
                                日
                                </th><th>
                                    カテゴリー
                                    </th><th>
                                        金額
                                        </th></tr>        <tr class='anone4'><th class='hate'>
                                        支出
                                        </th><th>
                                        ".$i."
                                        </th><th>
                                        ".$u."
                                        </th><th>
                                            ".$e."
                                            </th><th>
                                                ".$o."
                                                </th><th>
                                                   ".$ka2."
                                                    </th>
                                                </tr>";



                                                $kokos=$kokos+$ka;

                    }
                
                
                        
                        }
                        else{
                    
                            $ka2=number_format($ka);

                            echo "<table> <tr class='anone3'><th>
                            支・借
                            </th><th>
                                年
                            </th><th>
                                月
                                </th><th>
                                    日
                                    </th><th>
                                        カテゴリー
                                        </th><th>
                                            金額
                                            </th></tr>        <tr class='anone4'><th class='hate2'>
                                            借金
                                            </th><th>
                                            ".$i."
                                            </th><th>
                                            ".$u."
                                            </th><th>
                                                ".$e."
                                                </th><th>
                                                    ".$o."
                                                    </th><th>
                                                       ".$ka2."
                                                        </th>
                                                    </tr>";
                                                    $kokos=$kokos-$ka;

                            }
                
            
}
$maboroshi=1+$maboroshi;
}
}



else if($_POST["c"]&&$_POST["e"]){

$fine=fopen("./syakkin.csv","r");
while($pix=fgetcsv($fine,1000)){

list($a,$i,$u,$e,$o,$ka)=$pix;
if($_POST["c"]==$e&&$_POST["e"]==$ka){
    if($maboroshi==1&&"支出"==$a){
        $a=1;
        
        
        if($a==1){
            $ka2=number_format($ka);

            echo "<table> <tr class='anone5'><th>
            支・借
            </th><th>
                年
            </th><th>
                月
                </th><th>
                    日
                    </th><th>
                        カテゴリー
                        </th><th>
                            金額
                            </th></tr>        <tr class='anone4'><th class='hate'>
                            支出
                            </th><th>
                            ".$i."
                            </th><th>
                            ".$u."
                            </th><th>
                                ".$e."
                                </th><th>
                                    ".$o."
                                    </th><th>
                                       ".$ka2."
                                        </th>
                                    </tr>";
                                    $kokos=$kokos+$ka;

        }
    
    
            
            }
            else if($maboroshi==1){
                $ka2=number_format($ka);

    
                echo "<table> <tr class='anone3'><th>
                支・借
                </th><th>
                    年
                </th><th>
                    月
                    </th><th>
                        日
                        </th><th>
                            カテゴリー
                            </th><th>
                                金額
                                </th></tr>        <tr class='anone4'><th class='hate2'>
                                借金
                                </th><th>
                                ".$i."
                                </th><th>
                                ".$u."
                                </th><th>
                                    ".$e."
                                    </th><th>
                                        ".$o."
                                        </th><th>
                                           ".$ka2."
                                            </th>
                                        </tr>";
                                        $kokos=$kokos-$ka;

                }
    
                else if("支出"==$a){
                    $a=1;
                    
                    
                    if($a==1){
                        $ka2=number_format($ka);

                        echo "<table> <tr class='anone5'><th>
                        支・借
                        </th><th>
                            年
                        </th><th>
                            月
                            </th><th>
                                日
                                </th><th>
                                    カテゴリー
                                    </th><th>
                                        金額
                                        </th></tr>        <tr class='anone4'><th class='hate'>
                                        支出
                                        </th><th>
                                        ".$i."
                                        </th><th>
                                        ".$u."
                                        </th><th>
                                            ".$e."
                                            </th><th>
                                                ".$o."
                                                </th><th>
                                                   ".$ka2."
                                                    </th>
                                                </tr>";

                                                $kokos=$kokos+$ka;

                    }
                
                
                        
                        }
                        else{
                    
                            $ka2=number_format($ka);

                            echo "<table> <tr class='anone3'><th>
                            支・借
                            </th><th>
                                年
                            </th><th>
                                月
                                </th><th>
                                    日
                                    </th><th>
                                        カテゴリー
                                        </th><th>
                                            金額
                                            </th></tr>        <tr class='anone4'><th class='hate2'>
                                            借金
                                            </th><th>
                                            ".$i."
                                            </th><th>
                                            ".$u."
                                            </th><th>
                                                ".$e."
                                                </th><th>
                                                    ".$o."
                                                    </th><th>
                                                       ".$ka2."
                                                        </th>
                                                    </tr>";
                                                    $kokos=$kokos-$ka;

                            }
                
            
}
$maboroshi=1+$maboroshi;
}
}


else if($_POST["d"]&&$_POST["e"]){

$fine=fopen("./syakkin.csv","r");
while($pix=fgetcsv($fine,1000)){

list($a,$i,$u,$e,$o,$ka)=$pix;
if($_POST["d"]==$o&&$_POST["e"]==$ka){
    if($maboroshi==1&&"支出"==$a){
        $a=1;
        
        
        if($a==1){
            $ka2=number_format($ka);

            echo "<table> <tr class='anone5'><th>
            支・借
            </th><th>
                年
            </th><th>
                月
                </th><th>
                    日
                    </th><th>
                        カテゴリー
                        </th><th>
                            金額
                            </th></tr>        <tr class='anone4'><th class='hate'>
                            支出
                            </th><th>
                            ".$i."
                            </th><th>
                            ".$u."
                            </th><th>
                                ".$e."
                                </th><th>
                                    ".$o."
                                    </th><th>
                                       ".$ka2."
                                        </th>
                                    </tr>";
                                    $kokos=$kokos+$ka;

        }
    
    
            
            }
            else if($maboroshi==1){
        
                $ka2=number_format($ka);

                echo "<table> <tr class='anone3'><th>
                支・借
                </th><th>
                    年
                </th><th>
                    月
                    </th><th>
                        日
                        </th><th>
                            カテゴリー
                            </th><th>
                                金額
                                </th></tr>        <tr class='anone4'><th class='hate2'>
                                借金
                                </th><th>
                                ".$i."
                                </th><th>
                                ".$u."
                                </th><th>
                                    ".$e."
                                    </th><th>
                                        ".$o."
                                        </th><th>
                                           ".$ka2."
                                            </th>
                                        </tr>";
                                        $kokos=$kokos-$ka;

                }
    
                else if("支出"==$a){
                    $a=1;
                    
                    
                    if($a==1){
                        $ka2=number_format($ka);

                        echo "<table> <tr class='anone5'><th>
                        支・借
                        </th><th>
                            年
                        </th><th>
                            月
                            </th><th>
                                日
                                </th><th>
                                    カテゴリー
                                    </th><th>
                                        金額
                                        </th></tr>        <tr class='anone4'><th class='hate'>
                                        支出
                                        </th><th>
                                        ".$i."
                                        </th><th>
                                        ".$u."
                                        </th><th>
                                            ".$e."
                                            </th><th>
                                                ".$o."
                                                </th><th>
                                                   ".$ka2."
                                                    </th>
                                                </tr>";
                                                $kokos=$kokos+$ka;

                    }
                
                
                        
                        }
                        else{
                    
                            $ka2=number_format($ka);

                            echo "<table> <tr class='anone3'><th>
                            支・借
                            </th><th>
                                年
                            </th><th>
                                月
                                </th><th>
                                    日
                                    </th><th>
                                        カテゴリー
                                        </th><th>
                                            金額
                                            </th></tr>        <tr class='anone4'><th class='hate2'>
                                            借金
                                            </th><th>
                                            ".$i."
                                            </th><th>
                                            ".$u."
                                            </th><th>
                                                ".$e."
                                                </th><th>
                                                    ".$o."
                                                    </th><th>
                                                       ".$kaw."
                                                        </th>
                                                    </tr>";
                                                    $kokos=$kokos-$ka;

                            }
                
            
}
$maboroshi=1+$maboroshi;
}
}



else if($_POST["a"]){

    $fine=fopen("./syakkin.csv","r");
    while($pix=fgetcsv($fine,1000)){
    
    list($a,$i,$u,$e,$o,$ka)=$pix;
    if($_POST["a"]==$i){
        if($maboroshi==1&&"支出"==$a){
            $a=1;
            
            
            if($a==1){
                $ka2=number_format($ka);


                echo "<table> <tr class='anone5'><th>
                支・借
                </th><th>
                    年
                </th><th>
                    月
                    </th><th>
                        日
                        </th><th>
                            カテゴリー
                            </th><th>
                                金額
                                </th></tr>        <tr class='anone4'><th class='hate'>
                                支出
                                </th><th>
                                ".$i."
                                </th><th>
                                ".$u."
                                </th><th>
                                    ".$e."
                                    </th><th>
                                        ".$o."
                                        </th><th>
                                           ".$ka2."
                                            </th>
                                        </tr>";
                                        $kokos=$kokos+$ka;

            }
        
        
                
                }
                else if($maboroshi==1){
                    $ka2=number_format($ka);

        
                    echo "<table> <tr class='anone3'><th>
                    支・借
                    </th><th>
                        年
                    </th><th>
                        月
                        </th><th>
                            日
                            </th><th>
                                カテゴリー
                                </th><th>
                                    金額
                                    </th></tr>        <tr class='anone4'><th class='hate2'>
                                    借金
                                    </th><th>
                                    ".$i."
                                    </th><th>
                                    ".$u."
                                    </th><th>
                                        ".$e."
                                        </th><th>
                                            ".$o."
                                            </th><th>
                                               ".$ka2."
                                                </th>
                                            </tr>";
                                            $kokos=$kokos-$ka;

                    }
        
                    else if("支出"==$a){
                        $a=1;
                        
                        
                        if($a==1){
                            $ka2=number_format($ka);


                            echo "<table> <tr class='anone5'><th>
                            支・借
                            </th><th>
                                年
                            </th><th>
                                月
                                </th><th>
                                    日
                                    </th><th>
                                        カテゴリー
                                        </th><th>
                                            金額
                                            </th></tr>        <tr class='anone4'><th class='hate'>
                                            支出
                                            </th><th>
                                            ".$i."
                                            </th><th>
                                            ".$u."
                                            </th><th>
                                                ".$e."
                                                </th><th>
                                                    ".$o."
                                                    </th><th>
                                                       ".$ka2."
                                                        </th>
                                                    </tr>";
                                                    $kokos=$kokos+$ka;

                        }
                    
                    
                            
                            }
                            else{
                                $ka2=number_format($ka);

                    
                                echo "<table> <tr class='anone3'><th>
                                支・借
                                </th><th>
                                    年
                                </th><th>
                                    月
                                    </th><th>
                                        日
                                        </th><th>
                                            カテゴリー
                                            </th><th>
                                                金額
                                                </th></tr>        <tr class='anone4'><th class='hate2'>
                                                借金
                                                </th><th>
                                                ".$i."
                                                </th><th>
                                                ".$u."
                                                </th><th>
                                                    ".$e."
                                                    </th><th>
                                                        ".$o."
                                                        </th><th>
                                                           ".$ka2."
                                                            </th>
                                                        </tr>";
                                                        $kokos=$kokos-$ka;

                                }
                    
                
    }
    $maboroshi=1+$maboroshi;
    }
}






else if($_POST["b"]){
    $fine=fopen("./syakkin.csv","r");
    while($pix=fgetcsv($fine,1000)){
    
    list($a,$i,$u,$e,$o,$ka)=$pix;
    if($_POST["b"]==$u){
        if($maboroshi==1&&"支出"==$a){
            $a=1;
            
            
            if($a==1){
                $ka2=number_format($ka);

                echo "<table> <tr class='anone5'><th>
                支・借
                </th><th>
                    年
                </th><th>
                    月
                    </th><th>
                        日
                        </th><th>
                            カテゴリー
                            </th><th>
                                金額
                                </th></tr>        <tr class='anone4'><th class='hate'>
                                支出
                                </th><th>
                                ".$i."
                                </th><th>
                                ".$u."
                                </th><th>
                                    ".$e."
                                    </th><th>
                                        ".$o."
                                        </th><th>
                                           ".$ka2."
                                            </th>
                                        </tr>";
                                        $kokos=$kokos+$ka;

            }
        
        
                
                }
                else if($maboroshi==1){
                    $ka2=number_format($ka);

        
                    echo "<table> <tr class='anone3'><th>
                    支・借
                    </th><th>
                        年
                    </th><th>
                        月
                        </th><th>
                            日
                            </th><th>
                                カテゴリー
                                </th><th>
                                    金額
                                    </th></tr>        <tr class='anone4'><th class='hate2'>
                                    借金
                                    </th><th>
                                    ".$i."
                                    </th><th>
                                    ".$u."
                                    </th><th>
                                        ".$e."
                                        </th><th>
                                            ".$o."
                                            </th><th>
                                               ".$ka2."
                                                </th>
                                            </tr>";
                                            $kokos=$kokos-$ka;

                    }
        
                    else if("支出"==$a){
                        $a=1;
                        
                        
                        if($a==1){
                            $ka2=number_format($ka);

                            echo "<table> <tr class='anone5'><th>
                            支・借
                            </th><th>
                                年
                            </th><th>
                                月
                                </th><th>
                                    日
                                    </th><th>
                                        カテゴリー
                                        </th><th>
                                            金額
                                            </th></tr>        <tr class='anone4'><th class='hate'>
                                            支出
                                            </th><th>
                                            ".$i."
                                            </th><th>
                                            ".$u."
                                            </th><th>
                                                ".$e."
                                                </th><th>
                                                    ".$o."
                                                    </th><th>
                                                       ".$ka2."
                                                        </th>
                                                    </tr>";
                                                    $kokos=$kokos+$ka;

                        }
                    
                    
                            
                            }
                            else{
                                $ka2=number_format($ka);

                    
                                echo "<table> <tr class='anone3'><th>
                                支・借
                                </th><th>
                                    年
                                </th><th>
                                    月
                                    </th><th>
                                        日
                                        </th><th>
                                            カテゴリー
                                            </th><th>
                                                金額
                                                </th></tr>        <tr class='anone4'><th class='hate2'>
                                                借金
                                                </th><th>
                                                ".$i."
                                                </th><th>
                                                ".$u."
                                                </th><th>
                                                    ".$e."
                                                    </th><th>
                                                        ".$o."
                                                        </th><th>
                                                           ".$ka2."
                                                            </th>
                                                        </tr>";
                                                        $kokos=$kokos-$ka;

                                }
                    
                
    }
    $maboroshi=1+$maboroshi;
    }
}

    


else if($_POST["c"]){
    $fine=fopen("./syakkin.csv","r");
    while($pix=fgetcsv($fine,1000)){
    
    list($a,$i,$u,$e,$o,$ka)=$pix;
    if($_POST["c"]==$e){
        if($maboroshi==1&&"支出"==$a){
            $a=1;
            
            
            if($a==1){
                $ka2=number_format($ka);

                echo "<table> <tr class='anone5'><th>
                支・借
                </th><th>
                    年
                </th><th>
                    月
                    </th><th>
                        日
                        </th><th>
                            カテゴリー
                            </th><th>
                                金額
                                </th></tr>        <tr class='anone4'><th class='hate'>
                                支出
                                </th><th>
                                ".$i."
                                </th><th>
                                ".$u."
                                </th><th>
                                    ".$e."
                                    </th><th>
                                        ".$o."
                                        </th><th>
                                           ".$ka2."
                                            </th>
                                        </tr>";
                                        $kokos=$kokos+$ka;

            }
        
        
                
                }
                else if($maboroshi==1){
            
                    $ka2=number_format($ka);

                    echo "<table> <tr class='anone3'><th>
                    支・借
                    </th><th>
                        年
                    </th><th>
                        月
                        </th><th>
                            日
                            </th><th>
                                カテゴリー
                                </th><th>
                                    金額
                                    </th></tr>        <tr class='anone4'><th class='hate2'>
                                    借金
                                    </th><th>
                                    ".$i."
                                    </th><th>
                                    ".$u."
                                    </th><th>
                                        ".$e."
                                        </th><th>
                                            ".$o."
                                            </th><th>
                                               ".$ka2."
                                                </th>
                                            </tr>";
                                            $kokos=$kokos-$ka;

                    }
        
                    else if("支出"==$a){
                        $a=1;
                        
                        
                       if($a==1){
                        $ka2=number_format($ka);

                            echo "<table> <tr class='anone5'><th>
                            支・借
                            </th><th>
                                年
                            </th><th>
                                月
                                </th><th>
                                    日
                                    </th><th>
                                        カテゴリー
                                        </th><th>
                                            金額
                                            </th></tr>        <tr class='anone4'><th class='hate'>
                                            支出
                                            </th><th>
                                            ".$i."
                                            </th><th>
                                            ".$u."
                                            </th><th>
                                                ".$e."
                                                </th><th>
                                                    ".$o."
                                                    </th><th>
                                                       ".$ka2."
                                                        </th>
                                                    </tr>";
                                                    $kokos=$kokos+$ka;

                        }
                    
                    
                            
                            }
                            else{
                                $ka2=number_format($ka);

                    
                                echo "<table> <tr class='anone3'><th>
                                支・借
                                </th><th>
                                    年
                                </th><th>
                                    月
                                    </th><th>
                                        日
                                        </th><th>
                                            カテゴリー
                                            </th><th>
                                                金額
                                                </th></tr>        <tr class='anone4'><th class='hate2'>
                                                借金
                                                </th><th>
                                                ".$i."
                                                </th><th>
                                                ".$u."
                                                </th><th>
                                                    ".$e."
                                                    </th><th>
                                                        ".$o."
                                                        </th><th>
                                                           ".$ka2."
                                                            </th>
                                                        </tr>";
                                                        $kokos=$kokos-$ka;

                                }
                    
                
    }
    $maboroshi=1+$maboroshi;
    }
}

    



else if($_POST["d"]){

    $fine=fopen("./syakkin.csv","r");
    while($pix=fgetcsv($fine,1000)){
    list($a,$i,$u,$e,$o,$ka)=$pix;
    if($_POST["d"]==$o){
        if($maboroshi==1&&"支出"==$a){
            $a=1;
            
            
            if($a==1){
                $ka2=number_format($ka);

                echo "<table> <tr class='anone5'><th>
                支・借
                </th><th>
                    年
                </th><th>
                    月
                    </th><th>
                        日
                        </th><th>
                            カテゴリー
                            </th><th>
                                金額
                                </th></tr>        <tr class='anone4'><th class='hate'>
                                支出
                                </th><th>
                                ".$i."
                                </th><th>
                                ".$u."
                                </th><th>
                                    ".$e."
                                    </th><th>
                                        ".$o."
                                        </th><th>
                                           ".$ka2."
                                            </th>
                                        </tr>";
                                        $kokos=$kokos+$ka;

        
            }
        
        
                $maboroshi=$maboroshi+1;
                }
                else if($maboroshi==1){
            
                    $ka2=number_format($ka);

                    echo "<table> <tr class='anone3'><th>
                    支・借
                    </th><th>
                        年
                    </th><th>
                        月
                        </th><th>
                            日
                            </th><th>
                                カテゴリー
                                </th><th>
                                    金額
                                    </th></tr>        <tr class='anone4'><th class='hate2'>
                                    借金
                                    </th><th>
                                    ".$i."
                                    </th><th>
                                    ".$u."
                                    </th><th>
                                        ".$e."
                                        </th><th>
                                            ".$o."
                                            </th><th>
                                               ".$ka2."
                                                </th>
                                            </tr>";
                                            $maboroshi=$maboroshi+1;
                                            $kokos=$kokos-$ka;

                    
                    }
        
                    else if("支出"==$a){
                        $a=1;
                        
                        
                        if($a==1){
                            $ka2=number_format($ka);

                            echo "<table> <tr class='anone5'><th>
                            支・借
                            </th><th>
                                年
                            </th><th>
                                月
                                </th><th>
                                    日
                                    </th><th>
                                        カテゴリー
                                        </th><th>
                                            金額
                                            </th></tr>        <tr class='anone4'><th class='hate'>
                                            支出
                                            </th><th>
                                            ".$i."
                                            </th><th>
                                            ".$u."
                                            </th><th>
                                                ".$e."
                                                </th><th>
                                                    ".$o."
                                                    </th><th>
                                                       ".$ka2."
                                                        </th>
                                                    </tr>";
                                                    $kokos=$kokos+$ka;

                    
                        }
                    
                    
                            
                            }
                            else{
                                $ka2=number_format($ka);

                    
                                echo "<table> <tr class='anone3'><th>
                                支・借
                                </th><th>
                                    年
                                </th><th>
                                    月
                                    </th><th>
                                        日
                                        </th><th>
                                            カテゴリー
                                            </th><th>
                                                金額
                                                </th></tr>        <tr class='anone4'><th class='hate2'>
                                                借金
                                                </th><th>
                                                ".$i."
                                                </th><th>
                                                ".$u."
                                                </th><th>
                                                    ".$e."
                                                    </th><th>
                                                        ".$o."
                                                        </th><th>
                                                           ".$ka2."
                                                            </th>
                                                        </tr>";
                                                        $kokos=$kokos-$ka;

                                
                                }
                    
                
                            }
                            
    }
}
    



else if($_POST["e"]){
    $fine=fopen("./syakkin.csv","r");
    while($pix=fgetcsv($fine,1000)){
    
    list($a,$i,$u,$e,$o,$ka)=$pix;
    if($_POST["e"]==$ka){
        if($maboroshi==1&&"支出"==$a){
            $a=1;
            
            
            if($a==1){
                $ka2=number_format($ka);

                echo "<table> <tr class='anone5'><th>
                支・借
                </th><th>
                    年
                </th><th>
                    月
                    </th><th>
                        日
                        </th><th>
                            カテゴリー
                            </th><th>
                                金額
                                </th></tr>        <tr class='anone4'><th class='hate'>
                                支出
                                </th><th>
                                ".$i."
                                </th><th>
                                ".$u."
                                </th><th>
                                    ".$e."
                                    </th><th>
                                        ".$o."
                                        </th><th>
                                           ".$ka2."
                                            </th>
                                        </tr>";
                                        $kokos=$kokos+$ka;

            }
        
        
                
                }
                else if($maboroshi==1){
            
                    $ka2=number_format($ka);

                    echo "<table> <tr class='anone3'><th>
                    支・借
                    </th><th>
                        年
                    </th><th>
                        月
                        </th><th>
                            日
                            </th><th>
                                カテゴリー
                                </th><th>
                                    金額
                                    </th></tr>        <tr class='anone4'><th class='hate2'>
                                    借金
                                    </th><th>
                                    ".$i."
                                    </th><th>
                                    ".$u."
                                    </th><th>
                                        ".$e."
                                        </th><th>
                                            ".$o."
                                            </th><th>
                                               ".$ka2."
                                                </th>
                                            </tr>";
                                            $kokos=$kokos-$ka;

                    }
        
                    else if("支出"==$a){
                        $a=1;
                        
                        
                        if($a==1){
                            $ka2=number_format($ka);

                            echo "<table> <tr class='anone5'><th>
                            支・借
                            </th><th>
                                年
                            </th><th>
                                月
                                </th><th>
                                    日
                                    </th><th>
                                        カテゴリー
                                        </th><th>
                                            金額
                                            </th></tr>        <tr class='anone4'><th class='hate'>
                                            支出
                                            </th><th>
                                            ".$i."
                                            </th><th>
                                            ".$u."
                                            </th><th>
                                                ".$e."
                                                </th><th>
                                                    ".$o."
                                                    </th><th>
                                                       ".$ka2."
                                                        </th>
                                                    </tr>";
                                                    $kokos=$kokos+$ka;

                    
                        }
                    
                    
                            
                            }
                            else{
                        
                                $ka2=number_format($ka);

                                echo "<table> <tr class='anone3'><th>
                                支・借
                                </th><th>
                                    年
                                </th><th>
                                    月
                                    </th><th>
                                        日
                                        </th><th>
                                            カテゴリー
                                            </th><th>
                                                金額
                                                </th></tr>        <tr class='anone4'><th class='hate2'>
                                                借金
                                                </th><th>
                                                ".$i."
                                                </th><th>
                                                ".$u."
                                                </th><th>
                                                    ".$e."
                                                    </th><th>
                                                        ".$o."
                                                        </th><th>
                                                           ".$ka2."
                                                            </th>
                                                        </tr>";
                                                        $kokos=$kokos-$ka;

                                }
                    
                
    }
    }

}
sar($kokos);


?>
<?php

function sar($kokos){
    $kokos2=number_format($kokos);

    echo "<div style='position:absolute;top:50px;'>合計：".$kokos2."円</div>";
    
    
        
    }
    


?>
