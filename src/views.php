<?php

$_PAGE = "accueil";

if (isset($_GET['page'])) {
    if (array_key_exists($_GET['page'], $_PAGE_LIST)) {
        $_PAGE = $_GET['page'];
    }
}

$_PAGE_NAME = $_PAGE_LIST[$_PAGE];

include(__DIR__ . '/views/base.php');
