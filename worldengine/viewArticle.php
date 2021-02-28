<?php
//header("Content-Type: text/html; charset=ISO-8859-1");     //This changes the charachters set/format

require_once 'classes/Connection.php';
require_once 'classes/Articles.php';
require_once 'classes/Util.php';

try {
//    var_dump($_GET['id']);                  //$_GET looks for something inside the url
    
    $Latest = Article::selectAll(5, 7);
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


<!doctype html>

<style>
a {
    text-decoration: none;
    color: inherit;
}
</style>

<html lang="en">

<head>
    <title>Artical Page</title>

    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="css/grid.css">
    <link rel="stylesheet" type="text/css" href="css/styler.css">

</head>

<body>
    <div class="container">
        <div class="twelve white-bg">
            <div class="one article-logo strip-right strip-left"></div>

            <div class="two marg-head strip-left">
                <h1 class="article-logo-text"><a href="Homepage.php">World</a></h1>
                <h1 class="article-logo-text2"><a href="Homepage.php">Engine</a></h1>
            </div>

            <div class="flex-end marg-head">
                <div class="one">
                    <h1 class="article-sub">Subcribe</h1>
                </div>

                <div class="one nav-logo strip-right">
                    <img src="images/email-icon.png">
                    <img class="search-logo" src="images/search-logo.png">
                </div>

                <div class="one menu-text strip-left strip-right">
                    <h1 class="article-menu">Menu</h1>
                </div>

                <div class="one menu-logo strip-left strip-right">
                    <img src="images/menu-logo.png">
                </div>
            </div>

            <div class="twelve nav-line strip-left strip-right"></div>

            <div class="clear"></div>

            <div class="twelve strip-left white-bg">
                <div class="article-container white-bg">
                    <div class="one strip-left">
                        <h1 class="article-category"><span class="article-category-border"><?= $category['name'] ?></span></h1>
                    </div>

                    <div class="clear"></div>

                    <div class="eight strip-left strip-right">
                        <h1 class="article-title"><?= $article->title ?></h1>
                    </div>

                    <div class="clear"></div>

                    <h1 class="article-subtitle"><?= $article->subtitle ?></h1>

                    <div class="clear"></div>

                    <div class="three strip-left">
                        <h1 class="author-by author-bottom"><span class="article-author"><a href="<?= $author['link'] ?>">
                                    <?= $author['firstName'] ?>
                                    <?= $author['lastName'] ?>
                                </a></span></h1>
                    </div>

                    <div class="flex-end">
                        <div class="two strip-right">
                            <h1 class="article-read"><?= $article->howlongread ?></h1>

                            <div class="clear"></div>

                            <div class="logos">
                                <img class="gap" src="images/facebook-logo.png">
                                <img class="gap" src="images/twitter-logo.png">
                                <img class="gap" src="images/mail-logo.png">
                                <img class="gap" src="images/chain-logo.png">
                            </div>
                        </div>
                    </div>

                    <div class="clear"></div>

                    <div class="article-line strip-left strip-right"></div>

                    <div class="clear"></div>

                    <p class="article"><?= $article->content ?></p>

                    <div class="article-line strip-left strip-right"></div>

                    <div class="media-boxes">
                        <div class="art-box">
                            <img class="facebook" src="images/facebook-logo-square.png">

                            <h1 class="box-text">Share</h1>
                        </div>

                        <div class="art-box art-box-gap">
                            <img class="twitter" src="images/twitter-logo.png">

                            <h1 class="box-text">Tweet</h1>
                        </div>

                        <div class="art-box art-box-gap">
                            <img class="email" src="images/mail-logo.png">

                            <h1 class="box-text">Share</h1>
                        </div>

                        <div class="art-box art-box-gap">
                            <img class="chain-logo" src="images/chain-logo.png">

                            <h1 class="box-text">copy</h1>
                        </div>
                    </div>

                    <div class="article-sec2">
                        <h1 class="art-latest">Latest in</h1>
                        <h1 class="art-science">Science</h1>
                    </div>

                    <div class="sect2-switch">
                        <div class="one strip-left strip-right">
                            <h1 class="lat-title">Latest</h1>
                        </div>

                        <div class="one strip-left strip-right">
                            <h1 class="tren-title">Trending</h1>
                        </div>
                    </div>

                    <div class="clear"></div>

                    <div class="sect2-line strip-left strip-right"></div>

                    <?php foreach($Latest as $article){
                                $category = Util::selectById("categories", $article->category_id);
                                $author = Util::selectById("authors", $article->author_id);
                            ?>

                    <div class="flex-in">
                        <h1 class="art-sec-categories"><?= $category["name"] ?></h1>

                        <div class="art-sec-gap">
                            <h1 class="art-sec-titles"><a href="viewArticle.php?id=<?= $article->id ?>"><?= SUBSTR($article->title, 0, 50) ?></a></h1>

                            <h1 class="art-sec-subtitle"><a href="viewArticle.php?id=<?= $article->id ?>"><?= SUBSTR($article->subtitle, 0, 50) ?></a></h1>
                        </div>
                    </div>
                

                    <div class="clear"></div>

                    <div class="sect2-line2 strip-left strip-right"></div>

                    <?php } ?>
                    </div>

                    <div class="twelve black-bg footer-marg">
                        <div class="images">
                            <img class="img-one" src="images/Email.png">
                            <img class="img-all" src="images/Google.png">
                            <img class="img-all" src="images/Instagram.png">
                            <img class="img-all" src="images/snapchat.png">
                            <img class="img-all" src="images/Visco.png">
                        </div>


                        <h1 class="footer-text footer-text-marg">We're based in Dublin, Ireland</h1>

                        <h1 class="footer-text">We work with clients from all over! Get in touch with us!</h1>

                        <div class="footer-box">
                            <h1 class="footer-num">+353 86 278 8342</h1>
                        </div>

                        <div class="twelve line grey-bg strip-right strip-left"></div>

                        <div class="clear"></div>

                        <div class="twelve footer-bot-marg">
                            <div class="one footer-logo strip-left strip-right"></div>

                            <div class="two strip-left">
                                <h1 class="footer-logo-text">World</h1>
                                <h1 class="footer-logo-text2">Engine</h1>
                            </div>

                            <div class="three strip-left strip-right">
                                <h1 class="copright-foot">Copyright © 1996-2015 World Engine Society</h1>
                            </div>

                            <div class="five strip-left strip-right">
                                <h1 class="copright-foot">Copyright © 2015-2019 World Engine Partners, LLC. All rights reserved</h1>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</body>

</html>