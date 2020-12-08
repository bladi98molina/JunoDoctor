<?php

$new_name = 'Juno_Doctors.apk';
 
$url = 'apk/Juno_Doctors.apk';
$file   = file($url);
 
$result = file_put_contents($new_name, $file);

?>