<?php 
$numLenth = 35;

function make_seed_Token() {
  list($usec, $sec) = explode(' ', microtime());
  return (float) $sec + ((float) $usec * 100000);
}
srand(make_seed_Token());
$numSeed = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$getQP = "";

for($i = 0; $i < $numLenth; $i ++) {  $getQP .= $numSeed[rand(0, strlen($numSeed)-1)]; }

// $getQP;
?>