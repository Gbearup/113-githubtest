<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>for loop</h1>
<?php

/* for($i=0 ; $i<10 ; $i=$i+1){
     echo $i*10;
     echo "<br>";
}
echo$i; */




for($i=0 ; $i<5 ; $i=$i+1){
    echo (2*$i+1)*10;
    echo "<br>";
}
echo$i;

?>


<h1>while</h1>


<?php
$score=40;
$counter=0;
while($score<60){
    $score=$score+10;
    $counter++;
}

echo $score;
echo "<br>";
echo $counter;
?>


<h1> 陣列 </h1>
<div>['a','b,'good','sad','john',123,999]</div>

<?php
$a=['a','b','good','sad','john',123,999];

/*echo $a[0];
echo "<br>";
echo $a[1];
echo "<br>";
echo $a[2];
echo "<br>";
echo "<br>"; */

for($i=0;$i<count($a);$i++){
    echo $a[$i];
    echo "<br>";
}


$b=['姓名'=>"顏綺莉",'數學'=>90,'國文'=>80,'英文'=>20];

foreach ($b as $key => $value) {
    echo $key . ": " . $value . "<br>";
}


/*1.先把key值都拿出來
2.用key做成一個只有key的陣列
3.用迴圈來跑key陣列
4.再去把內容印出來*/

$keys = array_keys($b);
$length = count($keys); // 獲取鍵的數量

for ($i = 0; $i < $length; $i++) 
    $key = $keys[$i]; // 獲取鍵名
    $value = $b[$key]; // 獲取對應的值
    echo $key . ": " . $value . "<br>";


        

?>

<p>&none break space;</p>
<p>空白   &nbsp  空白;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>












</body>
</html>