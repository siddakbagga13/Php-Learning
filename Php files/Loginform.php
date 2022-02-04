<html lang="en" dir="ltr">
  <head>
    <style>
body{
  margin: 0;
  padding: 0;
  font-family:'Coiny',cursive;
  background: #34495e;
}
.container{
  width:300px;
  padding: 40px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background: #191919;
  text-align: center;
  border-radius: 5px;
  box-shadow: 0 50px 50px;
}
.container h1{
  color: white;
  font-weight: 500;

}
.container input[type="text"],.container input[type="password"]{
  border: 0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #3498db;
  padding: 14px 10px;
  width: 200px;
  outline: none;
  color: white;
  font-size: 16px;
  border-radius: 24px;
  transition: 0.25s;
}
.container input[type="text"]:focus,.container input[type="password"]:focus{
  width: 280px;
  border-color: #2ecc71;
}
.container input[type="submit"]{
  border: 0;
  background: none;
  display: inline-flex;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #2ecc71;
  padding: 14px 25px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  font-size: 17px;
  font-family: 'Libre Baskerville', serif;
  text-decoration: none;
}
.container input[type="submit"]:hover{
  background: #2ecc71;
}
.container input[type="button"]{
  border: 0;
  background: none;
  display: flexbox;
  margin: 10px auto;
  text-align: center;
  outline: none;
  padding: 1px;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  font-size: 14px;
  font-family: 'Libre Baskerville', serif;
}
.container input[type="button"]:hover{
  transform: scale(1.2);
  color: #ce5310;
}
.h3{
  padding-left: 2px;
}
a:link { text-decoration: none; }
    </style>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="Login Form.css">
    <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
  </head>
  <body>
  <?php


  function login(string $username = null, string $password = null)
  {
     return true;
  }

    error_reporting(E_ALL ^ E_WARNING);
     $username = $_POST['username'];
     $password = $_POST['password'];
    if(isset($username) && isset($password)) {
      if(login($username,$password))
      {    
          print("<center>". "Logged in successfully" . "</center>");
      } else {
          print("<center>"."Invalid username or password"."</center>");
    ?>        
          <form class="container" action="Loginform.php" method="POST">
          <h1>LOGIN</h1>
          <input type="text" name="username" placeholder="Username" required>
          <input type="password" name="password" placeholder="Password" required>
          <input type="submit" value="Login">
          <input href="register.php"type="button" value="Register">
        </form>
  <?php        
      }
    } else 
    { ?>
          <form class="container"  name="log_form" action="Loginform.php"  onsubmit="return validate()" method="POST">
          <h1>LOGIN</h1>
          <input type="text" name="username" placeholder="Username" >
          <input type="password" name="password" placeholder="Password" >
          <input type="submit" value="Login">
          <h4> Don't have an account?
          <a href="register.php">
          <input type="button" value="Register Now"></h4></a>
        </form>


  <?php 
    }
  ?>
 <script>
       function validate() {
        var username = document.log_form.username;  
        var password = document.log_form.password; 
        if (username.value.length <= 0) {    
                alert("Name is required");    
                username.focus();    
                return false;    
            }    
            if (password.value.length <= 0) {    
                alert("Password is must");    
                password.focus();    
                return false;    
            }
            alert("Welcome Back!")
            return true;    
        }
    </script>
  </body>
</html>