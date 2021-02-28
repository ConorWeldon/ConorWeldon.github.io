<?php 
header("Content-Type: text/html; charset=ISO-8859-1");               //This changes the charachters set/format

require_once 'classes/Connection.php';
require_once 'classes/Articles.php';
require_once 'classes/Util.php';

try {
    $articles = Article::selectAll(5);
    $sideStories = Article::selectAll(3, 1);
    $worldStories = Article::selectByCategory("Animals");
}
catch(Exception $e) {
    die("Exception: " . $e->getMessage());
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>NewsSite</title>
        
        <link rel="stylesheet" type="text/css" href="css/grid.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    
    <body>
        <div class="container">
            <div class="nine">
                <h1>News</h1>
                
                <?php foreach($articles as $article) { 
                    $author = Util::selectById("authors", $article->author_id);
                ?>
                
                <h4><?php echo $article->title ?></h4>
                <p class="author">
                    <?= $author["firstName"] . ' ' . $author["lastName"] ?>
                </p>
                <article>
                    <?= $article->article?>
                </article>
                <br>
                <?php } ?>
                
                
                <h2>World Stories</h2>
                
                <?php foreach($worldStories as $article) { 
                    $author = Util::selectById("authors", $article->author_id);
                ?>
                
                <h4><?php echo $article->title ?></h4>
                <p class="author">
                    <?= $author["firstName"] . ' ' . $author["lastName"] ?>
                </p>
                <article>
                    <?= $article->article?>
                </article>
                <br>
                <?php } ?>
                
            </div>
            <div class="three">
                <h2>Trending</h2>
                
                <?php foreach($sideStories as $article) { 
                    $category = Util::selectById("categories", $article->category_id);
                    $author = Util::selectById("authors", $article->author_id);
                ?>
                
                <h3><?= $category["name"] ?></h3>
                <h4><a href="viewStory.php?id=<?= $article->id ?>"><?= $article->title ?></a></h4>
                <p class="author">
                    <?= $author["firstName"] . ' ' . $author["lastName"] ?>
                </p>
                <p>
                    <?= $article->articleSummary?>
                </p>
                <br>
                <?php } ?>
                
            </div>
        </div>
        
    </body>
</html>









