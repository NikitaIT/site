<?php
    require_once("database.php");
    require_once("models/articles.php");
    
    $link = db_connect();
    $article = article_get($link, $_GET['id']);
    articles_prosmotry($link, $_GET['id'],1);
if(isset($_GET['likes']))
        article_like($link,$_GET['likes']);
    include("views/article.php");
?>