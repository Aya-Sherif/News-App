<?php $user = getUser('user'); ?>
<?php $categories = dbGet('categories');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Clean Blog - Start Bootstrap Theme</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
        rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo URL . "Public/" ?>css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="<?php echo URL . "views/front/home.php"; ?>">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <?php if (!$user): ?>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                                href="<?php echo URL . "views/front/home.php"; ?>">Home</a></li>
                        <li class="nav-item dropdown d-flex">
                            <a class="nav-link dropdown-toggle px-lg-3 py-3 py-lg-4" href="<?php echo URL . "/Views/Front/Home.php?id=0"; ?>"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categories
                            </a>
                            <ul class="dropdown-menu">
                                <?php foreach ($categories as $category): ?>
                                    <li><a class="dropdown-item"
                                            href="<?php echo URL . "/Views/Front/Home.php?id=" . $category['id']; ?>">
                                            <?php echo $category['name']; ?>
                                        </a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                                href="<?php echo URL . "views/front/about.php"; ?>">About</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                                href="<?php echo URL . "views/front/contact.php"; ?>">Contact</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                                href="<?php echo URL . "/Views/Dashboard/Auth/Login.php"; ?>">Login</a></li>

                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="<?php echo URL . "/Views/Dashboard/Categories/Index.php" ?>">Home</a>
                        </li>
                        <?php if ($user['role'] == 'admin'): ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Categories
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="<?php echo URL . "/Views/Dashboard/Categories/Add.php" ?>">Add New</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="<?php echo URL . "/Views/Dashboard/Categories/Index.php" ?>">View All</a>
                                    </li>
                                </ul>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page"
                                    href="<?php echo URL . "/Views/Dashboard/Categories/Index.php" ?>">Categories</a>
                            </li>
                        <?php endif; ?>
                        <?php if ($user['role'] == 'admin'): ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Users
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php echo URL . "/Views/Dashboard/Users/Add.php" ?>">Add
                                            User</a></li>
                                    <li><a class="dropdown-item"
                                            href="<?php echo URL . "/Views/Dashboard/Users/Index.php" ?>">View All</a></li>
                                </ul>
                            </li>
                        <?php endif; ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle"
                                href="<?php echo URL . "/Views/Dashboard/Posts/Index.php" ?>" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Posts
                            </a>
                            <ul class="dropdown-menu">
                                <?php if ($user['role'] == 'admin'): ?>
                                    <li><a class="dropdown-item" href="<?php echo URL . "/Views/Dashboard/Posts/Add.php" ?>">Add
                                            Post</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="<?php echo URL . "/Views/Dashboard/Posts/Index.php" ?>">View All</a></li>
                                <?php else: ?>
                                    <li><a class="dropdown-item" href="<?php echo URL . "/Views/Dashboard/Posts/Add.php" ?>">Add
                                            Post</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="<?php echo URL . "/Views/Dashboard/Posts/Index.php?id=0" ?>">View
                                            Yours</a></li>
                                    <li><a class="dropdown-item"
                                            href="<?php echo URL . "/Views/Dashboard/Posts/Index.php?id=1" ?>">View All</a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </nav>