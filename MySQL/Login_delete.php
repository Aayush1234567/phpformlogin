<?php
include "db.php"; ?>
<?php
include "functionsPHP.php";
?>
<?php
deleteTable();
?>
<?php
include "includes/header.php";
?>
<div class="container">
    <div class="col-sm-6">
        <form action="Login_delete.php" method="post">
            <div class="form-group">
                <select name="id" id="">
                    <?php
                    showAllData();
                    ?>
                </select>
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="delete" style="margin-top: 5px">
        </form>
    </div>
</div>
<?php
include "includes/footer.php";