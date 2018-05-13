<html>
<head>
	<title>View book</title>

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
<form method="post"  border="1" action="view.php"  >

	<table align="center">
		<tr>
			<th colspan="2">View Book Details</th>
		</tr>

		<tr>
			<td>ISBN No</td>
			<td><input type="text" name="isbn" id="isbn" >
            <button type="submit" value="Submit" id="text" name"text">View</button></td>

        </tr>
    </table>
    </form>
    </div>

</body>

</html>