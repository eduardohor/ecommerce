<?php 

use \Youphone\Page;
use \Youphone\Model\Product;
use \Youphone\Model\Category;

$app->get('/', function() {

  $pruducts = Product::listAll();

  $page = new Page();

  $page->setTpl("index", [
  	'products'=>Product::checkList($pruducts)
  ]);

});

$app->get('/categories/:idcategory', function($idcategory){

	$category = new Category();

	$category->get((int)$idcategory);

	$page = new Page();

	$page->setTpl("category",[
		'category'=>$category->getValues(),
		'products'=>Product::checkList($category->getProducts())
	]);

});


 ?>