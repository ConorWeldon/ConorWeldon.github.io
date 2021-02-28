<?php
require_once 'classes/Connection.php';
require_once 'classes/Util.php';

try {
    $categories = Util::selectAll('categories');
    $authors = Util::selectAll('authors');
 
}
catch (Exception $e) {
    die("Exception: " . $e->getMessage());
}
?>
<style>
label {
	font-weight:bold;
	display: block;
}
</style>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Article Form</title>
        
        <title>Homepage</title>
        
        <meta charset="utf-8">
        
        <link rel="stylesheet" type="text/css" href="css/grid.css">
        <link rel="stylesheet" type="text/css" href="css/styler.css">
        
        <script src="js/form.js"></script>
    </head>
    <body>
        <div class="container">
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
                    
            <h1>Add new Article</h1>
            <form method="POST" action="addArticle.php">
           
            <div class="justify-me">
                <div class="five strip-left">
                    <label>Title</label>
                    <input class="five strip-left" type="text" name="title" id="title">
                    
                    <h5 class="error" id="titleError"></h5>
                </div>

                <div class="five strip-left">
                    <label>Sub Title</label>
                    <input class="six strip-left" type="text" name="subtitle" id="subtitle">
                    
                    <h5 class="error" id="subtitleError"></h5>
                </div>

                <div class="five strip-left">
                    <label>Date</label>
                    <input class="five strip-left" type="date" name="date" id="date">
                    
                    <h5 class="error" id="dateError"></h5>
                </div>

               <div class="five strip-left">
                    <label>Content</label>
                    <input class="six strip-left" type="text" name="content" id="content">
                    
                   <h5 class="error" id="contentError"></h5>
                </div>
                
                <div class="clear"></div>

                <div class="three strip-left">
                    <label>How Long Read</label>
                    <input class="three strip-left" type="text" name="howlongread" id="howlongread">
                    
                    <h5 class="error" id="howlongreadError"></h5>
                </div>

                <div class="one strip-left">
                    <label>Featured</label>
                    <input type="text" name="featured" id="featured">
                    
                    <h5 class="error" id="featuredError"></h5>
                </div>
                
                <div class="clear"></div>

                <div class="two strip-left">
                <label>Category</label>
                <select class="two strip-left" name="category" id="category">
                    <?php foreach ($categories as $category) { ?>
                    <option value="<?= $category['id']; ?>"><?= $category['name']; ?></option>
                    <?php } ?>
                </select>
                
                    <h5 class="error" id="categoryError"></h5>
                </div>

                <div class="two strip-left">
                <label>Author</label>
                <select class="two strip-left" name="author" id="author">
                    <?php foreach ($authors as $author) { ?>
                    <option value="<?= $author['id']; ?>"><?= $author['firstName']; ?> <?= $author['lastName']; ?></option>
                    <?php } ?>
                </select>
                
                <h5 class="error" id="authorError"></h5>
                </div>
                
                <div class="clear"></div>
                
                <br>

                <a href="Admin.php">Cancel</a>
                <input type="submit" value="Confirm" id="submit">
                </div>
            </form>
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
                   
    </body>
</html>
