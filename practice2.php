<?php
#課題１
$name = "南田";

if ($name = "南田") {
  echo "私は南田です";
} else {
  echo "南田ではありません";
}
#課題２
$total = 0;
for ($i = 1; $i <=10000; $i++){
  $total += $i;
}
echo $total;
#課題３
$fruit = array("バナナ","リンゴ","イチゴ","梨","スイカ");
foreach($fruit as $fruit){
  echo $fruit;
  echo "\n";
}
#課題4
$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){
  if ($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}