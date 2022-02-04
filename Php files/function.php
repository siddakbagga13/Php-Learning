<?php 

function showInputForm() {
    echo '<form class="container" action="function.php" method="POST">';
    echo '<h1>Base</h1>';
    echo '<input type="number" name="base" placeholder="base" required>';
    echo '<!-- pattern="^(?![_ -])(?:(?![_ -]{2})[\w -]){5,16}(?<![_ -])$" required -->';
    echo '<input type="number" name="height" placeholder="height" required >';
    echo '';
    echo '<!-- pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{3,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required -->';
    echo '';
    echo '';
    echo '<input type="submit"name="submit" value="compute area" >';
}


function traingle_area($base,$height) {
    $area = $base * $height *0.5;
    return $area;

}
showInputForm();

error_reporting(E_ALL ^ E_WARNING); 
if($_POST['submit']) {

    echo '<br>';
    echo '<br>';
    echo '<br>';

    echo "Area of the traingle is ".traingle_area($_POST['base'],$_POST['height']);
}

?>