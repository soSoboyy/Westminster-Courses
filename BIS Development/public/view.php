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
	
			if(!$id) {
						echo "problem - redirect";
				}	else {
						echo $id;
				}
				

				$specific_student = Student::find_by_id($id);	//call the find_by_id() function
				
			echo " <p> Details of the selected item </p> ";
				
			echo "<table>";
			echo "<tr> <td> <b> student id </b> </td> <td>" . $specific_student->id . "</td> </tr>";
			echo "<tr> <td> <b> name </b> </td> <td>" . $specific_student->name . "</td> </tr>";
			echo "<tr> <td> <b> email </b> </td> <td>" . $specific_student->email . "</td> </tr>";
			echo "<tr> <td> <b> userName </b> </td> <td>" . $specific_student->userName . "</td> </tr>";
			echo "<tr> <td> <b> courseToAttend </b> </td> <td>" . $specific_student->courseToAttend . "</td> </tr>";
	
			echo "</table>";

?>

  	 </div>
  	 
  	 
<div class="footer">
 BIS Developerment Course Work<br>
  Not real site, course work application
</div>

</body>


</html>
