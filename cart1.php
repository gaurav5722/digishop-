<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart item</title>
    <link rel="stylesheet" href= "style1.css">
</head>
<body>
    <h1 class="navbar">TOTAL PRODUCT BOUGHT<h1>
    
    <?php if(isset($_COOKIE['customer']))
    {
         $name = $_COOKIE['customer'];
        echo"<h1 style='text-align:center;justify-content:center; background-color:red'>hello :-  {$name}</h1>
    ";}
    else{ echo"<h1 style='text-align:center;justify-content:center; background-color:red'>hello :- Guest</h1>
    ";}
        ?>
        <?php
    $a=1;
   
    if(isset($_COOKIE['name']))
    {
   $price =  $_COOKIE['name'];


   $pic = $_COOKIE['name1'];
   $pic = substr($pic,1);
   
 

   
   $total = $_COOKIE['order'];
    $pic = explode (",", $pic); 
    $price = explode (",", $price); 
    if ( ! isset($price[1])) {
        $price[1] = 0;
     };
    
    foreach($pic as $val)
    {  
       $val = "'".$val."'";
       
     
       echo '<div class="container">'.
       '<img src = '.$val.'   alt="" class="img " >'.
       '<h3>Price:-'.$price[$a].'</h3>'.
       '</div>';
    
       $a++;  
    }
    }
    ?>

    <h1 style="text-align:center "> Total cart item value:- <?php
    if(isset($_COOKIE['name']))
     {echo $total;}
    else{ echo 0;
    };?> </h1>
    <button class="btn"   style="width:100% ;font:30px;text-decoration:none" > <a href= "payment.php"> Make Payment </a>
    </body>
</html>
