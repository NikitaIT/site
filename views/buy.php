<?php
    $pageTitle="Покупки";
    $pageRightLink="";
    $pageLeftLink="../index.php";
    $pageRightLinkContent="Создать статью";
    $path="../";
    include_once('header.php');
?>
<h1>Успешно заказано</h1>
<p><a href="#" class="btn btn-default" role="button" onclick="history.back(); return false;">Назад</a></p>
<?php
require_once("../database.php");
require_once("../models/articles.php");
    
$link = db_connect();
article_buy($link, $_GET['id']);
?>