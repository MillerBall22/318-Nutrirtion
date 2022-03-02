<?php
session_start();
session_unset();
session_destroy();
header('Location: http://localhost/318 Nutrirtion/PHP Scripts/Signed Out.php');
exit();
 ?>
