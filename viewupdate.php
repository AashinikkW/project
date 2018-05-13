<html>
<head>
	<title>Add book</title>

<link rel="stylesheet" type="text/css" href="style.css">

<style type="text/css">
	
</style>
	
</head>
<body>
	<div id="nav">
	  <ul>
	  <li><a href="addform.php">Add Book</a></li>
	  <li><a href="viewupdate.php">Edit</a></li>
	  <li><a href="deleteform.php">Delete</a></li>
	  <li><a href="viewform.php">View</a></li>
	  </ul>	
	 </div>

<div id="site_content">
<form method="post"  border="1" action="updateform.php"  >

	<table align="center">
		<tr>
			<th colspan="2">Edit Book Details</th>
		</tr>

		<tr>
			<td>ISBN No</td>
			<td><input type="text" name="ISBN" id="ISBN" >
            <button type="submit" value="Submit" id="text" name"text">View</button></td>

        </tr>
    </table>
    </form>
    </div>
    </body>
    </html>