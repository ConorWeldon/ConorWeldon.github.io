<?php
require_once 'classes/Connection.php';
require_once 'classes/Articles.php';

try {
    $articles = new Article();
    
    $articles->title = $_POST['title'];
    $articles->subtitle = $_POST['subtitle'];
    $articles->date = $_POST['date'];
    $articles->content = $_POST['content'];
    $articles->howlongread = $_POST['howlongread'];
    $articles->featured = $_POST['featured'];
    $articles->category_id = $_POST['category'];
    $articles->author_id = $_POST['author'];
  

    $articles->save();

    header("Location: Homepage.php");
}
catch (Exception $e) {
    die("Exception: " . $e->getMessage());
}
?>
