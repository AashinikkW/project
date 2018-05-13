<html>
<head>
	<title>Add book</title>

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
<form method="post" action="add.php"  enctype="multipart/form-data" border="1">

	<table align="center">
		<tr>
			<th colspan="2">Add Book</th>
		</tr>


		<tr>
			<td>ISBN No</td>
			<td><input type="text" name="isbn" placeholder="isbn Number"></td>
		</tr>
		
		<tr>
			<td>Title</td>
			<td><input type="text" name="title" placeholder="title"></td>
		</tr>

		<tr>
			<td>Auther</td>
			<td><input type="text" name="auth" placeholder="Auther"></td>
		</tr>

		<tr>
			<td>Book Category</td>
			<td><select name="cat">
				<option selected=""></option>
				<option>Sinhala</option>
				<option>English</option>

			</select>
			</td>
		</tr>
		<tr>
			<td>Price</td>
			<td><input type="text" name="price" placeholder="price"></td>
		</tr>
		<tr>
			<td>Publisher</td>
			<td><input type="text" name="pub" placeholder="publisher"></td>
		</tr>

		<tr>
			<td>Published Year</td>
			<td><input type="text" name="puby" placeholder="publisher_year"></td>
		</tr>
        <!-- <tr>
			<td>Image</td>
			<td><input type="file" name="img" placeholder="image path"></td>
		</tr> -->
		<tr>
		 <td>Image</td>
			<td><input  type="file" name="file" value="Upload Image" >	</td>
   			 
       </tr>

	</table>
    <table align="center">
	<tr>
		<td><button type="submit" name="submit" value="Submit">Add</button></td>
		<td><button type="reset" value="Reset">Cancel</button></td>
	</tr>
</table>
    <form>
</div>
<!--rest goes here onwards-->
</html>