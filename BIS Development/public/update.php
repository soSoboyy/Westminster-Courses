<?php
				require_once '../private/initialize.php';	//initialize the web site
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel=stylesheet type=text/css href=style.css>
</head>

<body>
<div class="header">
	Welcome to Web Academy! <br>
	Web Design Principles - HTML - Introduction to Databases - Cyber Security
</div>

<div class="row">
  	<div class="column side">
   			<?php include 'navigation_all.html';?> 
	</div>
<div class="column middle">
		
<?php 
	$id = $_GET['id'];
	echo "my id is: " . $id. "<br>";
	$specific_student = Student::find_by_id($id);	//call the find_by_id() function; we identify the record to be updated; get all its values
				
	if($_SERVER['REQUEST_METHOD'] === 'POST') {
		//if there is a post action create the array $args and use the function merge_attributes($args)
				$args=[];									//in $args array we collect all the new values 
  				$args['name']=$_POST['name'];
  		 		$args['email']=$_POST['email'];
  				$args['userName']=$_POST['userName'];
  				$args['courseToAttend']=$_POST['courseToAttend'];
  


			$specific_student->merge_attributes($args);
			$results = $specific_student->update();
			
				if($results) {
					echo "Successful updating";
					}
			
				echo " <p> Details of the updated item </p> ";
				
				echo "<table>";
				echo "<tr> <td><b> student id </b> </td> <td>" . $specific_student->id . "</td> </tr>";
				echo "<tr> <td> <b> name </b> </td> <td>" . $specific_student->name . "</td> </tr>";
				echo "<tr> <td> <b> email </b> </td> <td>" . $specific_student->email . "</td> </tr>";
				echo "<tr> <td> <b> userName </b> </td> <td>" . $specific_student->userName . "</td> </tr>";
				echo "<tr> <td> <b> courseToAttend </b> </td> <td>" . $specific_student->courseToAttend . "</td> </tr>";
			
				echo "</table>";

			
			} else {	
		//if there is no post action present the values of the record in a form to be updated

				echo " <p> Use the following form to update the selected item <br> ";
				echo "ATTENTION: all *** fields must be numbers </p>";
			
				
		 		echo  "<form action=update.php?id=" . $id . " method='post'>";
					echo "<table>";
						echo "<tr> <td> name </td> <td> <input type='text' name ='name' value='$specific_student->name' > </td> </tr>";
						echo "<tr> <td> email </td> <td> <input type='text' name ='email' value='$specific_student->email' > </td> </tr>";
						echo "<tr> <td> userName *** </td> <td> <input type='text' name ='userName' value='$specific_student->userName' > </td> </tr>";
						echo "<tr> <td> courseToAttend </td> <td> <input type='text' name ='courseToAttend' value='$specific_student->courseToAttend' > </td> </tr>";
    					
					echo "</table>";    
    					echo " <input type='submit' value='Update Record' />";
				echo "</form>";
		

		}

?>

  	 </div>
  	 
  	 
<div class="footer">
  BIS Developerment Course Work<br>
  Not real site, course work application
</div>

</body>


</html>
