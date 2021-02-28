<?php

class Article
{
    public $id;
    public $title;
    public $subtitle;
    public $date;
    public $content;
    public $howlongread;
    public $featured;
    public $category_id;
    public $author_id;
    
    
    public function save() {
        $params = array(
            'title' => $this->title,
		
			'subtitle' => $this->subtitle,
			'date' => $this->date,
			'content' => $this->content,
            'howlongread' => $this->howlongread,
            'featured' => $this->featured,
            'category_id' => $this->category_id,
            'author_id' => $this->author_id,
            
        );

        $sql = "INSERT INTO articles(
                    title, subtitle, date, content, howlongread, featured, category_id, author_id
                ) VALUES (
                    :title, :subtitle, :date, :content, :howlongread, :featured, :category_id, :author_id
                )";

        $conn = Connection::getInstance();
        $stmt = $conn->prepare($sql);
        $success = $stmt->execute($params);
        if (!$success) {
            throw new Exception("Failed to save Article");
        }
        else {
            $rowCount = $stmt->rowCount();
            if ($rowCount !== 1) {
                throw new Exception("Error saving Article");
            }
           
            $this->id = $conn->lastInsertId('Article');
            $this->id = $conn->lastInsertId('Article');
            
        }
    }
    
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
        public static function delete($id) {
        $params = array(
            'id' => $id
        );
        $sql = 'DELETE FROM articles WHERE id = :id';
        $connection = Connection::getInstance();
        $stmt = $connection->prepare($sql);
        $success = $stmt->execute($params);
    }
    
    
    public static function selectAll($limit, $offset = 0) {
        $sql = 'SELECT * FROM articles LIMIT ' . $limit . ' OFFSET ' . $offset;
        $connection = Connection::getInstance();
        
        $stmt = $connection->prepare($sql);
        
        $success = $stmt->execute();
        
        if(!$success) {
            throw new Exception("Failed to retrieve stories");
        }
        else {
            $articles = $stmt->fetchAll(PDO::FETCH_CLASS, 'Article');
            return $articles;
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
            
            $category = $stmt->fetch()[0];
            
            $sql = "SELECT * FROM articles WHERE category_id = " . $category;
            
            $connection = Connection::getInstance();
            $stmt = $connection->prepare($sql);
            $success = $stmt->execute();
            
            if(!$success) {
                throw new Exception("Failed to retrieve Category");
            }
            else {
                $articles = $stmt->fetchAll(PDO::FETCH_CLASS, 'Article');
                return $articles;
            }
        }
        
    //w
    
    
    
    //public static function selectByCategory($author) {
        
        $sql = "SELECT id FROM authors WHERE name = '" . $author ."'";
        $connection = Connection::getInstance();
        
        $stmt = $connection->prepare($sql);
        
        $success = $stmt->execute();
        
        if(!$success) {
            throw new Exception("Failed to retrieve Authors");
        }
        else {
            
            $authors = $stmt->fetch()[0];
            
            $sql = "SELECT * FROM articles WHERE author_id = " . $author;
            
            $connection = Connection::getInstance();
            $stmt = $connection->prepare($sql);
            $success = $stmt->execute();
            
            if(!$success) {
                throw new Exception("Failed to retrieve Author");
            }
            else {
                $articles = $stmt->fetchAll(PDO::FETCH_CLASS, 'Article');
                return $articles;
            }
        }
        
    }

}


class Donation
{
    public $id;
    public $title;
    public $subtitle;
    public $date;
    public $content;
    public $howlongread;
    public $featured;
    public $category_id;
    public $author_id;
    
    
    public static function selectAll($limit, $offset = 0) {
        $sql = 'SELECT * FROM donations LIMIT ' . $limit . ' OFFSET ' . $offset;
            $connection = Connection::getInstance();

            $stmt = $connection->prepare($sql);

            $success = $stmt->execute();

            if(!$success) {
                throw new Exception("Failed to retrieve donations");
            }
            else {
                $donations = $stmt->fetchAll(PDO::FETCH_CLASS, 'Donation');
                return $donations;
            }
    }
    
    
    public static function find($id) {
        $params = array(
            'id' => $id
        );
        $sql = 'SELECT * FROM donations WHERE id = :id';
        $connection = Connection::getInstance();
        $stmt = $connection->prepare($sql);
        $success = $stmt->execute($params);
        
        if(!$success) {
            throw new Exception("Failed to retrieve stories");
        }
        else {
            $donations = $stmt->fetchObject('Donation');
            return $donations;
        }
        
    }
}























