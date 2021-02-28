<?php
require_once 'classes/Connection.php';
require_once 'classes/Articles.php';
require_once 'classes/Util.php';

try {
   
    $deleted = Article::delete($_GET['id']);
    if ($deleted === FALSE) {
        throw new Exception("Article not found");
    }
}
catch (Exception $e) {
    die("Exception: " . $e->getMessage());
}

    header("location: Admin.php");
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bikes</title>
        
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
        
        <h1>List of Bikes</h1>
		
		<a href="addArticleForm.php">Add Bike</a>
		
		<h3>All Bikes</h3>
        <table>
            <thead>
                <tr>
                    <th>brand </th>
                    <th>model</th>
                    <th>Category</th>
					<th>size</th>
                    <th>price</th>
                    <th>amount in stock</th>
					

                </tr>
            </thead>
            <tbody>
                <?php foreach ($articles as $article) { 
				
				$category = Util::selectByID('categories', $bikes->Category_id);
			
				?>
                    <tr>
                        <td><a href="viewBike.php?id=<?= $bikes->id; ?>"><?= $bikes->Brand; ?></a></td>
                        <td><?= $bikes->Model; ?> </td>  
						<td><?= $category["Category_Name"] ?></td>
                        <td><?= $bikes->Size; ?> </td>
                        <td><?= $bikes->Price; ?> </td>
                        <td><?= $bikes->Amount_In_Stock; ?> </td>
                        <td><a href="deleteBike.php?id=<?= $bikes->id; ?>" >Delete Bike</a></td>
                    </tr>
					
					
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>
