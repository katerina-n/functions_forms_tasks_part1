<form action="10.php" method="get">
    <textarea name='one' ></textarea>
    <input type="submit" />
</form>
<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 15.07.2017
 * Time: 1:38
 */

function repfunction()
{
    if (!empty($_GET["one"])) {
        $string = $_GET["one"];
$mass=explode(" ", $string);
$newmass=array_unique($mass);
$newstring=implode(" ", $newmass);
echo "Ynikal'nue slova: ".$newstring;
echo "<br>Kolichestvo ynikal'nux slov ".count($newmass);
    }
}
repfunction();
?>