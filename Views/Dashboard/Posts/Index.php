<?php require_once '../../../App/config.php'; ?>

<?php require_once MAIN_PATH . '/Views/Dashboard/Inc/Header.php';

?>


<div class="container">
    <div class="row">
        <div class="col-12 mx-auto bg-light my-5 border border-dark border-3">
            <h1 class=" p-2 mt-3"> All Posts </h1>
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
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php ;
                        $i = 1;
                        if(getUseRrole('user')['role']=='admin'):;
                        $Posts = dbGet('articles')
                         ?>
                        <?php foreach ($Posts as $post): ?>
                            <tr>
                                <td>
                                    <?php echo $i++; ?>
                                </td>
                                <td>
                                    <?php echo dbRow('categories','id',$post['category_id'])['name']; ?><!--need category name--! -->
                                </td>
                                <td>
                                    <?php echo $post['title']; ?>
                                </td>
                                <td>
                                <?php echo dbRow('users','id',$post['user_id'])['name']; ?> <!--need user name--! -->
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
<?php else:
    $Posts=dbRows('articles','user_id',getUseRrole('user')['id']);

   ?>
    
                            <?php foreach ($Posts as $post):

                                    ?>
                            <tr>
                                <td>
                                    <?php echo $i++; ?>
                                </td>
                                <td>
                                 <?php echo dbRow('categories','id',$post['category_id'])['name']; ?>
                                </td>
                                <td>
                                    <?php echo $post['title']; ?>
                                </td>
                                <td>
                                <?php echo dbRow('users','id',$post['user_id'])['name']; ?> <!--need user name--! -->
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