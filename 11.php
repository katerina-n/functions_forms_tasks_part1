<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 15.07.2017
 * Time: 2:00
 */
$string="а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.";

//$string="ght ghyj j. hytj. u";
function biglater($str){
    $massiv=explode(". ", $str);
    $newmass=[];
    foreach ($massiv as $value){
        $slovo=(string)$value;
       // $big=ucfirst($slovo, 'UTF-8');
        $big=iconv('windows-1251', 'utf-8', ucfirst(iconv('utf-8', 'windows-1251', $slovo)));
        array_push($newmass, $big);
    }
    $text=implode(".", $newmass);
    echo $text;
}
biglater($string);
?>