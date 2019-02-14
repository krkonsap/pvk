<?php
require_once 'conf.php';
//echo '<pre>';
//print_r($sess);
//echo '<pre>';

//vajalikud vaate objektid
$mainTmpl = new Template('main');
$contentTmpl = new Template('content');

$mainTmpl ->set('title', 'Menu App');
//$contentTmpl->set('')


$mainTmpl ->set('content', $contentTmpl->parse());

echo $mainTmpl->parse();

//echo '<pre>';
//print_r($mainTmpl);
//echo '<pre>';
?>