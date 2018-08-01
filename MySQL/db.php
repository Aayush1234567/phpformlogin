<?php
/**
 * Created by PhpStorm.
 * User: sabin
 * Date: 5/11/2018
 * Time: 2:46 PM
 */
$connection = mysqli_connect("localhost", "root", "", 'loginapp');
if (!$connection) {
    die("Cannot connect to database.");
}
