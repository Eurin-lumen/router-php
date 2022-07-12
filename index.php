<?php
//pregmatch
$url = '';
if(isset($_GET['url'])){
    $url = $_GET['url'];
}

if($url == ''){
    require 'home.php';

}elseif(preg_match('#article-([0-9]+)#', $url, $params)){
    //var_dump($params);
    //require  "home.php";
    $idArticle =  $params[1];
    require "article.php";
}else{
    require '404.php';
}

/* $url = '';
if(isset($_GET['url'])){
    $url = explode('/', $_GET['url']);

}


if($url == ""){
    require "home.php";

}elseif($url[0]== 'article' AND  !empty($url[1])){
    $idArticle = $url[1];
    require "article.php";
}else{
    require "404.php";
 
}
*/