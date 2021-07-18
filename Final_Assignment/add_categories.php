<?php
 include 'header.php';
 include 'controllers/category.php';
?>

<html>
    <body>
        <h5><?php echo $err_db; ?></h5>
        <fieldset>
        <p align="middle"><font color="blue" size="5">Add Category</font></p>
        
        <form action="" method="post">
		<table align="center">
                <tr>
                    <td>
            Name: <input type="text" name="cat" value="<?php echo $cname;?>" placeholder="name">
            <span><?php echo $err_cname; ?></span>
			</td>
        <td>
        <input type="submit" name="add" value="Add">
		</td>
		
        </form>
        </fieldset>
    </body>
</html>

<?php include 'footer.php'; ?>