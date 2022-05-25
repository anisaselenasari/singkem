<?php
include "conn_db.php";

$id =  $_GET['id'];
$lat =  $_GET['lat'];
$lng =  $_GET['lng'];
$btn =  $_GET['btn'];
$btn2 =  $_GET['btn2'];
$btn3 =  $_GET['btn3'];


echo $id;


$query = mysqli_query($conn,"UPDATE `ta` SET `lat`=$lat,`lng`=$lng WHERE $id");
$query_btn = mysqli_query($conn,"SELECT `btn`,`btn2`,`btn3` FROM `ta` WHERE $id");

$result = mysqli_fetch_assoc($query_btn);


if ($result['btn'] ==  1 && $result['btn2'] ==  1 && $result['btn3'] ==  1) {
    echo 1;
} elseif ($result['btn'] ==  0 && $result['btn2'] ==  0 && $result['btn3'] ==  0) {
    echo 2;
} elseif ($result['btn'] ==  0 && $result['btn2'] ==  0 && $result['btn3'] ==  1) {
    echo 3;
} elseif ($result['btn'] ==  0 && $result['btn2'] ==  1 && $result['btn3'] ==  1) {
    echo 4;
} elseif ($result['btn'] ==  1 && $result['btn2'] ==  1 && $result['btn3'] ==  0) {
    echo 5;
} elseif ($result['btn'] ==  1 && $result['btn2'] ==  0 && $result['btn3'] ==  0) {
    echo 6;
} elseif ($result['btn'] ==  1 && $result['btn2'] ==  0 && $result['btn3'] ==  1) {
    echo 7;
} elseif ($result['btn'] ==  0 && $result['btn2'] ==  1 && $result['btn3'] ==  0) {
    echo 8;
}
header("Location: monitoring.php");

exit;
