
<?php
$connection = mysqli_connect("localhost", "root", "", 'loginapp');
if (!$connection) {
    die("NO just died db");
}
$query = "SELECT * FROM users";
$result = mysqli_query($connection, $query);
if (!$result) {
    die("Query failed" . mysqli_error($connection));
} else {
    echo "Connection online" . "<br>";
}
?>
<?php
include "includes/header.php"
?>
<div class="container">
    <div class="col-sm-6">
        <?php
        while ($row = mysqli_fetch_assoc($result)) {

            ?>
            <pre>
            <?php
            print_r($row);
            ?>
        </pre>
            <?php
        }
        ?>
    </div>
</div>
<?php
include "includes/footer.php";
?>