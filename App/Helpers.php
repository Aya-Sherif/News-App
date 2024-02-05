<?php
function handleLogin( $username, $password)
{
    global $conn;
        $sql = "SELECT `username`,`password`,`role`,`id`
FROM `users` 
WHERE `username`='$username' ";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                return $row['id'];
            } else {
                return false;
            }
        } else {
            return false;
        }

    }

?>