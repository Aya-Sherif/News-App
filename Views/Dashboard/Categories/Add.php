<?php
require_once("../../../App/config.php");
require_once("../Inc/Header.php");
?>



<div class="container">
        <div class="row">
            <div class="col-8 mx-auto bg-light my-5 border border-dark border-3">
                <h1 class=" p-2 mt-3"> Add Category </h1>
                <form action="<?php echo URL."/Controllers/Dash/Categories/store.php"?>" method="POST">
                <?php include MAIN_PATH . "/Views/Dashboard/Inc/Messages.php"; ?> 
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="" class="form-control btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>





<?PHP   require_once("../Inc/Footer.php");?>