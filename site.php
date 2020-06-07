<?php 

use \Youphone\Page;
use \Youphone\Model\Product;

$app->get('/', function() {

  $pruducts = Product::listAll();

  $page = new Page();

  $page->setTpl("index", [
  	'products'=>Product::checkList($pruducts)
  ]);

});



 ?>