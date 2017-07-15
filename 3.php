<form action="3.php" method="get">
    <textarea name='one'></textarea>
    <input type="submit"/>
</form>
<?php
if (!empty($_GET["one"])) {
    $string1 = $_GET["one"];
    $numb=(int)$string1;
    $f = fopen('text.txt', 'w');
    fwrite($f, 'Hello World my name Katerina i get up at 7 a.m.');
    fclose($f);
    $f=fopen('text.txt', 'r');
    $str=file_get_contents('text.txt');
    $stroki=explode(" ", $str);
    fclose($f);
foreach ($stroki as $key=> $value){
    if(strlen($value)<=$numb){
        unset($stroki[$key]);
    }
}
    echo "<br>";
    print_r($stroki);
$f=fopen('text.txt', 'w');
file_put_contents('text.txt', $stroki);
fclose($f);

}
?>