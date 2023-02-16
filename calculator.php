<?php
$x = $_GET["x"];
$y = $_GET["y"];
$op = $_GET["op"];

if ($op == "add") {
    echo "" . $x + $y . "";
} else if ($op == "subtract") {
    echo "" . $x - $y . "";
} else if ($op == "multiply") {
    echo "" . $x * $y . "";
} else if ($op == "power") {
    $ans = 1;
    for ($i = 0; $i < $y; $i++) {
        $ans = $ans * $x;
    }
    echo "" . $ans . "";
} else if ($op == "fact") {
    $fact = 1;
    for ($i = 1; $i <= $x; $i++) {
        $fact = $fact * $i;
    }
    echo "" . $fact . "";
} else if ($op == "fact-series") {
    $fact = 1;
    for ($j = $x; $j >=1; $j--) {
        $fact = 1;
        for ($i = 1; $i <= $j; $i++) {
            $fact = $fact * $i;
        }
        echo "" . $fact . "<br/>";
    }

}

?>