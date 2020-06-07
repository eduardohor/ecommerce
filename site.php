<?php 

use \Youphone\Page;

$app->get('/', function() {

  $page = new Page();

  $page->setTpl("index");

});

 ?>