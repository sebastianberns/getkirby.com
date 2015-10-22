<?php

define('DS', DIRECTORY_SEPARATOR);

// load kirby
require(__DIR__ . DS . 'kirby' . DS . 'bootstrap.php');

$kirby = kirby();


foreach(page('guides')->children() as $page) {

  f::move($page->root() . DS . 'docs.txt', $page->root() . DS . 'guide.txt');

}