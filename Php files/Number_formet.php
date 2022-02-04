<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<center>
    <form method="post" action="Number_formet.php">
        <input type = "number" name="total" value="<?php if(isset($_POST['total'])) echo($_POST['total']) ?>"required>
        <input type = "quantity" name="quantity" value="<?php if(isset($_POST['quantity'])) echo($_POST['quantity']) ?>"required>
        <input type = "submit" name="submit" value="submit">

    </form>
    <?php 
    function calculatePrice($total,$quantity){
        return $total/$quantity;
    };
    error_reporting(E_ALL ^ E_WARNING);
     if($_POST['submit']){
         $price=calculatePrice($_POST['total'],$_POST['quantity']);
         echo("The computed price is". number_format($price,3)." ");
     }
    ?>
    </center>
</body>
</html>