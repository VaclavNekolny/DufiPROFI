<?php 
include('includes/head.php');
include('includes/navbar.php');

// include('domu.php'); 

$page = $_GET['page'] ?? 'domu'; // výchozí stránka

$filepath = "pages/{$page}.php";
if (file_exists($filepath)) {
    include $filepath;
} else {
    echo "<p>Požadovaná stránka neexistuje.</p>";
}



include('includes/footer.php'); ?>