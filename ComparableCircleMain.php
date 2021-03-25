<?php
include "ComparableCircle.php";
$circleOne = new comparableCircle('circleOne',8);
$circleTwo = new comparableCircle('circleTwo',4);

var_dump($circleOne->compareTo($circleTwo));