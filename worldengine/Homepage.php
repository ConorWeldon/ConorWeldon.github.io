<?php 
//header("Content-Type: text/html; charset=ISO-8859-1");               //This changes the charachters set/format

require_once 'classes/Connection.php';
require_once 'classes/Articles.php';
require_once 'classes/Util.php';

try {
    $articles = Article::selectAll(5);
    $sideStories = Article::selectAll(7, 0);
    $subStories = Article::selectAll(1, 5);
    $subStories2 = Article::selectAll(2, 6);
    $MainStory = Article::selectAll(1, 4);
    $categorys = Article::selectByCategory("Animals");
    $donations = Donation::selectAll(3);
}
catch(Exception $e) {
    die("Exception: " . $e->getMessage());
}
?>

<!doctype html>

<!--
<style>
a {
    text-decoration: none;
    color: inherit;
}
</style>
-->

<html lang="en">
    <head> 
        <title>Homepage</title>
        
        <meta charset="utf-8">
        
        <link rel="stylesheet" type="text/css" href="css/grid.css">
        <link rel="stylesheet" type="text/css" href="css/styler.css">
        
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
                    
                    <div class="clear"></div>
                    
            <div class="black-bg container">
                   
                    <h1 class="latestT"><span class="border-left">LATEST STORIES</span></h1>
                    
                    <div class="stories">
                        <div class="story four strip-left story">
                           <div class="four strip-left">
                               <?php foreach($sideStories as $article){
                                    $category = Util::selectById("categories", $article->category_id);
                                    $author = Util::selectById("authors", $article->author_id);
                                ?>
                           
                            <div class="SmallB1 one strip-left "></div>
               
                            <h3 class="category"><?= $category["name"] ?></h3>
                
                           <div class="story three strip-left strip-right sheight">
                                <h2 class="title strip-left"><a href="viewArticle.php?id=<?= $article->id ?>"><?= SUBSTR($article->title, 0, 50) ?></a></h2>
                            </div>
                            <?php } ?>
                        </div>
                        
                        <div class="clear"></div>
                        
                        <h1 class="SeeMore1"><span class="border-bottom">See More</span></h1>
                    </div>
                </div>
                
                <div class="eight strip-left strip-right">    
                    <div class="white">
                       <?php foreach($MainStory as $article){
                            $category = Util::selectById("categories", $article->category_id);
                            $author = Util::selectById("authors", $article->author_id);
                        ?>
                       
                        <h1 class="Science flexS">SCIENCE</h1>
                        <h1 class="Discovery flexS">DISCOVERY</h1>
                
                        <div class="Mtitle">
                            <h1 class="MainTitle"><?= $article->title ?></h1>
                    
                            <h3 class="BigBoxTI"><?= SUBSTR($article->subtitle, 0, 115) ?></h3>
                        </div>
                
                        <div class="ReadMoreSection">
                            <h2 class="ReadMore"><a href="viewArticle.php?id=<?= $article->id ?>">READ MORE</a></h2>

                            <div class="ReadMoreIcon">
                                <div class="ReadMoreIconOne">
                                    <p></p>
                                </div>

                                <div class="ReadMoreIconTwo">
                                    <p></p>
                                </div>

                                <div class="ReadMoreIconThree">
                                    <p></p>
                                </div>

                                <div class="ReadMoreIconFour">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    
                    <div class="clear"></div>
            
                    <div class="SmallBox">
                       <?php foreach($subStories as $article){
                            $category = Util::selectById("categories", $article->category_id);
                            $author = Util::selectById("authors", $article->author_id);
                        ?>
                        <div class="SmallBoxOne">
                            <h1 class="ThreeB-Title"><?= $category["name"] ?></h1>
                            
                            <h1 class="ThreeB-Info"><?= SUBSTR($article->subtitle, 0, 75) ?></h1>
                            
                            <div class="clear"></div>
                            
                            <div class="ReadMoreSectionThreeB">
                                <h2 class="ReadMore"><a href="viewArticle.php?id=<?= $article->id ?>">READ MORE</a></h2>

                                <div class="ReadMoreIcon">
                                    <div class="ReadMoreIconOne">
                                        <p></p>
                                    </div>

                                    <div class="ReadMoreIconTwo">
                                        <p></p>
                                    </div>

                                    <div class="ReadMoreIconThree">
                                        <p></p>
                                    </div>

                                    <div class="ReadMoreIconFour">
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        
                        <?php foreach($subStories2 as $article){
                            $category = Util::selectById("categories", $article->category_id);
                            $author = Util::selectById("authors", $article->author_id);
                        ?>
                        
                        <div class="SmallBoxTwo">
                            <h1 class="ThreeB-Title"><?= $category["name"] ?></h1>
                            
                            <h1 class="ThreeB-Info"><?= SUBSTR($article->subtitle, 0, 75) ?></h1>
                            
                            <div class="clear"></div>
                            
                            <div class="ReadMoreSectionThreeB">
                               <h2 class="ReadMore"><a href="viewArticle.php?id=<?= $article->id ?>">READ MORE</a></h2>

                                <div class="ReadMoreIcon">
                                    <div class="ReadMoreIconOne">
                                        <p></p>
                                    </div>

                                    <div class="ReadMoreIconTwo">
                                        <p></p>
                                    </div>

                                    <div class="ReadMoreIconThree">
                                        <p></p>
                                    </div>

                                    <div class="ReadMoreIconFour">
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    
                </div>
            </div>
            
            
            <div class="clear"></div>

            <div class="twelve center-me">
                
                <h1 class="WWD-Text">What we do</h1>
                
                <div class="eighty-wide center-me">
                    <h1 class="WWD-Info">WE INVEST BOLD PEOPLE WITH TRANSFORMATIVE IDEAS THAT HELP MILLIONS UNDERSTAND VALUE, AND PROTECT LIFE ON OUR PLANET. </h1>
                </div>
                
                <h1 class="SeeMore2"><span class="border-bottom"></span></h1>
            </div>
            
            <div class="clear"></div>
            
            <div class="twelve center-TB">
               <?php foreach($donations as $donation){
                    $category = Util::selectById("categories", $article->category_id);
                    $author = Util::selectById("authors", $article->author_id);
                ?>
                
                <div class="LongBoxes three">
                   <div class="ThreeLB black-bg">
                       <h1 class="ThreeLB-Title"><?= $donation->title ?></h1>
                       
                       <h1 class="three ThreeLB-Info"><?= $donation->subtitle ?></h1>
                       
                       <div class="ThreeLB-WB">
                           <h1 class="ThreeLB-WB-Info"><a href="viewDonation.php?id=<?= $donation->id ?>"><?= $donation->button ?></a></h1>
                       </div>
                   </div>
               </div>
               <?php } ?>    
            </div>
            
            <div class="clear"></div>
               
            <div class="twelve">
                <h1 class="SeeMore2"><span class="border-bottom2"></span>See All</h1>
            </div>
            
            <div class="clear"></div>
            
            <div class="twelvbe blue-box">
                <h1 class="logo-text">World Engine</h1>
            </div>
            
            <div class="clear"></div>
            
            <div class="twelve gradient-bg distance">
                <h1 class="SBTitle">Overheard At World Engine</h1>

                <h1 class="SBInfo">LISTEN TO SEASON ONE OF OUR PODCAST</h1>

                <div class="SBBox three strip-left">
                   <div class="arrow-right"></div>

                    <h1 class="SBBoxText">Listen on Spotify</h1>
                </div>
            </div>
            
            <div class="clear"></div>
            
            <div class="twelve center-me">
                <h1 class="WE-Tv-Text">World Engine Tv</h1>
                
                <h1 class="SeeMore3"><span class="border-bottom3"></span></h1>
            </div>
            
            <div class="clear"></div>
            
            <div class="twelve black-bg">
                <h1 class="Tv-text three">New Seasons</h1>
                
                <div class="clear"></div>
                
                <h1 class="Tv-title eight strip">Exploring the deep with Conor Weldon</h1>
                
                <div class="clear"></div>
                
                <h1 class="Tv-info six strip">The famed survivalist takes A-list celebrities on journeys into the wildest locations around the world. New episodes Tuesdays 10/9c.</h1>
                
                <div class="clear"></div>
                
                <div class="tv-box">
                    <h1 class="tv-box-text">Watch Now</h1>
                </div>
            </div>
            
            <div class="twelve white-bg">
                <h1 class="tvbox-stitle">World Engine Originals</h1>
                
                <div class="clear"></div>
                
                <div class="tvbox-sboxes">
                    <div class="one tvbox-sbox-one strip-left strip-right">
                        <h1 class="box-one">Runnning Wild</h1>
                        
                        <h1 class="box-one-author">Bear Grills</h1>
                        
                        <div class="tvbox-logo"></div>
                    </div>
                    
                    <div class="one tvbox-sbox-all strip-left strip-right">
                        <h1 class="box-two">Life below zero°</h1>
                       
                       
                        <div class="tvbox-logo-two"></div>
                    </div>
                    
                    <div class="one tvbox-sbox-all strip-left strip-right">
                        <h1 class="box-three">Dr.T</h1>
                        <h1 class="box-three2">· Lone Star Vet ·</h1>
                       
                       
                        <div class="tvbox-logo-three"></div>
                    </div>
                    
                    <div class="one tvbox-sbox-all strip-left strip-right">
                        <h1 class="box-four">The</h1>
                        <h1 class="box-four2">Hot Zone</h1>
                       
                        <div class="tvbox-logo-four"></div>
                    </div>
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
                    
                    <div class="copy-marg">
                        <div class="three strip-left strip-right">
                            <h1 class="copright-foot">Copyright © 1996-2015 World Engine Society</h1>
                        </div>

                        <div class="five strip-left strip-right">
                            <h1 class="copright-foot">Copyright © 2015-2019  World Engine Partners, LLC. All rights reserved</h1>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
          <!-- <div class="twelve white-bg strip-right strip-left">
               <div class="five strip-left">
                   <h1 class="WWD-Text">What we do</h1>
               </div>
               
               <div class="ten">
                   <h1 class="WWD-Info">WE INVEST BOLD PEOPLE WITH TRANSFORMATIVE IDEAS THAT HELP MILLIONS UNDERSTAND VALUE, AND PROTECT LIFE ON OUR PLANET. </h1>
               </div>
               
               <div class="clear"></div>
               
               <div class="LongBoxes">
                   <div class="ThreeLB black-bg">
                       <h1 class="ThreeLB-Title">Sumatran Rhino Rescue</h1>
                       
                       <h1 class="three ThreeLB-Info">Help Save a species from extinction</h1>
                       
                       <div class="ThreeLB-WB">
                           <h1 class="ThreeLB-WB-Info">Donate</h1>
                       </div>
                   </div>
               </div>
           </div>-->

           
        
      
        

        
        
        
        
        
        
        
        
        
        
        
        
        
        <!--
        <div class="container twelve">
               <div class="one">
                   <p></p>
               </div>
               
               <div class="three LatestS">
                    <div class="latest">
                        <p></p>
                    </div>
            
                    <h1 class="latestT">LATEST STORIES</h1>
                </div>
            <div class="clear"></div>
            
            <div class="flexS">
                <div class="SmallB1 one">
                </div>
                
                <h3 class="category flexS">HISTORY</h3>
                
                <h2 class="title three">WWII Veteran’s remember <br> Hitler’s ‘last gamble’</h2>
                
                <!--<div class="BigB flexEnd">
                    <p></p>
                </div>--><!--
            </div>
            
            <div class="clear"></div>
            
            <div class="flexS">
                <div class="SmallB">
                </div>
                
                <h3 class="category flexS">HISTORY</h3>
                
                <h2 class="title">WWII Veteran’s remember <br> Hitler’s ‘last gamble’</h2>
            </div>
            
            <div class="clear"></div>
            
            <div class="flexS">
                <div class="SmallB one">
                </div>
                
                <h3 class="category flexS">HISTORY</h3>
                
                <h2 class="title">WWII Veteran’s remember <br> Hitler’s ‘last gamble’</h2>
            </div>
            
            <div class="clear"></div>
            
            <div class="flexS">
                <div class="SmallB">
                </div>
                
                <h3 class="category flexS">HISTORY</h3>
                
                <h2 class="title">WWII Veteran’s remember <br> Hitler’s ‘last gamble’</h2>
            </div>
            
            <div class="clear"></div>
            
            <div class="flexS">
                <div class="SmallB">
                </div>
                
                <h3 class="category flexS">HISTORY</h3>
                
                <h2 class="title">WWII Veteran’s remember <br> Hitler’s ‘last gamble’</h2>
            </div>
            
            <div class="clear"></div>
            
            <div class="flexS">
                <div class="SmallB">
                </div>
                
                <h3 class="category flexS">HISTORY</h3>
                
                <h2 class="title">WWII Veteran’s remember <br> Hitler’s ‘last gamble’</h2>
            </div>
            
            <div class="clear"></div>
            
            <div class="flexS">
                <div class="SmallB">
                </div>
                
                <h3 class="category flexS">HISTORY</h3>
                
                <h2 class="title">WWII Veteran’s remember <br> Hitler’s ‘last gamble’</h2>
            </div>
            
            <div class="clear"></div>
            
            <div class="BigB">
                <h1 class="Science flexS">SCIENCE</h1>
                <h1 class="Discovery flexS">DISCOVERY</h1>
                
                <div class="Mtitle">
                    <h1 class="MainTitle">ANCIENT CAVE ARE MAY DEPICT THE WORLD’S OLDEST HUNTING SCENE</h1>
                    
                    <h3 class="BigBoxTI">The spectacular scene in <br>Indonesia reinforces the notion <br>that the origins of art are more <br>global than once thought.</h3>
                </div>
                
                <div class="ReadMoreSection">
                   <h2 class="ReadMore">READ MORE</h2>
                   
                    <div class="ReadMoreIcon">
                        <div class="ReadMoreIconOne">
                            <p></p>
                        </div>
                        
                        <div class="ReadMoreIconTwo">
                            <p></p>
                        </div>
                        
                        <div class="ReadMoreIconThree">
                            <p></p>
                        </div>
                        
                        <div class="ReadMoreIconFour">
                            <p></p>
                        </div>
                    </div>
                    
                    <!--<h2 class="ReadMore">READ MORE</h2>--><!--
                </div>
            </div>
            
            <div class="clear"></div>
            
            <div class="SmallBox">
                <div class="SmallBoxOne">
                    <p></p>
                </div>
                
                <div class="SmallBoxTwo">
                    <p></p>
                </div>
                
                <div class="SmallBoxThree">
                    <p></p>
                </div>
            </div>
        </div>
        
        <div class="clear"></div>
        
        <div class="container ThirdBox">
            <h1 class="WWD">WHAT WE DO</h1>
            
            <h1 class="ten WWDT">WE INVEST BOLD PEOPLE WITH TRANSFORMATIVE IDEAS THAT HELP MILLIONS UNDERSTAND VALUE, AND PROTECT LIFE ON OUR PLANET.</h1>
            
            <div class="clear"></div>
            
            <div class="WWDBL">
                <p></p>
            </div>
        </div>
        
        <div class="clear"></div>
        
        <div class="container FourthBox">
            <div class="ThreeBox">
                <div class="ThreeBoxOne">
                    <div class="TBC">
                        <h1 class="TBT">SUMATRAN RHINO RESCUE</h1>
                        
                        <h1 class="TBST">Help save a species from extinction</h1>
                        
                        <div class="clear"></div>
                        
                        <div class="MoreBoxE">
                            <div class="MoreBox">
                                <h1 class="TBSBT">DONATE</h1>
                            </div>
                        </div>
                    </div>
                    
                    <!--<div class="clear"></div>-->
                    
                    <!--<div class="MoreBoxE">
                        <div class="MoreBox">
                            <h1 class="TBSBT">DONATE</h1>
                        </div>
                    </div>--><!--
                </div>

                <div class="ThreeBoxTwo">
                    <div class="TBC">
                        <h1 class="TBT">PLASTIC : SOURCE TO SEA</h1>
                        
                        <h1 class="TBST">Furthering Science and advancing innovation</h1>
                    </div>
                    
                    <div class="MoreBoxE">
                        <div class="MoreBox">
                            <h1 class="TBSBT">TAKE PART</h1>
                        </div>
                    </div>
                </div>

                <div class="ThreeBoxThree">
                    <div class="TBC">
                        <h1 class="TBT">PRISTINE SEAS</h1>
                        
                        <h1 class="TBST">Exploring and protecting the last wild places in the ocean</h1>
                    </div>
                    
                    <div class="MoreBoxE">
                        <div class="MoreBox">
                            <h1 class="TBSBT">LEARN MORE</h1>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="SeeAllBL">
                <div>
                    <h1 class="SeeAll">SEE ALL</h1>
                </div>
                
                <div class="TBBL">
                    <p></p>
                </div>
            </div>
        </div>
        
        <div class="container FifthBox">
          <div class="relative">
               <h1 class="WELogo">World Engine</h1>
           
                <div class="BlueLogo">
                    <p></p>
                </div>
            </div>
        </div>
        
        <div class="container SixthBox">
            <h1 class="SBTitle">Overheard At World Engine</h1>
            
            <h1 class="SBInfo">LISTEN TO SEASON ONE OF OUR PODCAST</h1>
            
            <div class="SBBox">
               <div class="arrow-right"></div>
               
                <h1 class="SBBoxText">Listen on Spotify</h1>
            </div>
        </div>
        
        <div class="container SeventhBox">
            <h1 class="SvBTitle">World Engine Tv</h1>
        </div>-->
        </div>
    </body>
</html>