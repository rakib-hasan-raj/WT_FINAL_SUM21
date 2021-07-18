<?php
 include 'header.php';
 include 'controllers/category.php';
 $id=$_GET["id"];
 $c=getCategory($id);
?>

<html>
    <body>
        <h5><?php echo $err_db; ?></h5>
        <fieldset>
        <p align="middle"><font color="blue" size="5">Edit Category</font></p>
        <form action="" method="post">
		<table align="center">
                <tr>
                    <td>
            Name: <input type="text" name="cat" value="<?php echo $c["name"];?>" placeholder="name">
            <span><?php echo $err_cname; ?></span>
			</td>
			
        <td>
        <input type="submit" name="edit" value="Edit">
		</td>
		<tr>
		</table>
        </form>
        </fieldset>
    </body>
</html>

<?php include 'footer.php'; ?>