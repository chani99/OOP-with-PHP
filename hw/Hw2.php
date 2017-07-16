<?php
$ret = json_decode ("{}");
if(isset($_GET['name'])) {
    $ret -> name = $_GET['name']."test";
}
if(isset($_GET['age'])) {
    $ret -> age = $_GET['age'];
}
echo(json_encode($ret));
?>