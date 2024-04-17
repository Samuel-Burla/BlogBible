<?php








session_start();

function adminOnly()
{
    if (!isset($_SESSION['user'])) {
        header('Location: login.php');
    } else if ($_SESSION['user']['role'] != 'admin') {
        header('Location: index.php');
    }
}
