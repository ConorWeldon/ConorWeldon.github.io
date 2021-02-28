<?php
header("Content-Type: text/html; charset=ISO-8859-1");     //This changes the charachters set/format

require_once 'classes/Connection.php';
require_once 'classes/Articles.php';
require_once 'classes/Util.php';

try {
//    var_dump($_GET['id']);                  //$_GET looks for something inside the url
    
    $article = Article::find($_GET['id']);        //Find works similar to the SelectAll Method
                                              //It finds the story thats equal to my id and displays it
    if($article === false)
    {
        throw new Exception("Article not found");
    }
    else
    {
        $category = Util::selectById('categories', $article->category_id);
        $author = Util::selectById('authors', $article->author_id);
        
    }
}
catch(Exception $e) {
    die("Exception: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>View Story</title>
        
        <link rel="stylesheet" type="text/css" href="css/grid.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    
    <body>
        <div>
            <label>Headline: </label>
            <?= $article->title ?>
            
        </div>
        
        <div>
            <label>Author: </label>
            <a href="<?= $author['link'] ?>">
                <?= $author['firstName'] ?>
                <?= $author['lastName'] ?>
            </a>
            
        </div>
        
        <div>
            <?= $category['name'] ?>
        </div>
        
        <div>
            <?= $article->content ?>
        </div>
    </body>
</html>