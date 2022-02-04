<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11 String Methods</title>
    <style type="text/css">
        pre{
            color: orange;
            font-size: 17px;
            font-weight: bold;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
        }
        </style>
</head>
<body>
<center>
    <table border="2">
   
    <?php 
       $text= "Hello! I am learning PHP";
       echo('<tr>');
       echo ('<th colspan="2"><b>'.$text.'</b></th>');
       echo('</tr>');
       
       echo('<tr>');
       echo ('<td><pre>strtolower()</pre></td>');
       echo ('<td>'.strtolower($text).'</td>');
       echo('</tr>');

       echo('<tr>');
       echo ('<td><pre>strtoupper()</pre></td>');
       echo ('<td>'.strtoupper($text).'</td>');
       echo('</tr>');

       echo('<tr>');
       echo ('<td><pre>ucfirst()</pre></td>');
       echo ('<td>'.ucfirst($text).'</td>');
       echo('</tr>');
       
       echo('<tr>');
       echo ('<td><pre>ucwords()</pre></td>');
       echo ('<td>'.ucwords($text).'</td>');
       echo('</tr>');
       
       echo('<tr>');
       echo ('<td><pre>str_replace(...)</pre></td>');
       echo ('<td>'.str_replace('a','@',$text).'</td>');
       echo('</tr>');

       echo('<tr>');
       echo ('<td><pre>strrev(...)</pre></td>');
       echo ('<td>'.strrev($text).'</td>');
       echo('</tr>');

     ?>
     </center>
</body>
</html>


