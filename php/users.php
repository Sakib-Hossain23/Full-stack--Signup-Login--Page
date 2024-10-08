<?php 
    /*session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['unique_id'];
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} ORDER BY user_id DESC");
    $output = "";

    if(mysqli_num_rows($sql) == 0){
         $output .= "No users are available to chat";
    }elseif(mysqli_num_rows($sql) > 0){
        include "data.php";
    }
    echo $output;
?>


*/


session_start();
include_once "config.php";
$outgoing_id = $_SESSION['unique_id'];

// Ensure to use the correct column name instead of 'user_id'
// Replace 'unique_id' with the actual column you want to order by
$sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} ORDER BY unique_id DESC"); 

$output = "";

if (mysqli_num_rows($sql) == 0) {
    $output .= "No users are available to chat";
} elseif (mysqli_num_rows($sql) > 0) {
    include "data.php"; // Assuming data.php processes and displays user data
}

echo $output;
?>
