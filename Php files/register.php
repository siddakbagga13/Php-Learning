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
  padding: 50px;
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
  border: 2px solid #ce5310;
  padding: 14px 25px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  font-size: 17px;
  font-family: 'Libre Baskerville', serif;
}
.container input[type="submit"]:hover{
  background: #ce5310;
}
.container input[type="button"]{
  border: 0;
  background: none;
  display: flexbox;
  margin: 10px auto;
  text-align: center;
  outline: none;
  color: white;
  padding: 1px;
  transition: 0.25s;
  font-size: 17px;
  font-family: 'Libre Baskerville', serif;
  text-decoration: none;
}
.container input[type="button"]:hover {
  transform: scale(1.2);
  color: #2ecc71;
}
a:link { text-decoration: none; }
    </style>
    <meta charset="utf-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="Login Form.css">
    <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
  </head>
  <body>
  <?php


  function register(string $username = null, string $password = null)
  {
     return true;
  }

    error_reporting(E_ALL ^ E_WARNING);
     $username = $_POST['username'];
     $lastname = $_POST['lastname'];
     $useremail = $_POST['useremail'];
     $password = $_POST['password'];
    if(isset($username) && isset($password)) {
      if(register($username,$password))
      {    
          print("<center>". "Registered successfully" . "</center>");
      } else {
          print("<center>"."Invalid Information"."</center>");
    ?>        
          <form class="container"name="reg_form" action="register.php" method="POST">
          <h1>Register</h1>
          <input type="text" name="username" placeholder="Username" >
          <input type="text" name="lastname" placeholder="Last name">
          <input type="text" name="useremail" placeholder="Email" >
          <input type="password" name="password" placeholder="Password" >
          <input type="submit" value="Register">
        </form>
        
  <?php        
      }
    } else 
    { ?>
          <form class="container" name="reg_form" action="register.php" onsubmit="return validate()" method="POST">
          <h1>Register</h1>
          <input type="text" name="username" placeholder="First name">
          <input type="text" name="lastname" placeholder="Last name">
          <input type="text" name="useremail" placeholder="Email">
          <input type="password" name="password" placeholder="Password"  >
          <input type="submit" value="Register">
          <h3>Back to
          <a href="Loginform.php">
          <input type="button" value="Login"></h3></a>
        </form>
        </form>
       
        <script>    
        function validate() {    
            var username = document.reg_form.username;  
            var lastname = document.reg_form.lastname;           
            var useremail = document.reg_form.useremail;    
            var password = document.reg_form.password;        
    
            if (username.value.length <= 0) {    
                alert("Name is required");    
                username.focus();    
                return false;    
            }    
            if (lastname.value.length <= 0) {    
                alert("Last Name is required");    
                lastname.focus();    
                return false;    
            }    
            if (useremail.value.length <= 0) {    
                alert("Email Id is required");    
                useremail.focus();    
                return false;    
            }    
            if (password.value.length <= 0) {    
                alert("Password is must");    
                password.focus();    
                return false;    
            }
            alert("Registered Successfully!")
            return true;    
        }
    
    </script>   
  <?php 
    }
  ?>
  </body>
</html>