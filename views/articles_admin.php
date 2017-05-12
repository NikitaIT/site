
<?php
    $pageTitle="Админ панель:Список";
    $pageRightLink="index.php?action=add";
    $pageLeftLink="../index.php";
    $pageRightLinkContent="Создать объявление";
    $path="../";
    include_once('header.php');
?>
           <div class="container">
            <div id="curve_chart" style="width: 900px; height: 500px"></div>
            </div>
            <!-- END Header (navbar) -->
            <table id="admin_table" class="table">
                <tr>
                    <th>Дата</th>
                    <th>Заголовок</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach($articles as $article): ?>
                    <tr>
                        <td><?=$article['date']?></td>
                        <td><?=articles_intro($article['title'], 80)?></td>
                        <td>
                            <a href="index.php?action=edit&id=<?=$article['id']?>">Редактировать</a>
                        </td>
                        <td>
                            <a href="index.php?action=delete&id=<?=$article['id']?>">Удалить</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Название', 'Лайки', 'Просмотры'],
            <?php foreach($articles as $article): ?>
          ['<?=$article['title']?>',  <?=$article['likes']?>,      <?=$article['prosmotry']?>],
          
            <?php endforeach ?>
            ['',  0,      0]
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
<?php
    include_once('footer.php');
?>