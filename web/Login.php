<!DOCTYPE html>
<html>
<style>

body{
    background-image: url(".img/Login.jpg");
}

form {
    border: 3px solid #cfb87c;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #cfb87c;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    color: initial;
    
}

.imgcontainer {
    text-align: center;
}

img.avatar {
    width: 20%;
    border-radius: 0%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>



<form action="/action_page.php">
  <div class="imgcontainer">
      
    <img src=".img/CU.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b><font color="white">Username</font></b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b><font color="white">Password</font></b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <input type="checkbox" checked="checked"> <font color="white">Remember me</font>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    
    <span class="psw">Forgot <a href="ForgotPassword.html">password?</a></span>
    
    <a href="index.php" class="cancelbtn">Cancel</a>
  </div>
</form>

</body>
</html>
