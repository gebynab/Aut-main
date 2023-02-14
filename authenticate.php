<?php
session_start();
// Change this to your connection info.

if(isset($_POST['username'])&&isset($_POST['password'])){
    if ($_POST['username']=='admin' && $_POST['password']=='admin123') {
        $_SESSION['username'] = $_POST['username'];
        header('Location: home.php');

    } else {
        header('Location: index.php');
        echo "<br>Wrong username or password";
    }
}
?>
