<?php require_once '../../../App/config.php'; ?>

<?php require_once MAIN_PATH . '/Views/Dashboard/Inc/Header.php';
$user = getUser('user');
if (isGetMethod()) {
    // Check if 'id' parameter is set in the GET request
    if (isset($_GET['id'])) {
        // If set, use getInput('id')
        $ID = getInput('id');
    } else {
        // If not set, default $ID to 0
        $ID = 0;
    }
} else {
    // For non-GET requests, set $ID to 0 or handle it as needed
    $ID = 0;
}

?>


<div class="container">
    <div class="row">
        <div class="col-12 mx-auto bg-light my-5 border border-dark border-3">
            <?php if($ID==0):?>
            <h1 class=" p-2 mt-3">Your Posts </h1>
            <?php else:?>
                <h1 class=" p-2 mt-3">All Posts </h1>
                <?php endif?>

            <div class="col-12">
                <?php require_once MAIN_PATH . '/Views/Dashboard/Inc/Messages.php'; ?>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Writer</th>
                            <th>State</th>
                            <th>Created At</th>
                            <th>Number of Views</th>
                            <th>Show</th>
                            <?php if ($user['role'] == 'admin' || ($user['role'] == 'writer' && $ID==0 )):
                             ?>
                                <th>Delete</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php ;
                        $i = 1;
                        $Posts = dbGet('articles');
                        if ($user['role'] == 'admin'): ;
                            ?>
                            <?php foreach ($Posts as $post): ?>
                                <tr>
                                    <td>
                                        <?php echo $i++; ?>
                                    </td>
                                    <td>
                                        <?php echo dbRow('categories', 'id', $post['category_id'])['name']; ?><!--need category name--! -->
                                    </td>
                                    <td>
                                        <?php echo $post['title']; ?>
                                    </td>
                                    <td>
                                        <?php echo dbRow('users', 'id', $post['user_id'])['name']; ?> <!--need user name--! -->
                                    </td>
                                    <td>
                                        <?php echo $post['status']; ?>
                                    </td>
                                    <td>
                                        <?php echo $post['created_at']; ?>
                                    </td>
                                    <td>
                                        <?php echo $post['number_of_views']; ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo URL . "/Views/Dashboard/Posts/Edit.php?id=" . $post['id']; ?>"
                                            class="btn btn-info">Show</a>
                                    </td>
                                    <td>
                                        <a href="<?php echo URL . "/Controllers/Dash/Posts/Delete.php?id=" . $post['id']; ?>"
                                            class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php elseif ($user['role'] == 'writer' && $ID == 1):
                        $Posts = dbRows('articles', ['status'=>'accepted']);

                            ?>
                            <?php foreach ($Posts as $post): ?>
                                <tr>
                                    <td>
                                        <?php echo $i++; ?>
                                    </td>
                                    <td>
                                        <?php echo dbRow('categories', 'id', $post['category_id'])['name']; ?><!--need category name--! -->
                                    </td>
                                    <td>
                                        <?php echo $post['title']; ?>
                                    </td>
                                    <td>
                                        <?php echo dbRow('users', 'id', $post['user_id'])['name']; ?> <!--need user name--! -->
                                    </td>
                                    <td>
                                        <?php echo $post['status']; ?>
                                    </td>
                                    <td>
                                        <?php echo $post['created_at']; ?>
                                    </td>
                                    <td>
                                    <?php echo $post['number_of_views']; ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo URL . "/Views/Front/Single-post.php?id=" . $post['id']; ?>"
                                            class="btn btn-info">Show</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        <?php elseif($user['role'] == 'writer' && $ID == 0):;
                            $Posts = dbRows('articles', ['user_id'=> $user['id']]);
                                ?>

                            <?php foreach ($Posts as $post):?>
                                <tr>
                                    <td>
                                        <?php echo $i++; ?>
                                    </td>
                                    <td>
                                        <?php echo dbRow('categories', 'id', $post['category_id'])['name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $post['title']; ?>
                                    </td>
                                    <td>
                                    <?php echo dbRow('users', 'id', $post['user_id'])['name']; ?> <!--need user name--! -->
                                    </td>
                                    <td>
                                        <?php echo $post['status']; ?>
                                    </td>
                                    <td>
                                        <?php echo $post['created_at']; ?>
                                    </td>
                                    <td>
                                        <?php echo $post['number_of_views']; ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo URL . "/Views/Dashboard/Posts/Edit.php?id=" . $post['id']; ?>"
                                            class="btn btn-info">Show</a>
                                    </td>
                                    <td>
                                        <a href="<?php echo URL . "/Controllers/Dash/Posts/Delete.php?id=" . $post['id']; ?>"
                                            class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require_once MAIN_PATH . '/Views/Dashboard/Inc/Footer.php'; ?>