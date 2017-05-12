<?php
    $pageTitle="Я могу!";
    $pageRightLink="admin";
    $pageLeftLink="index.php";
    $pageRightLinkContent="Панель администратора";
$path="";
    include_once('header.php');
?>
            
<div class="container">
    <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">
            <p class="pull-right visible-xs">
                <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
            </p>
            <div class="row">

                <?php foreach($articles as $article): ?>
                <div class="col-xs-6 col-lg-4">
                    <div class="thumbnail">
                        <img src="<?=$article['image']?>" alt="...">
                        <div class="caption">
                            <h3>>
                                <?=$article['title']?>
                            </h3>
                            <em>Опубликовано: <?=$article['date']?></em>
                            <em>Просмотров: <?=$article['prosmotry']?></em>
                            <em>Раз заказали: <?=$article['buy']?></em>
                            <em>Кол-во лайков: <?=$article['likes']?></em>
                            
                            
                               <p>
                                <?=articles_intro($article['content'])?>
                            </p>
                            <p><a href="article.php?id=<?=$article['id']?>" class="btn btn-primary" role="button">Просмотреть</a></p>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div><!--/.col-xs-12.col-sm-9-->
        <?php include_once('side_bar.php'); ?>
    </div>
</div>
<?php
    include_once('footer.php');
?>