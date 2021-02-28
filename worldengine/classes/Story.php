<?php

class Story
{
    public $id;
    public $headline;
    public $shortHeadline;
    public $subHeading;
    public $article;
    public $articleSummary;
    public $date;
    public $time;
    public $author_id;
    public $category_id;
    
    
    public static function find($id) {
        $params = array(
            'id' => $id
        );
        $sql = 'SELECT * FROM articles WHERE id = :id';
        $connection = Connection::getInstance();
        $stmt = $connection->prepare($sql);
        $success = $stmt->execute($params);
        
        if(!$success) {
            throw new Exception("Failed to retrieve stories");
        }
        else {
            $articles = $stmt->fetchObject('Article');
            return $articles;
        }
    }
    
    
    public static function selectAll($limit, $offset = 0) {
        $sql = 'SELECT * FROM stories LIMIT ' . $limit . ' OFFSET ' . $offset;
        $connection = Connection::getInstance();
        
        $stmt = $connection->prepare($sql);
        
        $success = $stmt->execute();
        
        if(!$success) {
            throw new Exception("Failed to retrieve stories");
        }
        else {
            $stories = $stmt->fetchAll(PDO::FETCH_CLASS, 'Story');
            return $stories;
        }
    }
    
    
    public static function selectByCategory($category) {
        
        $sql = "SELECT id FROM categories WHERE name = '" . $category ."'";
        $connection = Connection::getInstance();
        
        $stmt = $connection->prepare($sql);
        
        $success = $stmt->execute();
        
        if(!$success) {
            throw new Exception("Failed to retrieve category");
        }
        else {
            
            $category_id = $stmt->fetch()[0];
            
            $sql = "SELECT * FROM stories WHERE category_id = " . $category_id;
            
            $connection = Connection::getInstance();
            $stmt = $connection->prepare($sql);
            $success = $stmt->execute();
            
            if(!$success) {
                throw new Exception("Failed to retrieve story");
            }
            else {
                $stories = $stmt->fetchAll(PDO::FETCH_CLASS, 'Story');
                return $stories;
            }
        }
        
    }


}


























