<?php 
require_once './includes/db.php';
require_once './includes/fucntion.php';
require_once './includes/sessions.php';
require_once 'dateTime.php';
confirm_login();

if (isset($_GET['id'])) {
    $search_query_parametr = $_GET['id'];
    global $connecting;
    $sql = "DELETE FROM category WHERE id = '$search_query_parametr'";
    $exeucte = $connecting->query($sql);
    if ($exeucte) {
        $_SESSION['SuccessMassage'] = "Shit Category Deleted !";
        redirect('Categories.php');
    } else {
        $_SESSION['ErrorMassage'] = "Something Wrong !";
        redirect('Categories.php');
    }
}
?>