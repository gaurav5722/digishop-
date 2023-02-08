<?php
$con = mysqli_connect('localhost','root','','e_commerce');
if(!$con){
    die(mysqli_error($con));
}
?>
<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Digi shop customer deatails </title>
	<link rel="stylesheet" href ="style1.css">
</head>
<body>
<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
	//echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<b class='navbar'>Transaction status is success</b>" . "<br/>";
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	}
	else {
		echo "<h1 class='navbar'>Transaction status is failure</h1>" . "<br/>";
		echo "<div  class='row'><a href= 'new.php'  ><button class='btn '>move to home page</button></a></div>";
	}
        echo"<br>";
	if (isset($_POST) && count($_POST)>0 && $_POST["STATUS"] == "TXN_SUCCESS")
	{  echo"<h2 class='navbar'>Please keep the order id for future reference</h2>";
		if(isset($_SESSION['cust']))
		{$cus=$_SESSION['cust'];
			
$ORDERID = $_POST['ORDERID'];
$MID =$_POST['MID'];
$TXNID = $_POST['TXNID'];
$TXNAMOUNT = $_POST['TXNAMOUNT'];
$PAYMENTMODE = $_POST['PAYMENTMODE'];
$CURRENCY = $_POST['CURRENCY'];
$TXNDATE = $_POST['TXNDATE'];
$STATUS = $_POST['STATUS'];
$RESPCODE = $_POST['RESPCODE'];
$RESPMSG = $_POST['RESPMSG'];
$GATEWAYNAME = $_POST['GATEWAYNAME'];
$BANKTXNID = $_POST['BANKTXNID'];
$BANKNAME =$_POST['BANKNAME'];
$CHECKSUMHASH = $_POST['CHECKSUMHASH'];
			
			$sql= "INSERT INTO `checking` ( `CUSTID`, `ORDER_ID`, `MID`, `TXNAMOUNT`, `PAYMENT_MODE`,`CURRENCY`,`TXNDATE`,`STATUS`,`RESPCODE`,`RESPMSG`,`GATEWAYNAME`,`BANKTXNID`,`BANKNAME`,`CHECKSUMHASH`,`TXNID`) VALUES ('$cus', '$ORDERID','$MID','$TXNAMOUNT','$PAYMENTMODE','$CURRENCY','$TXNDATE','$STATUS','$RESPCODE','$RESPMSG','$GATEWAYNAME','$BANKTXNID','$BANKNAME','$CHECKSUMHASH','$TXNID')";
			$result = mysqli_query($con,$sql);
			if(!$result)
			{
				mysqli_error($con);
			}
			//echo"customer-id:-".$_SESSION['cust']."<br>";}
      echo "<div class='container'>Order_id:-".$_POST['ORDERID']."<br>
	  Transaction status:-".$_POST['STATUS']."<br>
	   
	  Transction amount:- ".$_POST['TXNAMOUNT']."<br>
	   <br>
	   <a href= 'new.php'><button class='btn'}'>move to home page</button></a></div>";

		//foreach($_POST as $paramName => $paramValue) {
		//	echo "<br/>" . $paramName . " = " . $paramValue;
		//}
		

      
}

}
else {
	//echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}
}
?>
</body>
</html>
