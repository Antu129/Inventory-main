<?php include('../database/db.php');

if(isset($_POST{'submit'})){
    // $prodname = $_POST['productname'];
    $proddesc = $_POST['productdesc'];
    // $qty = $_POST['productqty'];
    $unit= $_POST['productunit'];
    $unitprice = $_POST['unitprice'];
    $expiry = $_POST['expiry'];

    $sql = "INSERT INTO `products` (ProdDescription, ProdUnit, ProdUnitPrice, ProdExpiry) 
    VALUES ('$proddesc', '$unit', '$unitprice', '$expiry')";
    $result = mysqli_query($conn,$sql); 

    if($result){
        header('Location: ../php/viewProductPage.php');
    }
    else{
        die("Connection failed: " . $conn->connect_error);
    }
}
?> 
