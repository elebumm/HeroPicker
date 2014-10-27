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
    $result = mysqli_query($con, "SELECT name FROM heroes ORDER BY RAND() LIMIT 1");
    if(!$result) {
        die(mysqli_error($con));
    }
    $hero = mysqli_fetch_object($result);
    return $hero;
}

function get_all_hero($name){
    global $con;
    $result = mysqli_query($con, "SELECT name FROM heroes ORDER BY RAND() LIMIT 1");
    if(!$result) {
        die(mysqli_error($con));
    }
    $heroDirect = $result . ".html";
    return $heroDircet;
}

function get_strength_hero($name){
    global $con;
    $result = mysqli_query($con, "SELECT name FROM heroes WHERE attribute = 'strength' ORDER BY RAND() LIMIT 1");
    if(!$result) {
        die(mysqli_error($con));
    }
    $hero = mysqli_fetch_object($result);
    return $hero;
}

function get_agility_hero($name){
    global $con;
    $result = mysqli_query($con, "SELECT name FROM heroes WHERE attribute = 'agility' ORDER BY RAND() LIMIT 1");
    if(!$result) {
        die(mysqli_error($con));
    }
    $hero = mysqli_fetch_object($result);
    return $hero;
}

function get_intelligence_hero($name){
    global $con;
    $result = mysqli_query($con, "SELECT name FROM heroes WHERE attribute = 'intelligence' ORDER BY RAND() LIMIT 1");
    if(!$result) {
        die(mysqli_error($con));
    }
    $hero = mysqli_fetch_object($result);
    return $hero;
}

?>
