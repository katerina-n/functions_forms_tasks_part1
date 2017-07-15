

<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 14.07.2017
 * Time: 10:12
 */
$arraybad=["bad", "words"];
$newarray=[];
if (!empty($_GET["one"])){
    $string = $_GET["one"];
$slova=explode(" ", $string);
//print_r($slova);
for($i=0;$i<=count($slova)-1; $i++){
    if(in_array($slova[$i], $arraybad)){
     echo "Bad Words!";
    exit();
    }
   else{
        array_push($newarray, $slova[$i]);

   }


}

    echo implode(' ',$newarray);
}


?>

<form action="8.php" method="get">
    <textarea name='one' value="Ostavte pogalyista kommentariu"></textarea>
    <input type="submit"  value="Send"/>
</form>
