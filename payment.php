
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAYMENT PAGE</title>
    <link rel="stylesheet" href="style1.css">
            
        
</head>
<body>

  <?php
    echo "<h1  class='container navbar'>RESPECTED  ". $_COOKIE['customer']." your amount is = ". $_COOKIE['order'] ."<h1>" ;
   
    ?>
  <form action="action1.php" method="post">
   <div style="text-align:center ;color:black ;background-color:yellow; opacity:0.9" class="btn"><fieldset style="width:100%;margin:12px; ">
        <legend style="
        border:2px solid red;
        padding: 10px;
        background-color: beige;">ENTER PAYMENT METHOD:-</legend>
        <div>
        <input type="radio" id="payment" name="payment1"  value="upi" >UPI <br>
        <input type="radio" id="payment" name="payment1"  value="CASH ON DELIVERY">CASH ON DELIVERY<br>  
        <input type="radio" id="payment" name="payment1"  value="NET BANKING" >NET BANKING <br>  
        <input type="radio" id="payment" name="payment1"  value="DEBIT CARD">DEBIT CARD   
         
        
         </fieldset> 
        
         <button  class="btn" name="selection">PAY</button>
         </div>
    </div>
     
         
  </form>
  


</body>
</html>