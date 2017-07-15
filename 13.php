<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 15.07.2017
 * Time: 12:07
 */
$string = "яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня";

$array=explode(" ", $string);
//print_r($array);
$newmass=[];
for($i=0; $i<=count($array)-1; $i++){
    $kol=0;
    for($j=0; $j<=count($array)-1; $j++) {
        if ($array[$i] == $array[$j]) {
            $kol++;
        }
    }
        if (!array_key_exists($array[$i], $newmass)) {
            $newmass[$array[$i]] = $kol;



    }
}
//echo"<br>";
arsort($newmass);
print_r($newmass);


?>