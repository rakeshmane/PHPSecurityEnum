<?php

if( ini_get('safe_mode') ){
        echo "Safe Mode : Enabled";
}
else{
        echo "Safe Mode : Disabled";
}
echo "<br>";
$disabled = ini_get('disable_functions');
echo "Disabled Functions : ".$disabled;


?>
