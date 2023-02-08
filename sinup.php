<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinup for digiShop</title>
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

    
    <h1 style="text-align:center;border:2px solid grey;border-radius: 5px  ;background-color: greenyellow; padding:0px;position:fixed;top:0;width:100%;">Welcome to DiGi shop</h1>
     </div>
    <form action="enter.php" method="post">
       
        <label for="name">Enter your Name:- </label>
        <input type="text" name="name" id="name"placeholder="enter your name" autocomplete="off" autofocus required class="in">
       
        
        <fieldset style="width:50vh;margin:12px; ">
        <legend style="
        border:2px solid red;
        padding: 10px;
        background-color: beige;">Enter Gender:-</legend>
        <input type="radio" name="gender" id="gender" value="male" >Male
        <input type="radio" name="gender" id="gender" value="female">Female
        
         </fieldset>
        <label for="dte" > Enter your Birth </label>
        <input type="date" name="date" id="dte" placeholder="Enter your birthday" class="in"required>
        <label for="address">
            Enter your address:-</label>
            <textarea name="address" id="address" cols="30" rows="10" placeholder="enter your address"class="in"></textarea>
        <label for="email">
         Email </label>
        <input type="email" name="email" id="email" placeholder="Enter your Email" class="in">
        <label for="number">
         Phone/Mobile Number </label>
        <input type="number" name="number" id="number" placeholder="Enter your number" class="in">
        <label for="password">
         Create Password </label>
        <input type="password" name="password" id="password" placeholder="Enter your password" class="in">
        
        <button class="btn">SinUp</button>
    
    </form>
    
</body>
</html>