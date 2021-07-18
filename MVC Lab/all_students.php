<?php require_once 'header.php';
      require_once 'controllers/StudentCtrl.php';
      $students=getStudents();
?>

<html>
    <body>
        <fieldset>
            <p align="middle"><font color="blue" size="5">All Students</font></p>
            <p align="middle">
			<table>
               <th>Id</th>
			   <th>Name</th>
			   <th>DOB</th>
			   <th>Credit</th>
			   <th>CGPA</th>
			   <th>Dept_Id</th>
				
                
                   
                <?php 
                $i=1;
                foreach($students as $s){
                    echo "<tr>";
                        echo "<td>$i</td>";
                        echo "<td>".$s["name"]."</td>";
						echo "<td>".$s["dob"]."</td>";
						echo "<td>".$s["credit"]."</td>";
						echo "<td>".$s["cgpa"]."</td>";
						echo "<td>".$s["dept_id"]."</td>";
						echo '<td><a href="edit_student.php?id='.$s["id"].'">Edit</a></td>';
                    echo "</tr>";
                    $i++;
                }
                ?>
                

            </table>
			</p>
        </fieldset>
    </body>
</html>

<?php require_once 'footer.php'; ?>