<?php
echo "Input equation" . PHP_EOL;
$first = readline();


$arrA = explode("+", $first);

if (count($arrA) > 1) {

    echo sprintf("%4d", $arrA[0]) . PHP_EOL;
    echo "+", $arrA[1] . PHP_EOL;
    $y = strlen("+" . $arrA[1]) . PHP_EOL;
    for ($x = 1; $x <= $y; $x++) {
        echo "-";
    }
    echo PHP_EOL;
    echo sprintf("%4d", $arrA[0] + $arrA[1]) . PHP_EOL;


}

$arrA = explode("-", $first);

if (count($arrA) > 1) {
    echo sprintf("%4d", $arrA[0]) . PHP_EOL;
    echo "-", $arrA[1] . PHP_EOL;
    $y = strlen("-" . $arrA[1]) . PHP_EOL;
    for ($x = 1; $x <= $y; $x++) {
        echo "-";
    }
    echo PHP_EOL;
    echo sprintf("%4d", $arrA[0] - $arrA[1]) . PHP_EOL;
}


$arrA = explode("*", $first);

if (count($arrA) > 1) {
    echo sprintf("%4d", $arrA[0]) . PHP_EOL;
    echo "*", $arrA[1] . PHP_EOL;


    $topLine = strlen("*" . $arrA[1]) . PHP_EOL;
    for ($x = 0; $x < $topLine; $x++) {
        echo "-";
    }
    echo PHP_EOL;

    for ($i = 0; $i < 1; $i++) {
        if (empty($arrA[1][1])) {

            echo '';
        } elseif (!empty($arrA[1][1])) {
            echo sprintf("%4d", $arrA[0] * $arrA[1][3]) . PHP_EOL;
            echo sprintf("%4d", $arrA[0] * $arrA[1][2]) . PHP_EOL;
            echo sprintf("%4d", $arrA[0] * $arrA[1][1]) . PHP_EOL;
            echo sprintf("%4d", $arrA[0] * $arrA[1][0]) . PHP_EOL;

            $lastLine = strlen($arrA[0] * $arrA[1]) . PHP_EOL;
            for ($x = 0; $x < $lastLine; $x++) {
                echo "-";
            }
            echo PHP_EOL;


        }

    }
    $sum = $arrA[0] * $arrA[1] . PHP_EOL;

    echo sprintf("%4d", $sum);


}
