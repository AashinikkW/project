<?php
   if(isset($_POST["delete"])){
    include('config.php');
    $isbn = $_POST['isbn'];
    $sql = "DELETE FROM basic WHERE isbn='$isbn'";
    $result = $db->query($sql);
    if($result){
        echo'<script>';
        echo"alert('SUCCESS | Book records deleted')";
        echo'</script>';
        
    }
    else{
        echo'<script>';
        echo"alert('FAILED | Unable to delete')";
        echo'</script>';
    }

}
?>