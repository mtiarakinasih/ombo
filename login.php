<?php
session_start();

if(isset($_SESSION['id'])){
  header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Login &mdash; OMBO</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="shortcut icon" href="2.png" />


    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #005555;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 520px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
.input-container {
    position: relative;
    width: 100%;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
input[type="password"] {
    padding-right: 40px; /* Space for the eye icon */
}
::placeholder{
    color: #e5e5e5;
}
.eye-icon {
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    cursor: pointer;
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}

    </style>
    <script>
      function togglePasswordVisibility() {
          const passwordInput = document.getElementById('password');
          const eyeIcon = document.getElementById('eye-icon');
          if (passwordInput.type === 'password') {
              passwordInput.type = 'text';
              eyeIcon.classList.remove('fa-eye');
              eyeIcon.classList.add('fa-eye-slash');
          } else {
              passwordInput.type = 'password';
              eyeIcon.classList.remove('fa-eye-slash');
              eyeIcon.classList.add('fa-eye');
          }
      }
    </script>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action='proseslogin.php' method='POST'>
        <h3>Login</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Username" id="username" name="username" required>

        <label for="password">Password</label>
        <div class="input-container">
            <input type="password" placeholder="Password" id="password" name="password" required>
            <i id="eye-icon" class="fas fa-eye eye-icon" onclick="togglePasswordVisibility()"></i>
        </div>

        <button type="submit" name="login">Log In</button>
        <div class="social">
            <div class="go">
                <a href="https://www.instagram.com/ombosija.id/" target="_blank">
                    <i class="fa-brands fa-instagram"></i> Instagram
                </a>
            </div>
            <div class="fb">
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=ombosija@gmail.com" target="_blank">
                    <i class="fa-regular fa-envelope"></i> Email
                </a>
            </div>
        </div>
    </form>
</body>
</html>
