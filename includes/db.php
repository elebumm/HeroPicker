<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "heroes");
//I made a table in the heroes database called 'heroes' and added id (AUTO_INCREMENT, NOT NULL, PRIMARY KEY) and
// name (VARCHAR) and type (VARCHAR) to test

//If it cant connect to your database or your server then this is why.
$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if (mysqli_connect_errno()) {
    die("Database connection failed: " .
        mysqli_connect_error() . " ( " . mysqli_connect_errno() . ")"
    );
}
