<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "northwind";

$conn = new mysqli($host, $username, $password, $db);
if ($con->connect_error) {
    die('Error : (' . $con->connect_errno . ')' . $conn->connect_error);
} else {
    //echo "Connect Database successfully!";

}
$conn->set_charset("utf8"); //สนับสนุนภาษาไทย

function checkUsernamePassword($conn, $sql)
{

    $result = $conn->query($sql);
    return $result;
}
