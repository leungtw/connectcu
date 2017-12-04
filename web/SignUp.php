<!DOCTYPE html>
<html>

<?php
    require_once('php/functions.php');
    $conn = sqlConnect();
?>

<style>

form {
    border: 4px solid #cfb87c;
}
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 3px solid #cfb87c;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #cfb87c;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {
    float: left;
    width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

.imgcontainer {
    text-align: center;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<body>

 <div class="imgcontainer">
<img src="img/CU.png" alt="CU Boulder" class="avatar">
<h2>Create your account</h2>
</div>

<form action="php/signupHandler.php" style="border:1px solid #ccc" method = "post">
  <div class="container">
    <label><b>Email</b></label>
    <input name="email" type="text" placeholder="Enter Email" type = "email" title = "Enter a @colorado.edu email" required>

    <label><b>Username</b></label>
    <input name="username" type="text" placeholder="Enter Username" required>
<!--
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
-->
    <input type="checkbox" checked="checked"> Remember Me
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <div class="clearfix">
    <button type="submit" class="signupbtn">Sign Up</button>
</form>
    <a href="index.php">
    <input type="button" class="cancelbtn" value="Cancel" />
    </a>
    </div>
  </div>

</body>
</html>

