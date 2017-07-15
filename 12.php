<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 15.07.2017
 * Time: 2:02
 */
$string="А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.";
function povorot($str){
 $mass=explode(".", $str);
 $newmass=[];
 for($i=count($mass)-1; $i>=0; $i--){
     array_push($newmass, $mass[$i]);
 }
 //print_r($newmass);
 $newstr=implode(".", $newmass);
    echo $newstr;
}
povorot($string);

?>