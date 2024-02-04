<?php require_once("../../App/config.php");
$article = dbRow("articles", "id", getInput('id'));
setSession('post',$article);
require_once("../../Controllers/Front/Single-post.php");
$categories=dbGet('categories');
$user_role=getUser('user')['role'];
if (!$article) {
    die("Article Not Exist");
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
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
    <!-- Page Header-->
    <header class="masthead" style="background-image: url(<?php echo $article['image']; ?>)">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="post-heading">
                        <h2 class="post-title">
                            <?php echo $article['title'] ?>
                        </h2>
                        <span class="meta">
                            Posted by
                            <a>
                                <?php echo dbRow('users', 'id', $article['user_id'])['name']; ?>
                            </a>
                            on
                            <?php echo $article['created_at'] ?>

                        </span>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- Main Content-->
    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">

                    <p>
                        <?php echo $article['description']; ?>
                    </p>

                </div>
            </div>
        </div>
    </article>
    
