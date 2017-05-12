<?php
    $pageTitle="Админ панель:Котик";
    $pageRightLink="";
    $pageLeftLink="../index.php";
    $pageRightLinkContent="";
    $path="../";
    include_once('header.php');
?>
            <div id="addart">
                <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
                    <label>
                        Название
                        <input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required>
                    </label>
                    <label>
                        Дата
                        <input type="date" name="date" value="<?=$article['date']?>" class="form-item" required>
                    </label>
                    <label>
                        Содержимое
                        <textarea class="form-item" name="content" required><?=$article['content']?></textarea>
                    </label>
                        <label>
                        Категория
<!--                        <input class="form-item" type="" name="category" value="<?=$article['category']?>" required>-->
                        <select name="category">
                            <option disabled>Выберите категорию</option>
                            <option value="1">1</option>
                            <option selected value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                           </select>
                        </label>
                         <label>
                        Изображение
                        <input type="text" name="image" value="<?=$article['image']?>" class="form-item" required>
                    </label>
                    <input type="submit" value="Сохранить" class="btn">
                </form>
            </div>
<?php
    include_once('footer.php');
?>