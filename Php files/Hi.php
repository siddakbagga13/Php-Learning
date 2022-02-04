<center> 


<form method="post" action="myfirst-prog.php"> 

<input type = "text" name= "name"> 

<input type = "submit" name="submit" value="submit"> 

</form> 

</body> 

 
 

<?php 

# report all types of errors except warning 

error_reporting(E_ALL ^ E_WARNING); 

$name = ''; 

$name = $_POST['name']; 

if(isset($name)) { 

print("<h1> Hello $name </h1>"); 

} 

?> 

</center>