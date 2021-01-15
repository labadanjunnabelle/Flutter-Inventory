<?php

require "connect.php";

if($_SERVER['REQUEST_METHOD']=="POST"){
    $data = json_decode(file_get_contents('php://input'), true);
    $response = array();
    $product_name = $data['product_name'];
    $product_price = $data['product_price'];
    $product_quantity = $data['product_quantity'];
    $clientid = $data['clientid'];


    $insert ="INSERT INTO tbl_record VALUE(NULL,'$product_name','$product_price','$product_quantity','$clientid')";
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