<form action="1.php" method="get">
    <textarea name='one'></textarea>
    <textarea name='two'></textarea>
    <input type="submit"/>
</form>
<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 13.07.2017
 * Time: 18:22
 */
function getCommonWords()
{
    if (!empty($_GET["one"]) && (!empty($_GET["two"]))) {
        $string1 = $_GET["one"];
        $string2 = $_GET["two"];
        $mass1 = explode(" ", $string1);
        $mass2 = explode(" ", $string2);
        print_r($mass1);
        print_r($mass2);
        $massRes = [];
        if (strlen($string1) >= strlen($string2)) {
            for ($i = 0; $i <= count($mass2) - 1; $i++) {
                if (in_array($mass2[$i], $mass1) && (!in_array($mass2[$i], $massRes))) {
                    $massRes[] = $mass2[$i];
                }
            }
        } else {
            for ($i = 0; $i <= count($mass1) - 1; $i++) {
                if (in_array($mass1[$i], $mass2) && (!in_array($mass2[$i], $massRes))) {
                    $massRes[] = $mass1[$i];
                }
            }
        }


        print_r($massRes);

    }
}
getCommonWords();

?>