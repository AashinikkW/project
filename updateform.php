<?php

$isbn=$_POST['ISBN'];
require 'config.php';

$sql1 = "SELECT * FROM basic where isbn='$isbn'";
$query1= mysqli_query($db,$sql1);

$result1= mysqli_fetch_assoc($query1);


$sql2 = "SELECT * FROM isbn_a where isbn='$isbn'";
$query2= mysqli_query($db,$sql2);

$result2= mysqli_fetch_assoc($query2);

?>



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
<form  action="update.php" method="post" border="1">

	<table align="center">
		<tr>
			<th colspan="2">Edit Book Details</th>
		</tr>

		<tr>
			<td>ISBN No</td>
			<td><input type="text" name="ISBN" value=<?php echo $result1['isbn']?>></td>


 


		</tr>
		
		<tr>
			<td>Title</td>
			<td><input type="text" name="title" value=<?php echo $result1['title']?>></td>
		</tr>

		<tr>
			<td>Auther</td>
			<td><input type="text" name="author" value=<?php echo $result2['author']?>></td>
		</tr>

		<tr>

            <?php 
            echo $result1['cat'];

            if ($result1['cat'] == ' Sinhala'){
                echo'
                <td>Book Category</td>
                <td><select name="category">
                <option "selected" >Sinhala</option>
                <option>English</option>
                </select>';
            }

            else if ($result1['cat']== ' English'){
			echo
				'<td>Book Category</td>
                <td><select name="category">
                <option >Sinhala</option>
                <option  "selected" >English</option>
                </select>';
            }


            ?>

			
			</td>
		</tr>
		<tr>
			<td>Price</td>
			<td><input type="text" name="price" value=<?php echo $result1['price']?>></td>
		</tr>
		<tr>
			<td>Publisher</td>
			<td><input type="text" name="pub" value=<?php echo $result1['pub']?>></td>
		</tr>

		<tr>
			<td>Published Year</td>
			<td><input type="text" name="puby" value=<?php echo $result1['puby']?>></td>
		</tr>
        <tr>
			<td>Image</td>
			<td><input type="file" name="img" placeholder="image path" value=<?php echo $result1['img']?>></td>
		</tr>

	</table>

<table align="center">
	<tr>
		<td><input name = "update" type = "submit" 
                              id = "update" value = "Update">
        </td>
		<td><button type="reset" value="Reset">Cancel</button></td>
	</tr>
</table>



	
</form>
</body>
</html>