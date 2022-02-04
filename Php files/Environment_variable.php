<?php 
   $system_variables = array('PHP_SELF','SCRIPT_NAME','SERVER_NAME','SERVER_SOFTWARE','SERVER_PROTOCOL','SERVER_PORT','HTTP_USER_AGENT','REMOTE_ADDR');

   foreach ($system_variables as $values) {
       # code...
       echo $values.": ".$_SERVER[$values]."<br/>";
   }
?>