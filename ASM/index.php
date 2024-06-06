<?php
require_once "App/Config/database.php";
require_once "vendor/autoload.php";
require_once"App/Config/config.php";
use App\Routing\Route;
    Route::add('/', 'HomeController@index');
    Route::add('/index', 'HomeController@index');
    Route::add('/product', 'ProductController@index');
    Route::add('/product/page/(\d+)', 'ProductController@index');
    Route::add('/catagory/(\d+)', 'ProductController@index');
    Route::add('/product/detail/(\d+)', 'ProductController@detail');
    Route::add('/catagory/product/search/(\w+)', 'ProductController@index');
    $uri = isset($_GET['url']) ? "/".rtrim($_GET['url'], '/') : '/index';
    Route::dispatch($uri);
    
?>