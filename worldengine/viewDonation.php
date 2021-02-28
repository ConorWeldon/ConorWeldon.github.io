<?php
//header("Content-Type: text/html; charset=ISO-8859-1");     //This changes the charachters set/format

require_once 'classes/Connection.php';
require_once 'classes/Articles.php';
require_once 'classes/Util.php';

try {
//    var_dump($_GET['id']);                  //$_GET looks for something inside the url
    
    $donations1 = Donation::selectAll(3);
    $donations = Donation::find($_GET['id']);        //Find works similar to the SelectAll Method
                                              //It finds the story thats equal to my id and displays it
    if($donations === false)
    {
        throw new Exception("Article not found");
    }
    else
    {
        
        
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
    <title>Donation Page</title>

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

            <div class="article-container">
                       <h1 class="article-subt"><?= $donations->title ?></h1>
                       
                       <p class="article"><?= $donations->subtitle ?></p>
                       
                       <p class="article"><?= $donations->information ?></p>

                        <h1 class="ThreeLB-WB-Info"><a href="viewDonation.php?id=<?= $donations->id ?>"><?= $donations->button ?></a></h1>
               
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

                <div class="flex-in">
                    <h1 class="art-sec-categories">World</h1>

                    <div class="art-sec-gap">
                        <h1 class="art-sec-titles">Humanity and its cycle of evolution</h1>

                        <h1 class="art-sec-subtitle">Have humans evolved to fast that we cant keep up - The battle of our ever-changing life</h1>
                    </div>
                </div>

                <div class="clear"></div>

                <div class="sect2-line2 strip-left strip-right"></div>

                <div class="flex-in">
                    <h1 class="art-sec-categories">Science</h1>

                    <div class="art-sec-gap">
                        <h1 class="art-sec-titles">What are Carbon Offsets?</h1>

                        <h1 class="art-sec-subtitle">Here’s why people are buying them</h1>
                    </div>
                </div>

                <div class="clear"></div>

                <div class="sect2-line2 strip-left strip-right"></div>

                <div class="flex-in">
                    <h1 class="art-sec-categories">Animals</h1>

                    <div class="art-sec-gap">
                        <h1 class="art-sec-titles">Exctinct animal found</h1>

                        <h1 class="art-sec-subtitle">Thought extinct for 30 years, the stary night toad has been rediscovered</h1>
                    </div>
                </div>

                <div class="clear"></div>

                <div class="sect2-line2 strip-left strip-right"></div>

                <div class="flex-in">
                    <h1 class="art-sec-categories">Magazine</h1>

                    <div class="art-sec-gap">
                        <h1 class="art-sec-titles">Why do we get annoyed?</h1>

                        <h1 class="art-sec-subtitle">Science has irritatingly few answers</h1>
                    </div>
                </div>

                <div class="clear"></div>

                <div class="sect2-line2 strip-left strip-right"></div>

                <div class="flex-in">
                    <h1 class="art-sec-categories">Science</h1>

                    <div class="art-sec-gap">
                        <h1 class="art-sec-titles">Greenland’s demise</h1>

                        <h1 class="art-sec-subtitle">Newly spotted lakes on Greenland ice are speeding up its demise</h1>
                    </div>
                </div>

                <div class="sect2-line2 strip-left strip-right"></div>
            </div>
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
</body>