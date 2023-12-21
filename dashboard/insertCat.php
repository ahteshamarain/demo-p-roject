<?php 
include('../config.php');

// print_r($_POST);

$cat_name = $_POST['cat_name'];
$cat_des = $_POST['cat_des'];
$cat_status = $_POST['cat_status'];

if(!empty($cat_name) AND !empty($cat_des) AND !empty($cat_status)){
    $result = mysqli_query($connection, "INSERT INTO `category` (`catid`, `catname`, `cat_des`, `cat_date`, `catstatus`) VALUES (NULL, '$cat_name', '$cat_des', current_timestamp(), '$cat_status')");
    if($result){
        echo "category successfully Added";
    }else{
        
        echo "Failed to add the category";
    }
}

?>