<?php

require_once '../require.php';
require_once CLASS_EX_REALDIR . 'page_extends/products/LC_Page_Popular_Ex.php';

$objPage = new LC_Page_Popular_Ex();
register_shutdown_function(array($objPage, 'destroy'));
$objPage->init();
$objPage->process();
