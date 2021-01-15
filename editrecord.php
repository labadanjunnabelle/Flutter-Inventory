<?php

require "connect.php";

if($_SERVER['REQUEST_METHOD']=="POST"){
   
    $response = array();
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_quantity = $_POST['product_quantity'];
    $clientid = $_POST['clientid'];


    $insert = "UPDATE tbl_record SET product_name ='$product_name', product_price = '$product_price',product_quantity = '$product_quantity' WHERE id='$clientid'";
    if (mysqli_query($con,$insert))
    {
        $response['value'] = 1;
        $response['message'] = "Record Successfully";
        echo json_encode($response);
    }
    else
    {
        $response['value'] = 0;
        $response['message'] = "Record Failed";
        echo json_encode($response);
    }
     
    
    

  
   
 
}

?>