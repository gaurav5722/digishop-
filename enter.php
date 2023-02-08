<?php
$con = mysqli_connect('localhost','root','','e_commerce');
if(!$con){
    die(mysqli_error($con));
}
?>
<?php
if(isset($_POST['name']))
{
$name = $_POST['name'];
$gender = $_POST['gender'];
$date = $_POST['date'];
$address = $_POST['address'];
$email = $_POST['email'];
$number1 =$_POST['number'];
$password = $_POST['password'];
$select_query = "select * from `sinup` where name ='$name'";
$result1 = mysqli_query($con,$select_query);
$number = mysqli_num_rows($result1);
if($number>0)
{
    echo"<script>alert('already exist')          
    window.location.href = 'new.php';
      </script>";
    
}
else{
$sql= "INSERT INTO `sinup` ( `name`, `gender`, `birth`, `address`, `email`,`number`,`password`) VALUES ('$name', '$gender', '$date', '$address', '$email','$number1','$password')";
$result = mysqli_query($con,$sql);

        echo"<script>alert('Thankyou');
        document.write('Welcome to digi shop');
        setTimeout(function(){
        window.location.href = 'new.php'},2000);
       
      </script>";
}


}

?>