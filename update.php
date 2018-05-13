

<?php

include('config.php');
if(isset($_POST["update"])){
    
    $isbn = $_POST['ISBN'];
    $title=$_POST['title'];
    $auth=$_POST['author'];
    $cat = $_POST['category'];
    $price = $_POST['price'];
    $pub = $_POST['pub'];
    $puby = $_POST['puby'];
    $img = $_POST['img'];

    echo $isbn;
    
   $sql1 = "UPDATE basic SET title='$title',cat='$cat',price='$price',pub='$pub',puby='$puby',img='$img' WHERE isbn='$isbn' ";
   
  $result1 = mysqli_query($db,$sql1);
  //$sql2="INSERT INTO basic (isbn,title,cat,price,pub,puby,img) 
  //VALUES ('$isbn','$title',' $cat','$price','$pub','$puby','$img')";
  //$result = $db->query($sql);

  $sql2 ="UPDATE isbn_a SET author='$auth' WHERE isbn='$isbn'";
    $result2 = mysqli_query($db,$sql2);

    if (!$result1 || !$result2){
        echo 'Error in query';
    
    }

    else {
        echo 'update successful';
    }
  
}
?>





