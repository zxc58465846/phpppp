<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>表單練習</title>
</head>

<body>

<form action="1.php" method="post" name="form1" id="form1">
<p>
  <input type="submit" name="submit" id="submit" value="送出">
</p>
</form>
<?php
/*session_staat();
if (isset($_SESSION["value"])){
    $_SESSION=$value["value"]
}
$id = $_POST['stuID'];
	$pwd = $_POST['submit'];
*/
$total=0;
$num=array();
do
{
    $total++;
    for($j=0;$j<=10;$j++)
    {
        
    for($i=0;$i<=2;$i++)
        {  
            $num[$i]=rand(0,9);  
        //    if(!in_array(rand(0,9,$num)))
        //    {

        //    }      
        }
      
    }
    
    $a=abs($num[0]-$num[1]);
   
    $b=abs($num[1]-$num[2]);
    
    print $total.'='.$num[0].','.$num[1].','.$num[2].','.$a.','.$b."<br/>";
    
}while($total<10 && $a=$b);
/*$a=$num[0];
        $b=$num[1];
        $c=$num[2];*/
        //print_r($num); 

/*$a[0]=rand(0,10);
$b[1]=rand(0,10);
$c[2]=rand(0,10);

$total=array($a,$b,$c);*/
/*
function arrayByValue($a){
$a[0]=0;
return;
}
$b=array(1,2,3,4);
$c=arrayByValue($b);
/*row0=array(1,2,3);
arr($row0);*/





?>
</body>
</html>
