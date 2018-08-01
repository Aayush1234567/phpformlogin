<?php
include "db.php"; ?>
<?php
include "functionsPHP.php";
include "includes/header.php"
?>

<?php
updateTable();
?>
<div class="container">
    <div class="col-sm-6">
        <form action="Login_update.php" method="post">
            <div class="form-group">
                <label for="username"> User Name</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="from-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <select name="id" id="">
                    <?php
                    showAllData();
                    ?>
                </select>
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="UPDATE" style="margin-top: 5px">
        </form>
    </div>
</div>
<?php include "includes/footer.php" ?>