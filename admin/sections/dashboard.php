<?php
include("../system/connection.php");

$lastvisitornumber = $conn -> query("SELECT * FROM visitors ORDER BY visitornumber DESC LIMIT 1");
$outputs = $lastvisitornumber->fetch_array();



?>
<br>
<br>
<br>
<br>
<br>
<br>
    <p><?php echo $outputs[1];?></p>
