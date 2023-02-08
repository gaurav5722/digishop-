
<?php session_start();?>
<?php
$con = mysqli_connect('localhost','root','','e_commerce');
if(!$con){
    die(mysqli_error($con));
}
?><?php
 
if(isset($_POST['name']))
{ 
$name = $_POST['name'];
$password = $_POST['password'];
$select_query = "select * from `sinup` where password='$password' and name='$name'";
$result1 = mysqli_query($con,$select_query);
$number = mysqli_num_rows($result1);
if($number==0)
{   
    echo"<script>alert('wrong details')          
   
      </script>";
    
}
else{ 
    $_SESSION['ok'] = $name;
   
      echo "<script>alert('Thankyou login successfully');
       
       
    window.location.href = 'new.php';
           
          </script>";
    }
    
    
    }?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login for digiShop</title>
    <link rel="stylesheet" href="style1.css">
    <style>
        *{
            margin:0px;
            padding: 0px;
            box-sizing: border-box;
        }
        form{
            display: flex;
            flex-direction: column;
            text-align: center;
            justify-content: center;
            align-items: center;
        }
        .in{
            margin:5px;
            width:75vh;
            padding: 20px;
            border:5px solid red;
            border-radius: 12px;;
            
        }
        label{
            margin:5px;
            border:2px solid red;
            padding: 10px;
            background-color: beige;
          
        }
        .demo{
            height:40px;
        }
        .btn{
            padding:18px;
            border-radius:50%;
            background-color:purple;
            color:gold;
            cursor:pointer;
        }
        </style>
</head>

<body>
    <div class="demo">

    
    <h1 style="text-align:center;border:2px solid grey;border-radius: 5px  ;background-color: greenyellow; padding:0px;position:fixed;top:0;width:100%;">Login to DiGi shop</h1>
     </div>
    <form action="login.php" method="post">
       
        <label for="name">Enter your Name:- </label>
        <input type="text" name="name" id="name"placeholder="enter your name" autocomplete="off" autofocus required class="in">
       
        
        <label for="password">
         Enter Password </label>
        <input type="password" name="password" id="password" placeholder="Enter your password" class="in">
        
        <button class="btn">SinIn</button>
    
    </form>
    
</body>
</html