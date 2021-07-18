<?php include 'header.php';
      include 'controllers/category.php';
      $categories=getAllCategory();
?>

<html>
    <body>
        <fieldset>
            <p align="middle"><font color="blue" size="5">All Category</font></p>
            <p align="middle">
			<table>
                <th>No</th>
                <th>Name</th>
                
                   
                <?php 
                $i=1;
                foreach($categories as $c){
                    echo "<tr>";
                        echo "<td>$i</td>";
                        echo "<td>".$c["name"]."</td>";
                        echo '<td>
                        
                        <a href="edit_categories.php?id='.$c["id"].'"> 
                        <input type="button" value="Edit">
                        </a>
                        </td>
                    <td>
                        
                        <a href="#"> 
                        <input type="button" value="Delete">
                        </a>
                    </td>';
                    echo "</tr>";
                    $i++;
                }
                ?>
                

            </table>
			</p>
        </fieldset>
    </body>
</html>

<?php include 'footer.php'; ?>