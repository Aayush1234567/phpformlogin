<?php
include "db.php";
include "functionsPHP.php";
createTable();
?>
<?php
include "includes/header.php";
?>
<div class="container">
    <div class="col-sm-6">
        <h1 class="text-center">Create</h1>
        <form action="login_create.php" method="post">
            <div class="form-group">
                <label for="username"> User Name</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="from-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="Submit" style="margin-top: 5px">
        </form>

    </div>
<?php
include "includes/footer.php"; ?>