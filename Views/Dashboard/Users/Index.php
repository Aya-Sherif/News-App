<?php require_once '../../../App/config.php'; ?>

<?php require_once MAIN_PATH . '/Views/Dashboard/Inc/Header.php';
?>


<div class="container">
    <div class="row">
        <div class="col-12 mx-auto bg-light my-5 border border-dark border-3">
            <h1 class=" p-2 mt-3"> All Users </h1>
            <div class="col-12">
                <?php require_once MAIN_PATH . '/Views/Dashboard/Inc/Messages.php'; ?>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $Users = dbGet('users');
                        $i = 1; ?>
                        <?php foreach ($Users as $User): ?>
                            <tr>
                                <td>
                                    <?php echo $i++; ?>
                                </td>
                                <td>
                                    <?php echo $User['name']; ?>
                                </td>
                                <td>
                                    <?php echo $User['username']; ?>
                                </td>
                                <td>
                                    <?php echo $User['role']; ?>
                                </td>
                                <td>
                                    <?php echo $User['status']; ?>
                                </td>
                                <td>
                                    <a href="<?php echo URL . "/Views/Dashboard/Users/Edit.php?id=" . $User['id']; ?>"
                                        class="btn btn-info">Edit</a>
                                </td>
                                <td>
                                    <a href="<?php echo URL . "/Controllers/Dash/User/Delete.php?id=" . $User['id']; ?>"
                                        class="btn btn-danger">Delete</a>
                                </td>
                            </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require_once MAIN_PATH . '/Views/Dashboard/Inc/Footer.php'; ?>