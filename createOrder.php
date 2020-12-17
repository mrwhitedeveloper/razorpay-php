<?php 
require_once('razorpay/Razorpay.php'); 
use Razorpay\Api\Api;
$api = new Api("rzp_key_goes_here", "rzp_secret_goes_here");
$amount=$_POST['price'];


  $order_id=1;//this can be generated using database, your select query here


 $order = $api->order->create(array(
                'receipt' => $order_id,
                'amount' => $amount*100,
                'currency' => 'INR',
                'payment_capture' => 1 
                )
            );
 //  you will get order id from razorpay $order object - $order['id']        
 $response['orderID']= $order['id'];
 $response["code"] = 1;
echo json_encode($response);
?>
