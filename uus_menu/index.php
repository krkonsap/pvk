<?php
require_once 'conf.php';
//echo '<pre>';
//print_r($sess);
//echo '<pre>';

//vajalikud vaate objektid
$mainTmpl = new Template('main');
$contentTmpl = new Template('content');
$cardTmpl = new Template('card');
$cardHeaderTmpl = new Template('header');

$mainTmpl ->set('title', 'Menu App');

$cardTmpl->set('card_header', $cardHeaderTmpl->parse());

$contentTmpl->add('cards', $cardTmpl->parse());
$contentTmpl->add('cards', $cardTmpl->parse());
$contentTmpl->add('cards', $cardTmpl->parse());
$contentTmpl->add('cards', $cardTmpl->parse());


$mainTmpl ->set('content', $contentTmpl->parse());

echo $mainTmpl->parse();

//echo '<pre>';
//print_r($mainTmpl);
//echo '<pre>';
?>