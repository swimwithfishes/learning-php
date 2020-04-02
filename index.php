<?php

    $orderNumber = $_GET['orderNumber'];
    $orderName = $_GET['orderName'];
    $size = $_GET['size'];
    $color = $_GET['color'];
    $page = $_GET['page'];

    $page_title = 'HOME';


    require 'views/index.view.php';