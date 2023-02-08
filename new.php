<?php session_start();?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digi_shop</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
     
    <?php if(isset($_SESSION['ok']))
    {
         $name = $_SESSION['ok'];
        
         setcookie("customer",$name);
        echo"<h1 style='text-align:center;justify-content:center; background-color:red'>hello :-  $name </h1>
    ";}
    else{ echo"<h1 style='text-align:center;justify-content:center; background-color:red'>hello :- Guest</h1>
    ";}
        ?>
     
    <div class="navbar">
        <img src="logo.jpeg" alt="logo" id="logo">
        <ul>
        <li class="inspect" ><a href ="new.php" style="text-decoration:none;color:black">Home</a></li>
        <li class="inspect" ><a href="about.html" style="text-decoration:none;color:black">About</a></li>
        <li class="inspect" ><a href="contact.html" style="text-decoration:none;color:black">Contact US</a></li>
        </ul>
    <div style="margin-top:5px">
        <input type="search" name="search" id="" class="ser" placeholder="enter to search " style= "visibility:hidden">
        <input type="button" value="search" class="click ser" style= "visibility:hidden"> 
    </div>
    <div><a href="login.php" class="a">Login</a></div>
    <div ><a href ="new.php" class="a" >Logout</a><?php session_destroy();if (isset($_SERVER['HTTP_COOKIE'])) {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, '', time()-1000);
        setcookie($name, '', time()-1000, '/');
    }
};?></div>
    
    <div><a href ="sinup.php" class="a" action="post" >signup</a></div>
    <div style="position:relative;">
    <a href="cart1.php"><img src="cart.webp" alt="cart" id="logo"><sup id="ok" style="font-size:50px;font-weight:bolder;">0</sup></a>
    <p style="position:absolute;bottom:0px ;font-size:15px ;color:red; margin: 0px">view cart</p>
    </div>
    </div>
    </div>
    <div class="row" > 
        <div class="container"><img src="apple.jpeg" alt=""class="img">
        <h3>Price:-100</h3>
        <p> apple</p>
        <button class="btn" name="apple" onclick="myfun(1,100,'apple.jpeg')">Add to cart</button>
         </div>
    <div class="container">
        <img src="banana.jpeg" alt="" srcset="" class="img">
        <h3>Price:-60 </h3>
        <p> banana</p>
        <button class="btn" name="banana" onclick="myfun(1,60,'banana.jpeg')">Add to cart</button>
    </div>
    <div class="container"><img src="grapes.jpeg" alt="" class="img">
        <h3>Price:-120</h3>
        <p>Grapes</p>
        <button class="btn" name="grapes"  onclick="myfun(1,120,'grapes.jpeg')">Add to cart</button>
    </div>
    <div class="container"><img src="mango.jpeg" alt=""class="img">
        <h3>Price:-150</h3>
        <p> mango</p>
        <button class="btn" name="mango"  onclick="myfun(1,150,'mango.jpeg')">Add to cart</button>
    </div>
    </div>
    <div class="row" > 
        <div class="container"><img src="guava.jpeg" alt=""class="img">
        <h3>Price:-90</h3>
        <p>guava</p>
        <button class="btn" name="guava"  onclick="myfun(1,90,'guava.jpeg')">Add to cart</button>
         </div>
    <div class="container">
        <img src="orange.jpeg" value="" alt="" srcset="" class="img">
        <h3>Price:-75</h3>
        <p> Orange</p>
        <button class="btn" name="orange"  onclick="myfun(1,75,'orange.jpeg')">Add to cart</button>
    </div>
    <div class="container"><img src="Watermelon.jpeg" alt="" class="img">
        <h3>Price:-78</h3>
        <p>Watermelon</p>
        <button class="btn" name="watermelon"  onclick="myfun(1,78,'watermelon.jpeg')">Add to cart</button>
    </div>
    <div class="container"><img src="Papaya.jpeg" alt=""class="img">
        <h3>Price:-89</h3>
        <p> papaya</p>
        <button class="btn" name="papaya" onclick="myfun(1,89,'papaya.jpeg')">Add to cart</button>
    </div>
    </div>
    <div class="row" > 
        <div class="container"><img src="stawberry.jpeg" alt=""class="img">
        <h3>Price:-145</h3>
        <p>stawberry</p>
        <button class="btn" name="stawberry" onclick="myfun(1,145,'stawberry.jpeg')">Add to cart</button>
         </div>
    <div class="container">
        <img src="Almonds.jpeg" alt="" srcset="" class="img">
        <h3>Price:-340</h3>
        <p> Almonds/Badam</p>
        <button class="btn" name="almonds"  onclick="myfun(1,340,'Almonds.jpeg')">Add to cart</button>
        
    </div>
    <div class="container"><img src="cashew.jpeg" alt="" class="img">
        <h3>Price:-295</h3>
        <p>Cashew/Kaju</p>
        <button class="btn" name="cashew"  onclick="myfun(1,295,'cashew.jpeg')">Add to cart</button>
    </div>
    <div class="container"><img src="raisin.jpeg" alt=""class="img">
        <h3>Price:-300</h3>
        <p> Raisin/kismis</p>
        <button class="btn" name="raisin" onclick="myfun(1,300,'raisin.jpeg')">Add to cart</button>
    </div>
    </div>
    
        <?php 
        if(isset($_SESSION['ok']))
        {echo'<script>
        flag2=0;
        flag1=0;
        var a = [];
        var pic = [];
       
        myfun(flag1,flag2);
        function myfun(flag,val,item){
          pic.push(item);
          a.push(val);
          flag1 = flag1+flag;
          flag2 = flag2+val;
          if(flag1!= 0 && flag2!= 0)
          {
          alert("one item added to your cart with value= "+ val+"  so total value = "+flag2);
          } document.cookie = "name" + "=" + a  ;
           document.cookie = "name1 "+ "=" + pic  ;
           
        
          document.cookie = "order" + "="+ flag2;
          document.getElementById("ok").innerHTML = flag1;
        }</script>';
        
        echo "<script>console.log(pic);</script>";
        
       
    
       
    }
    else{
        echo"<script>alert('please login to continue')</script>";
    }?>
    <script>
       
        </script>

    
</body>
</html>


