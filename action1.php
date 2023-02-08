<?php
$con = mysqli_connect('localhost','root','','e_commerce');
if(!$con)
{
    die(mysqli_error($con));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>successful payment</title>

</head>
<body>

<?php 
$cus=$_COOKIE['customer'];
$ord=$_COOKIE['order'];
$payment=$_POST['payment1'];
$cus=$_COOKIE['customer'];
        $sql = "SELECT * FROM `sinup` WHERE name = '$cus'";
        $result = mysqli_query($con,$sql);
        while($row = mysqli_fetch_assoc($result) )
        {
          $cus = $row['s.no'];
        }
  if($payment =="CASH ON DELIVERY")
  { $order_id="ORDS".rand(10000,99999999);
    $date=date("d-m-Y");
    $sql="INSERT INTO `checking`(`CUSTID`,`ORDER_ID`,`TXNAMOUNT`,`PAYMENT_MODE`,`CURRENCY`,`TXNDATE`)VALUES('$cus','$order_id','$ord.00','COD','INR','$date')";
    $result = mysqli_query($con,$sql);
    //echo"<script>setTimeout(function(){alert('your order id is'".$order_id."},5000)</script>";
    echo"<script>alert('your order id is '+' $order_id ' +'  please keep it for further reference')</script>";
    echo"<script>alert('Thankyou for placing order');
        document.write(' THANKYOU ...!');
        setTimeout(function(){
        window.location.href = 'new.php'},2000);
</script>";
      }
      else{
        

        
        
      
      
        echo' <form action="pgRedirect.php" method="post">
           <input type="hidden" name ="CUST_ID" value ='.$cus.'>
           <input type = "hidden" name = "ORDER_ID" value = '. "ORDS" . rand(10000,99999999).'>
           <input type = "hidden" name = "TXN_AMOUNT" value ='.$ord.'> 
           <label for="name">Enter the locality:- </label>
           <input type = "text" name = "locality">
         </form>';
         
         
        }
        mysqli_close($con) ?> 
      
       
     
</body>
</html>