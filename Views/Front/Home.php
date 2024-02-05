<?php require_once("../../App/config.php") ?>
<?php require_once("Inc/Header.php"); {
    if (isGetMethod() || IsDefined('user')) {
        // Check if 'id' parameter is set in the GET request
        if (isset($_GET['id'])) {
            // If set, use getInput('id')
            $category_id = getInput('id');
        } else {
            // If not set, default $ID to 0
            $category_id = 0;
        }
    } else {
        //if the user is not admin or writer 
        $category_id = 0;
    }
    $articles = dbRows('articles', ['category_id' => $category_id, 'status' => 'accepted']);
}
?>
<!-- Page Header-->
<header class="masthead" style="background-image: url('<?php echo URL . "Public/" ?>assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Clean Blog</h1>
                    <span class="subheading">A Blog Theme by Start Bootstrap</span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <?php if ($articles && $category_id != 0): ?>
                <?php foreach ($articles as $article): ?>
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="<?php echo URL . "/Views/Front/Single-post.php?id=" . $article['id']; ?>">
                            <h1 class="post-title">
                                <?php echo $article['title'];
                                ?>
                            </h1>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a>
                                <?php echo dbRow('users', 'id', $article['user_id'])['name'];
                                ?>
                            </a>
                            on
                            <?php echo $article['created_at'] ?>
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Pager-->
                <?php endforeach; ?>
            <?php elseif ($category_id == 0 && $articles): ?>
                <?php $articles = dbRows('articles', ['status' => 'accepted']); ?>
                <?php foreach ($articles as $article): ?>
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="<?php echo URL . "/Views/Front/Single-post.php?id=" . $article['id']; ?>">
                            <h1 class="post-title">
                                <?php echo $article['title'];
                                ?>
                            </h1>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a>
                                <?php echo dbRow('users', 'id', $article['user_id'])['name'];
                                ?>
                            </a>
                            on
                            <?php echo $article['created_at'] ?>
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                <?php endforeach; ?>
            <?php else: ?>
                <div>
                    <p>Oops! :( <br>
                        There are no articles in this section.</p>
                </div>
            <?php endif ?>
            <!-- <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts
                    →</a></div> -->
        </div>
    </div>
</div>

<?php require_once("Inc/Footer.php") ?>