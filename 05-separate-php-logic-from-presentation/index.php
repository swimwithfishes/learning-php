 <?php

$page_title = 'HOME';
$tour = htmlspecialchars($_GET['tour']);
$loc = htmlspecialchars($_GET['loc']);
$date = htmlspecialchars($_GET['date']);
$size = htmlspecialchars($_GET['size']);
$year = htmlspecialchars($_GET['year']);

require 'views/index.view.php';
