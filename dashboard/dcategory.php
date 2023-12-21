<?php 
include("../config.php");

if(isset($_GET['catid'])){
    $catid = $_GET['catid'];


}

$delete = "DELETE from `category` WHERE `catid`= '$catid' ";
$del = mysqli_query($connection, $delete);
if($del){
    echo '<script>
    alert("data delete succesfull")
    window.location.href="categories.php"
    </script>';
}
?>