<?php
/**
 * Created by PhpStorm.
 * User: sabin
 * Date: 5/11/2018
 * Time: 4:13 PM
 */

include "db.php";
function showAllData()
{
    global $connection;
    $query = "SELECT  * from users";
    $result = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
        echo "<option value = '$id' > $id</option >";
    }
}

function readAllData()
{
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Query failed" . mysqli_error($connection));
    } else {
        echo "Connection online" . "<br>";
    }

}

function updateTable()
{
    global $connection;
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        $query = "UPDATE users SET ";
        $query .= "username = '$username',";
        $query .= " password = '$password'";
        $query .= " WHERE id = $id ";

        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("Not updated to database. <br>" . mysqli_error($connection));
        } else {
            echo "Updated to database";
        }
    }
}

function deleteTable()
{
    global $connection;
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $query = "DELETE FROM users ";
//        $query .= "username = '$username',";
//        $query .= " password = '$password'";
        $query .= " WHERE id = $id ";

        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("Not updated to database. <br>" . mysqli_error($connection));
        } else {
            echo "Updated to database";
        }
    }
}

function createTable()
{
    global $connection;
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "INSERT INTO users(username, password)";
        $query .= "VALUES('$username', '$password')";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("Query failed" . mysqli_error($connection));
        } else {
            echo "<br>";
            echo "Added : " . $username . " and " . $password . " to the Database";
        }
    }
}

