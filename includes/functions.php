<?php
require_once('db.php');
function get_heroes() {
    global $con;
    $result = mysqli_query($con, "SELECT name FROM heroes");
    if (!$result) {
        die(mysqli_error($con));
    }
    return $result;
}

function get_hero($name) {
    global $con;
    $result = mysqli_query($con, "SELECT * FROM heroes WHERE name = '$name'");
    if(!$result) {
        die(mysqli_error($con));
    }
    $hero = mysqli_fetch_object($result);
    return $hero;
}