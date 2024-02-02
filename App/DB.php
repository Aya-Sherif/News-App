<?php 

$servername="localhost";
$username="root";
$password="";
$dpname="news_app";

$conn=mysqli_connect($servername,$username,$password,$dpname);
if(!$conn)
{
    die("connection Faild : " . mysqli_connect_error());
}


function dbinseret($Table,$Data)
{
global $conn;
$Key=array_keys($Data);
$Key='`'.implode('`,`',$Key).'`';
$values=array_values($Data);
$values="'".implode("','",$values)."'";
$sql = "INSERT INTO `$Table` ($Key) VALUES ($values);";
try{
    mysqli_query($conn, $sql);
}
catch (Exception $e) {
    die("Insert failed: " . $e->getMessage());
}

}
function is_Defiend($Table, $Data)
{
    global $conn;
    $Key = array_keys($Data);
    $Key = '`' . implode('`,`', $Key) . '`';
    $values = array_values($Data);
    $values = "'" . implode("','", $values) . "'";
    // Check if the category with the specified name already exists
    $sql = "SELECT COUNT(*) AS count FROM $Table WHERE ($Key) = $values";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $count = $row['count'];

        if ($count > 0) {

            return array_keys($Data)[0] . " already exists! 🫠";
        } else {
            return false;
        }
    }

}
function dbGet($table)
{
    global $conn;
    $sql = "SELECT * FROM `$table`";
    try {
        $result = mysqli_query($conn, $sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        return $data;
    } catch (mysqli_sql_exception $e) {
        die("insert error : " . $e->getMessage());
    }

}

function dbUpdate($table, $data, $id){
    global $conn;
    $keys = "";
    foreach ($data as $key => $value) {
        $keys .= "`" . $key . "`='" . $value . "',";
    }
    $keys = rtrim($keys, ",");

    try {
        $sql = "UPDATE  `$table` SET $keys WHERE `id`='$id' ";
        mysqli_query($conn, $sql);
    } catch (mysqli_sql_exception $e) {
        echo "🙃🙃🙃🙃🙃🙃🙃";
        die("insert error : " . $e->getMessage());
    }
}

function dbRow($table, $field, $value)
{
    global $conn;
    $sql = "SELECT * FROM `$table` WHERE `$field`='$value' ";
    try {
        $result = mysqli_query($conn, $sql);

        $data = mysqli_fetch_assoc($result);
        if ($data) {
            return $data;
        } else {
            return false;
        }
    } catch (mysqli_sql_exception $e) {
        die("insert error : " . $e->getMessage());
    }
}

function dbDelete($table, $id)
{
    global $conn;

    try {
        $sql = "DELETE FROM  `$table` WHERE `id`='$id' ";
        mysqli_query($conn, $sql);
    } catch (mysqli_sql_exception $e) {
        die("insert error : " . $e->getMessage());
    }
}

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

