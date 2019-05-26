 <?php
for($num = 800, $i = 0; $num > 50; $num /=2, $i++);
echo $num.'<br>';
echo$i.'<br>';

$arr =[1=>'Понедельник', 2=>'Вторник', 3=>'Среда', 4=>'Четверг', 5=>'Пятница', 6=>'Суббота',7=>'Воскресение' ];
$day=7;
foreach ($arr as $key=>$val){
    if($key ==$day){
    echo '<strong>'.$val.'</strong>'.'<br>';
    } else{
        echo $val.'<br>';
    }
}
 $arr1 = [
     '1'=> [
         'price' => 10,
         'count' => 2
     ],
     '2'=> [
         'price' => 5,
         'count' => 5
     ],
     '3'=> [
         'price' => 8,
         'count' => 5
     ],
     '4'=> [
         'price' => 12,
         'count' => 4
     ],
     '5'=> [
         'price' => 8,
         'count' => 4
     ],
 ];

// сортировка на убыыание
 function cmp_function ($a,$b){
     return($a['price']>$b['price']);
 }
 uasort($arr1,'cmp_function');
 var_dump($arr1);