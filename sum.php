<?php
#課題１
function sum($max) {
   
 return $max*2; 

}
echo sum(4);
?>
<?php
#課題２
function f($a,$b){
  $result = $a+$b;
  
  return $result;
}
echo "\n";
echo f(5,3);
?>

<?php
#課題３－１
$arr = array(1,3,5,7,9);
echo array_product($arr);
echo "\n";
?>
<?php
#課題３－２
function multiplication($arr){
    $result = 1;
    foreach($arr as $a){
        $result *= $a;
    }
    return $result;
}
$arr = array(1,3,5,7,9);
echo multiplication($arr);
echo "\n";
?>
<?php
#課題４
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a);
        $max_number = $a;
    }
return $max_number;    
}
$arr = [1,6,9,10,15];
echo max_array($arr);
echo "\n";
?>
<?php
#課題５

#strip_tags
$text = "<p>strip_tagsはHTMLタグを取り除いて出力します</p>";
echo strip_tags($text);
echo "\n";

#array_push
$fruits = ["りんご","バナナ","スイカ"];
//array_pushはfruits要素に下記を追加します
array_push($fruits, "みかん","梨");
print_r($fruits);
echo "\n";

#array_merge
$arr1 = [1,2,3];
$arr2 = [4,5,6];

//array_mergeで配列を結合します
$array = array_merge($arr1,$arr2);
print_r($array);
echo "\n";

#time, mktime
//現在のUnixタイムスタンプを取得
echo time();
echo "\n";
//mktimeで指定日時のタイムスタンプを取得
//timezoneエラーがでるので設定
date_default_timezone_set('Asia/Tokyo');
$unix_time = mktime(0, 0, 0, 12, 1, 2019);
echo $unix_time;
echo "\n";

#date
//dateにy/m/dを適用することで日付を取得
echo date("y/m/d");
echo "\n";

?>