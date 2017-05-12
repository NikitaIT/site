<?php
    $pageTitle="Ямогу";
    
    $pageRightLink="admin";
    $pageLeftLink="index.php";
    $pageRightLinkContent="Панель администратора";
    $path="";
    include_once('header.php');
    
?>
           
            <!-- Content -->
            <div class="row">
              <div class="col-sm-12 col-md-12">
                <div class="thumbnail">
                  <img src="<?=$article['image']?>" alt="...">
                  <div class="caption">
                    <h3><?=$article['title']?></h3>
                    <em>Опубликовано: <?=$article['date']?></em>
                    <p><?=$article['content']?></p>
                    <p><a href="views/buy.php?id=<?=$article['id']?>" class="btn btn-primary" role="button">Заказать</a> 
                    <a href="?id=<?=$article['id']?>&likes=<?=$article['id']?>" class="btn btn-default" role="button">Лайк</a>
                    <a href="#" class="btn btn-default" role="button" onclick="history.back(); return false;">Назад</a></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- END Content -->
<?php
    include_once('footer.php');
?>