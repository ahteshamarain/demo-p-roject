
<?php 


if(isset($_POST["addproduct"])){
    $pname=$_POST["name"];
    $pprice=$_POST["price"];
    $pcategory = $_POST["category"];
    $status = $_POST['status'];
    $pimage=$_FILES["image"]["name"];
    $tmp_name= $_FILES["image"]["tmp_name"];

    if(!empty($pname) AND !empty($pdec) AND !empty($pprice) AND !empty($pimage)){
        $insert = "INSERT into `products` (`pid`,`pname`,`pprice`,`pimage`,`pcategory`,`pdate`) VALUES (NULL,'$pname','$pprice'
        ,'$pimage','$pcategory',current_timestamp())";
  move_uploaded_file($tmp_name ,'upload/' .$pimage);
  $result = mysqli_query($connection,$insert);
  if($result){
    echo "product successfully Added";


  }
  else{
    echo "error";
  }
    



}
}
?>