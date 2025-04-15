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

				
				echo "<h2> Full list of actions </h2>";
				
					$student_array = Student::find_all();	//call the find_all() function



		echo "<table border = 1 width=100%>";
			echo "<tr bgcolor=#ADD8E6>";
				echo "<th> id </th>";
				echo "<th> name </th>";
				echo "<th> email </th>";
				echo "<th> userName </th>";
				echo "<th> courseToAttend </th>";
			echo "</tr>";
  		

		foreach ($student_array as $student) {
			echo "<tr>";
				echo "<td>" . $student->id . "</td>";
				echo "<td>" . $student->name . "</td>";
				echo "<td>" . $student->email . "</td>";	
				echo "<td>" . $student->userName . "</td>";
				echo "<td>" . $student->courseToAttend . "</td>";	
				echo "<td> <a href=view.php?id=" . $student->id . "> View </td>";	
}

		echo "</table>";
		
?>

</div>
  	 
  	 
<div class="footer">
 BIS Developerment Course Work<br>
  Not real site, course work application
</div>

</body>


</html>
