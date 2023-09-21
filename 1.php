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
session_start();
/*session_staat();
if (isset($_SESSION["value"])){
    $_SESSION=$value["value"]
}
$id = $_POST['stuID'];
	$pwd = $_POST['submit'];
*/

$total=0;
   
$rnum=array();
while(count($rnum)<3)
     {  
          
            $num=rand(0,9);  
           if(!in_array($num,$rnum))
           {
               
               $rnum[]=$num;
               
            }
    }
     //}
  
     $_SESSION["rnum"]=$rnum;
     
     print_r($rnum);
do
{
    $total++;
    //  for($j=0;$j<=10;$j++)
    //  {   
    while(count($rnum)<3)
     {  
          
            $num=rand(0,9);  
           if(!in_array($num,$rnum))
           {
               
               $rnum[$count]=$num;
               $count++;
            }
    }
     //}
     
    $a=abs($rnum[1]-$rnum[0]);
   
    $b=abs($rnum[2]-$rnum[1]);
    
    print $total.'='.$rnum[0].','.$rnum[1].','.$rnum[2].','.$a.','.$b."<br/>";

    if($total>=10)
    {
        print '總共試了10次或已經找到數字囉!';
    }
    
}while($a!==$b && $total<10);

header("Location: 1main.php");
?>
</body>
</html>
