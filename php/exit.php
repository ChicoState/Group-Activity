<?php
session_destroy();
if($_SESSION['user_name']){
    echo "<p>Thank you for visiting, you have logged out, please close your browser </p>";
} else{
    echo "<p>Thank you for visiting, you have logged out, please close your browser </p>";
}  
?>