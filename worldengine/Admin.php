<?php
require_once 'classes/Connection.php';
require_once 'classes/Articles.php';
require_once 'classes/Util.php';

try {
    $articles = Article::selectAll(25,0);
	$category = Article::selectByCategory("Science");
 
}
catch (Exception $e) {
    die("Exception: " . $e->getMessage());
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset="utf-8">
        
        <title>Articles</title>
        
        <style>
            table {
              font-family: arial, sans-serif;
              border-collapse: collapse;
              /*width: 100%;*/
            }

            td, th {
              border: 1px solid #dddddd;
              text-align: left;
              padding: 8px;
            }

            tr:nth-child(even) {
              background-color: #dddddd;
            }
        </style>
    </head>
    <body>
        
        <h1>List of Articles</h1>
		
		<h2><a href="addArticleForm.php">Add Bike</a></h2>
		
		<h3>All Articles</h3>
        <table>
            <thead>
                <tr>
                    <th>title </th>
                    <th>subtitle</th>
                    <th>date</th>
                    <th>Category</th>
					<th>content</th>
                    <th>howlongread</th>
                    <th>featured</th>
					

                </tr>
            </thead>
            <tbody>
                <?php foreach ($articles as $article) { 
				
				$category = Util::selectByID('categories', $article->category_id);
			
				?>
                    <tr>
                        <td><a href="viewArticle.php?id=<?= $article->id; ?>"><?= $article->title; ?></a></td>
                        <td><?= $article->subtitle; ?> </td>  
                        <td><?= $article->date; ?> </td>  
						<td><?= $category["name"] ?></td>
                        <td><?= SUBSTR($article->content, 0, 250) ?> </td>
                        <td><?= $article->howlongread; ?> </td>
                        <td><?= $article->featured; ?> </td>
                        <td><a href="deleteArticle.php?id=<?= $article->id; ?>" >Delete Bike</a></td>
                    </tr>
					
					
                <?php } ?>
            </tbody>
        </table>

		<br>
		
		<h3>Science Articles</h3>
        <table>
            <thead>
                  <tr>
                    <th>title </th>
                    <th>subtitle</th>
                    <th>date</th>
                    <th>Category</th>
					<th>content</th>
                    <th>howlongread</th>
                    <th>featured</th>
					

                </tr>
            </thead>
            <tbody>
                <?php foreach ($category  as $articles) { 
				
				$category = Util::selectByID('categories', $article->category_id);
			
				?>
                     <tr>
                        <td><a href="viewArticle.php?id=<?= $article->id; ?>"><?= $article->title; ?></a></td>
                        <td><?= $article->subtitle; ?> </td>  
                        <td><?= $article->date; ?> </td>  
						<td><?= $category["name"] ?></td>
                        <td><?= SUBSTR($article->content, 0, 250) ?> </td>
                        <td><?= $article->howlongread; ?> </td>
                        <td><?= $article->featured; ?> </td>
                        <td><a href="deleteArticle.php.php?id=<?= $bikes->id; ?>" >Delete Bike</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
                        
                    
   
    </body>
</html>
