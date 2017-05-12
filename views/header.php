<!DOCTYPE html>
<hmtl>
    <head>
        <meta charset="utf-8">
        <title><?php echo $pageTitle ?></title>
        <link rel="stylesheet" href="<?php echo $path ?>style.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="<?php echo $path ?>node_modules/bootstrap/dist/css/bootstrap.min.css" >
    </head>
    <body>
        <!-- Page div -->
        <div class="container">
            <!-- Header -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a id="blog" class="navbar-brand" href="<?php echo $pageLeftLink ?>">Я могу!</a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo $pageRightLink ?>"><?php echo $pageRightLinkContent ?></a></li>
                    </ul>
                </div>
            </nav> 
            <!-- END Header -->