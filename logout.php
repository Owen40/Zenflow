<?php 
    session_start();

    if(isset($_SESSION['userId'])) {
        session_destroy();
        header('Location: https://listless17.top/index.php');
    }
?>