<?php
require_once("../../../App/config.php");

if (CheckPostMethod()) {
    $errors = [];
    foreach ($_POST as $key => $value) {
        $$key = reciveInput($value);
    }
    if (requiredInput($title)) {
        $errors[] = "Where is the Title ? 🙄";
    } elseif (MineInput($title, 3) || MaxInput($title, 30)) {
        $errors[] = "Write a valid length title 😊";
    }
    if (requiredInput($content)) {
        $errors[] = "Please, Enter Post content 😐";
    } elseif (MineInput($content, 60) || MaxInput($content, 10000)) {
        $errors[] = "Write a valid length for content 😊";
    }
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $tmp_image = $_FILES['image']['tmp_name'];

        // Define the destination directory and filename (customize this)
        $destination_directory = '../../../uploads/'; // Relative to your web application's root
        $image_filename = uniqid() . '_' . bin2hex(random_bytes(8)) . '.jpg';
        $image = $destination_directory . $image_filename;
        move_uploaded_file($tmp_image, $destination_directory . $image_filename);
    } else {
        $errors[] = "Failed to upload the image.";

    }
    if (empty($errors)) {
        echo "Henaaaaaaa";
        // File was successfully uploaded, set the $image variable to the relative URL

        // Now, you can insert the image URL into the database
        $created_at = date("Y-m-d H:i:s");
        $user_id = getUser('user')['id'];
        // Assuming you have a function like dbinsert to insert data into the database
        if(getUser('user')['role']=='writer')
        {
        dbinseret('articles', [
            'title' => $title,
            'id' => null,
            'category_id' => 0,
            'user_id' => $user_id,
            'description' => $content,
            'image' => $image, // Insert the relative URL here
            'number_of_views' => 0,
            'status' => 'pending'
        ]);

        $success = "Post Sending Successfully ❤️";
        setSession('Success', $success);
        Redirect('../../../Views/Dashboard/Posts/Index.php?');
    }
    else
    {
        dbinseret('articles', [
            'title' => $title,
            'id' => null,
            'category_id' => $Category,
            'user_id' => $user_id,
            'description' => $content,
            'image' => $image, // Insert the relative URL here
            'number_of_views' => 0,
            'status' => $statue
                ]);

        $success = "Post Added Successfully ❤️";
        setSession('Success', $success);
        Redirect('../../../Views/Dashboard/Posts/Index.php');
    }


    } else {
        setSession('errors', $errors);
        Redirect('../../../Views/Dashboard/Posts/Add.php');
    }
}


