<?php
// {{{ requires
require_once '../require.php';
require_once CLASS_EX_REALDIR . 'page_extends/brand/LC_Page_Brand_Detail_Ex.php';

// }}}
// {{{ generate page
$objPage = new LC_Page_Brand_Detail_Ex();
register_shutdown_function(array($objPage, 'destroy'));
$objPage->init();
$objPage->process();