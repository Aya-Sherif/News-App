<?php
require_once("../../../App/config.php");
require_once("../Inc/Header.php");


?>
?>
<div class="container mt-5">
    <h1 class="mb-4">Add Post </h1>
    <form action="<?php echo URL . "/Controllers/Dash/Posts/Store.php" ?>" method="POST" enctype="multipart/form-data">
        <?php include MAIN_PATH . "/Views/Dashboard/Inc/Messages.php"; ?>
        <div class="form-group">
            <label for="title">Post Title:</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3">
            <?php if (getUseRrole('user')['role'] == 'admin'):
                ; ?>

                <label for="statue">Statue</label>
                <select name="statue" id="statue" class="form-control">
                    <option value="accepted">Approve</option>
                    <option value="pending" selected>Pend</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="Category">Category</label>
                <select name="Category" id="Category" class="form-control">
                    <?php
                    $categories = dbGet('categories');

                    foreach ($categories as $category):
                        ; ?>
                        <?php if ($category['id'] == 0):
                            ; ?>
                            <option value="<?php echo $category['id'] ?>" selected>
                                <?php echo $category['name'] ?>
                            </option>
                        <?php else: ?>
                            <option value="<?php echo $category['id'] ?>">
                                <?php echo $category['name'] ?>
                            </option>

                        <?php endif; ?>

                    <?php endforeach; ?>
                </select>
            <?php else:
                //  echo "Ana bamooooooooooooooot" ?>

            <?php endif ?>
        </div>
        <div class="form-group">
            <label for="content">Post Content:</label>
            <textarea class="form-control" name="content"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Post Image:</label>
            <input type="file" class="form-control-file" name="image" accept="image/*">
            <!-- accept="image/*" this part is instead of the part of checkinh the extention in the video  -->
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
<?php require_once("../Inc/Footer.php");
?>