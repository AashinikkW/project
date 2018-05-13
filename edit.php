<html>
<head>
	<title>Add book</title>

<link rel="stylesheet" type="text/css" href="style.css">

<style type="text/css">
	
</style>
	
</head>
<body>
<form method="post" action="add.php" border="1">

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
        <tr>
			<td>Image</td>
			<td><input type="file" name="img" placeholder="image path"></td>
		</tr>


	</table>
	<table class="table datatable" border="1">
        <thead>
            <tr>
                <th>ISBN NUMBER</th>
                <th>Title</th>  
                <th>Author</th> 
                <th>CATAGoRY</th>
                <th>price</th>
				<th>publisher</th> 
				<th>published y</th> 
				<th>img</th>     
                <th>ACTION </th>                              
            </tr>
        </thead>
        <tbody>
        
        <?php 
        
            include("config.php");
        
            $sql= "SELECT * FROM basic ";
            $result = $db->query($sql);  
            while($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $row['isbn'] ?></td>
                <td><?php echo $row['title'] ?></td>
                <td><?php echo $row['auth'] ?></td>
                <td><?php echo $row['cat'] ?></td>
                <td><?php echo $row['price'] ?></td>
				<td><?php echo $row['pub'] ?></td>
				<td><?php echo $row['puby'] ?></td>
				<td><?php echo $row['img'] ?></td>
                <td>
                <input type="submit" name="delete" value="delete" onclick="location.href='delete.php?id=<?php echo $row['isbn'] ?>'">
                <input type="submit" name="update" value="update" onclick="location.href='update.php?id=<?php echo $row['isbn'] ?>'">
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</body>
</html>
</body>