<?php
    function articles_all($link){
    // Формируем запрос
        $query = "SELECT * FROM articles ORDER BY id DESC";
        $result = mysqli_query($link, $query);
        
        if(!$result)
            die(mysqli_error($link));
        
    // Извлекаем данные
        $n = mysqli_num_rows($result);
        $articles = array();
        
        for ($i = 0; $i < $n; $i++)
        {
            $row = mysqli_fetch_assoc($result);
            $articles[] = $row;
        }
        
        return $articles;
    }
    
    function article_get($link, $id_article){
        $query = sprintf("SELECT * FROM articles WHERE id=%d", (int)$id_article);
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        
        $article = mysqli_fetch_assoc($result);
        
        return $article;
    }

    function articles_new($link, $title, $date, $content,$category, $image){
        // Подготовка
        $title = trim($title);
        $content = trim($content);   
        $image = trim($image);   
        $category  =  (int)$category;
        // Проверка
        if ($title == '')
            return false;
        
        // Запрос
        $template_add = "INSERT INTO articles (title, date, content, category, likes, image,prosmotry, buy) VALUES ('%s', '%s', '%s', '%d', '%d', '%s', '%d', '%d')";
        
        $query = sprintf($template_add, 
                         mysqli_real_escape_string($link, $title),
                         mysqli_real_escape_string($link, $date),
                         mysqli_real_escape_string($link, $content),
                         $category,
                            0,
                         mysqli_real_escape_string($link, $image),
                        0,
                        0);
        
        echo $query;
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        
        return true;
    }

    function articles_edit($link, $id, $title, $date, $content, $category, $image){
        // Подготовка
        $title = trim($title);
        $content = trim($content);
        $date = trim($date);
        $id = (int)$id;
        $category  =  (int)$category;
        // Проверка
        if ($title == '')
            return false;
        
        // Запрос
        $template_update = "UPDATE articles SET title='%s', content='%s', date='%s', category='%d', likes='%d', image='%s',prosmotry='%d', buy='%d' WHERE id='%d'";
            
        $query = sprintf($template_update, 
                         mysqli_real_escape_string($link, $title),
                         mysqli_real_escape_string($link, $content),
                         mysqli_real_escape_string($link, $date),
                         $category,
                         0,
                         mysqli_real_escape_string($link, $image),
                         0,
                         0,
                         $id);
        
        $result = mysqli_query($link, $query);
        
        if (!result)
            die(mysqli_error($link));
        
        return mysqli_affected_rows($link);
    }

    function articles_delete($link, $id){
        $id = (int)$id;
        // Проверка
        if ($id == 0)
            return false;
        
        // Запрос
        $query = sprintf("DELETE FROM articles WHERE id='%d'", $id);
        $result = mysqli_query($link, $query);
        
        if (!result)
            die(mysqli_error($link));
        
        return mysqli_affected_rows($link);
    }

    function articles_all_by_category($link,$where){
    // Формируем запрос
        $query = sprintf("SELECT * FROM articles WHERE category='%d' ORDER BY id DESC",$where);
        $result = mysqli_query($link, $query);
        
        if(!$result)
            die(mysqli_error($link));
        
    // Извлекаем данные
        $n = mysqli_num_rows($result);
        $articles = array();
        
        for ($i = 0; $i < $n; $i++)
        {
            $row = mysqli_fetch_assoc($result);
            $articles[] = $row;
        }
        
        return $articles;
    }

    function articles_intro($text, $len = 100)
    {
        return mb_substr($text, 0, $len);        
    }
    function articles_prosmotry($link, $id,$val){
        $article = article_get($link, $id);
        // Запрос
        $template_update = "UPDATE articles SET prosmotry='%d' WHERE id='%d'";
            
        $query = sprintf($template_update,
                         (int)$article['prosmotry']+(int)$val,
                         $id);
        
        $result = mysqli_query($link, $query);
        
        //if (!result)
        //    die(mysqli_error($link));
        
        return mysqli_affected_rows($link);
    }
    function article_buy($link, $id){
        $article = article_get($link, $id);
        // Запрос
        $template_update = "UPDATE articles SET buy='%d' WHERE id='%d'";
            
        $query = sprintf($template_update,
                         (int)$article['buy']+(int)1,
                         $id);
        
        $result = mysqli_query($link, $query);
        
        //if (!result)
        //    die(mysqli_error($link));
        
        return mysqli_affected_rows($link);
    }
     function article_like($link, $id){
        $article = article_get($link, $id);
        // Запрос
        $template_update = "UPDATE articles SET likes='%d' WHERE id='%d'";
            
        $query = sprintf($template_update,
                         (int)$article['likes']+(int)1,
                         $id);
        
        $result = mysqli_query($link, $query);
        
        //if (!result)
        //    die(mysqli_error($link));
        
        return mysqli_affected_rows($link);
    }
?>






































