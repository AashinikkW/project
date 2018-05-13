<?php
if(isset($_POST["submit"])){
    include('config.php');
    $isbn = $_POST['isbn'];
    $title=$_POST['title'];
    $auth=$_POST['auth'];
    $cat = $_POST['cat'];
    $price = $_POST['price'];
    $pub = $_POST['pub'];
    $puby = $_POST['puby'];
     
    $img=$_FILES['file']['name'];
    $filepath = "images/".$img;
    
    
    
    
    
   
    //query
    $sql="INSERT INTO basic (isbn,title,cat,price,pub,puby,img) VALUES ('$isbn','$title',' $cat','$price','$pub','$puby','$filepath')";
    $result = $db->query($sql);

    $sql2 ="INSERT INTO isbn_a(isbn,author) values('$isbn','$auth')";
    $result = $db->query($sql2);

    if($result){
        echo'<script>';
        echo"alert('SUCCESS | User Information Added')";
        echo'</script>';
        header("location:addform.php");
    }
    else{
        echo'<script>';
        echo"alert('FAILED | User Information Not Added')";
        echo'</script>';
    }
}



?>