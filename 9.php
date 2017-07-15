<form action="9.php" method="get">
    <textarea name='one' value="Ostavte pogalyista kommentariu"></textarea>
    <input type="submit"  value="Send"/>
</form>
<?php
function transform(){
if (!empty($_GET["one"])) {
    $string = $_GET["one"];
    $mass = str_split($string);
    echo $string;
    //print_r($mass);
    $newmass = [];
    for ($i = count($mass) - 1; $i >= 0; $i--) {
        $newmass[] = $mass[$i];
    }
    echo "<br>";
    echo implode($newmass);
}
}
transform();

?>