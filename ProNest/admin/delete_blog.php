<?php
session_start(); // Always at the top
if (!isset($_SESSION['email']) || $_SESSION['user_role'] !== 'admin') {
    header("Location: login.php");
    exit();
}
?>

<?php

    echo $blog_id = $_GET['id'];

    include "config.php"; // Database connection
    // SQL query to fetch products
    $sql = "DELETE FROM blogs WHERE ID = '$blog_id'";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

                        
    header("Location: /ProNest/admin/blog.php");

                       

?>