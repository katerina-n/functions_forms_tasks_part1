<form action="2.php" method="get">
    <textarea name='one'></textarea>
    <input type="submit"/>
</form>
<?php

function length()
{
    if (!empty($_GET["one"])) {
        $string1 = $_GET["one"];
        $mass1 = explode(" ", $string1);
print_r($mass1);
//echo "<br>";
        for($j=0; $j<=count($mass1)-2; $j++){
            $len=0;
        for($i=0; $i<=count($mass1)-2-$j; $i++) {
            if (strlen($mass1[$i]) >= strlen($mass1[$i+1])) {
                $len=$mass1[$i];
                $mass1[$i]=$mass1[$i+1];
                $mass1[$i+1]=$len;
            }
              }
        }
       // print_r($mass1);
        if(count($mass1)>=3){
            echo "<br>".$mass1[count($mass1)-3]." ".$mass1[count($mass1)-2]." ".$mass1[count($mass1)-1];
}
    }

}
length();

/*function word($intext){
    $stringnot=[',', '.', ' - ', '_', '+', '?', '!'];
    $inputText= str_replace($stringnot, ' ', $intext);
    $listsword=explode(" ", $inputText);
    $listsReturn= array_map('returnCountWord', $listsword);
    arsort($listsReturn);
    print_r($listsReturn);
    $arr=[];
    $arrr=[];
    $i=0;
    foreach ($listsReturn as $key=>$value) {
        $arr[$i]=$key;
        $arrr[$i]=$listsword[$key];
        $i++;
        if($i>=3){
    break;
        }
    }
    echo"<br>";
    print_r($arrr);


}
function returnCountWord($wordItem){
    return strlen($wordItem);
}
$str="ghj k u y tttt d r tttt";
word($str);*/

?>