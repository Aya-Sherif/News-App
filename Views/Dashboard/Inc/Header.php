<?php
if(IsDefined('user'))
{
  $user_id=getSession('user');
  $user=dbRow('users','id',$user_id);

}
else
{
  die("User Not Exist");

}

?>
<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP Task6</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <style>
    body {    margin: 0;
      padding: 0;
      background-image: url("<?php echo URL . "Images/categories.jpg" ?>");
      background-size: cover;

      /* Additional background properties can be added here */
      /* Text color for better visibility on the background */
    }

    .content-container {
      background-color: rgba(255, 255, 255, 0.8);
      /* Semi-transparent white background for the content area */
      padding: 20px;
      border-radius: 10px;
      /* Optional: Add some border-radius for a nicer look */
      margin-top: 60px;
      /* Adjust the margin to match your navbar height */
      width: 100%;
      /* Make the content container fill the entire width */
    }

    .table {
      background-color: white;
      /* Background color for the table */
    }

    h1 {
      color: black;
      /* Set the text color of h1 to black */
    }
  </style>

</head>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo URL . "/Views/Front/Home.php" ?>">News App </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
      aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page"
            href="<?php echo URL . "/Views/Dashboard/Categories/Index.php" ?>">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
            <?php $categories=dbGet('categories');?>
          </a>
          <ul class="dropdown-menu">
            <?php 
            if($user['role']=='admin'):;?>
            <li><a class="dropdown-item" href="<?php echo URL . "/Views/Dashboard/Categories/Add.php" ?>">Add New</a></li>
            <li><a class="dropdown-item" href="<?php echo URL . "/Views/Dashboard/Categories/Index.php" ?>">View All</a>
            <?php else:?>
              <li><a class="dropdown-item" href="<?php echo URL . "/Views/Dashboard/Categories/Index.php" ?>">View All</a></li>
              <?php foreach($categories as $category):?>
            <li><a class="dropdown-item" href="<?php echo URL . "/Views/Front/Home.php?id=".$category['id'] ?>"><?php echo $category['name']?></a>
            </li>
            <?php endforeach ?>
            <?php endif;?>
          </ul>
        </li>
        <?php 
            if($user['role']=='admin'):;?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Users
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo URL . "/Views/Dashboard/Users/Add.php" ?>">Add User</a></li>
            <li><a class="dropdown-item" href="<?php echo URL . "/Views/Dashboard/Users/Index.php" ?>">View All</a></li>            
          </ul>
        </li>
        <?php endif;?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Posts
          </a>
          <ul class="dropdown-menu">
          <?php 
            if($user['role']=='admin'):;?>
            <li><a class="dropdown-item" href="<?php echo URL . "/Views/Dashboard/Posts/Add.php" ?>">Add Post</a></li>
            <li><a class="dropdown-item" href="<?php echo URL . "/Views/Dashboard/Posts/Index.php" ?>">View All</a></li>
            <li><a class="dropdown-item" href="<?php echo URL . "/Views/Front/Home.php" ?>">View All</a></li>
            <?php else:?>
            <li><a class="dropdown-item" href="<?php echo URL . "/Views/Dashboard/Posts/Add.php" ?>">Add Post</a></li>
            <li><a class="dropdown-item" href="<?php echo URL . "/Views/Dashboard/Posts/Index.php" ?>">View Yours</a></li>
            <li><a class="dropdown-item" href="<?php echo URL . "/Views/Front/Home.php" ?>">View All</a></li>
            <?php endif;?>
          </ul>

        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>