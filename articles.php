<?php
    require_once("database.php");
    require_once("models/articles.php");
    
    $link = db_connect();
    $articles = articles_all_by_category($link, $_GET['category']);
    
    include("views/articles.php");
?>