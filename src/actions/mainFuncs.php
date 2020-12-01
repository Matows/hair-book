<?php



if (isset($_GET) && isset($_GET['PAGE'])) {
	if (array_key_exists ( $_GET['PAGE'] , $_PAGE_LIST )) {
		$_PAGE = $_GET['PAGE'];
	}
	else {
		$_PAGE = 'index';
	}
}
else {
	$_PAGE = 'index';
}
$_PAGE_NAME = $_PAGE_LIST[$_PAGE];