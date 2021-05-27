<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>LOGIN PAGE</title>
         <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
       
    </head>
    <body>
        <h1>Hiii Welcome</h1>
            <center> 
    <form name="form" action="login_db.php" method="POST" >
        <table style="border: 1">
            <tr><h1>Login</h1></tr>
            <tr>
                <td>Login</td>
                <td><input type="text" class="input" name="user"></td>
            </tr>    
            <tr>
                <td>Login</td>
                <td><input type="text" class="input" name="pass"></td>
            </tr> 
            <tr><td rowspan="2"><input type="submit" class="btn" value="Login"></td></tr>
        </table>
<div class="wrapper">
    <div class="title">
      Log In
    </div>
    <div class="form">
       <div class="inputfield">
          <label>Phone Number </label>
          <input type="text" class="input" name="user">
       </div>  
        <div class="inputfield">
          <label>Password</label>
          <input type="password" class="input" name="pass">
       </div>  
       <div class="inputfield">
          <input type="submit" class="btn" value="Login">
       </div>        
    </div>
</div>
</form>
</center>


        <?php
        // put your code here
        ?>
    </body>
</html>
