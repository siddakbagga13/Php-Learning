<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
        *{
            font-size: 20px;
        }
        body{
  background: #34495e;
        }
    </style>
</head>
<body>
    <?php 
        
        $fruits = array("apple","mango","orange");
        $fruits[0]="guava";
        $fruits[4]="banana";
        echo "$fruits[4]</br>";
        $myfruits = array('white'=> 'apple','blue'=> 'mango','green' =>'orange');
        echo "$myfruits[blue]";

        $shopinglist = array('Groceries','Dry Fruits','Juices','Fruits and Vegetables');

        echo "<h1><center>";
        echo "Shoping List";
        echo "</h1></center>";
        echo "<ol>";
        for ($i=0; $i < sizeof($shopinglist) ; $i++) {
            # code...
            error_reporting(E_ALL ^ E_WARNING);
            echo "<li>". $shopinglist[$i]. "</li>";
           
        }
        echo "</ol>";
        echo "<ol>";
        foreach ($shopinglist as $items ) {
            # code...
            echo "<li>". $items ."</li>";
        }
        foreach ($myfruits as $key => $items) {
            # code...
            echo "<li>".$key. " ".$items ."</li>";
        }
        foreach ($fruits as $items) {
            # code...
            echo "<li>".$items ."</li>";
        }
        echo "</ol>";
    ?>
</body>
</html>