<?php
require_once("../../../App/config.php");
$category = dbRow("categories", "id", getInput('id'));
if (!$category) {
    die("Category Not Exist");
}
require_once("../Inc/Header.php");
?>



<div class="container">
    <div class="row">
        <div class="col-8 mx-auto bg-light my-5 border border-dark border-3">
            <h1 class=" p-2 mt-3"> Edit Category </h1>
            <form action="<?php echo URL . "/Controllers/Dash/Categories/Update.php?id=" . $category['id'] ?>"
                method="POST">
                <?php include MAIN_PATH . "/Views/Dashboard/Inc/Messages.php"; ?>
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="<?= $category['name'] ?>" class="form-control">
                    <br>
                <div class="mb-3">
                    <input type="submit" name="Submit" value="Submit" class="btn btn-success">
                    <a href="<?php echo URL.'/Views/Dashboard/Categories/Index.php'; ?>" class="btn btn-danger">Cancel</a>
                </div>
                

            </form>
        </div>
    </div>
</div>





<?PHP require_once("../Inc/Footer.php"); ?>