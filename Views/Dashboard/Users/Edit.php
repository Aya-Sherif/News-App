<?php
require_once("../../../App/config.php");
$user = dbRow("users", "id", getInput('id'));
if (!$user) {
    die("User Not Exist");
}
require_once("../Inc/Header.php");
?>



<div class="container">
    <div class="row">
        <div class="col-8 mx-auto bg-light my-5 border border-dark border-3">
            <h1 class=" p-2 mt-3"> Edit User </h1>
            <form action="<?php echo URL . "/Controllers/Dash/User/Update.php?id=" . $user['id'] ?>"
                method="POST">
                <?php include MAIN_PATH . "/Views/Dashboard/Inc/Messages.php"; ?>
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="<?= $user['name'] ?>" class="form-control">
                    <br>
                    <div class="mb-3">
                    <label for="name">User Name</label>
                    <input type="text" name="username" id="username" value="<?= $user['username'] ?>" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="role">Role</label>
                    <select name="role" id="role" value="<?= $user['role'] ?>" class="form-control">
                        <option value="admin">Admin</option>
                        <option value="writer">Writer</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="status">Status</label>
                    <select name="status" id="status" value="<?= $user['status'] ?>" class="form-control">
                        <option value="active">Active</option>
                        <option value="inactive">Hold</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" value="<?= $user['password'] ?>"class="form-control">
                </div>
                <div class="mb-3">
                    <input type="submit" name="Submit" value="Submit" class="btn btn-success">
                    <a href="<?php echo URL.'/Views/Dashboard/Users/Index.php'; ?>" class="btn btn-danger">Cancel</a>
                </div>
                

            </form>
        </div>
    </div>
</div>





<?PHP require_once("../Inc/Footer.php"); ?>