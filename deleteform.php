<html>
<head>
	<title>Delete book</title>

<link rel="stylesheet" type="text/css" href="style.css">

<style type="text/css">
	
</style>
	
</head>
<body>
<?php
include("config.php");
?>
	<div id="nav">
	  <ul>
	  <li><a href="addform.php">Add Book</a></li>
	  <li><a href="viewupdate.php">Edit</a></li>
	  <li><a href="deleteform.php">Delete</a></li>
	  <li><a href="viewform.php">View</a></li>
	  </ul>	
	 </div>

<div id="site_content">
<form method="post" action="delete.php" border="1">

	<table align="center">
		<tr>
			<th colspan="2">Delete Book Details</th>
		</tr>

		<tr>
			<td>ISBN No</td>
			<td><input type="text" name="isbn"></td>
		</tr>

	</table>


<table align="center">
<tr>
<td><input type="submit" value="Delete" name="delete" id="delete"></td>
<td><Button type="reset" value="Reset">Cancel</Button></td>
</tr>
</table>
</form>
</div>
</body>
</html>