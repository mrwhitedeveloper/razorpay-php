<?php

        $payment_id=$_REQUEST['payment_id'];
        $order_id=$_REQUEST['order_id'];
        
        //update payment_id into database with order_id 
        //eg. update payments set paymentID=$payment_id where orderID=$order_id;
        
        
        //if all goes goes right then retun code as 1 for successful validation or you can return code with some another values
        $response["code"] = 1;
        echo json_encode($response);
?>        
