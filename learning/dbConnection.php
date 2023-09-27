<?php
$db_host = "aws.connect.psdb.cloud";
$db_user = "xuj2i2lydbldhxy3gvjv";
$db_password = "pscale_pw_xYc1fS1UuP2prGYANGaxz8nHlxWdbdD4XqaeHzweR4i";
$db_name = "learning";

// Create Connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check Connection
if($conn->connect_error) {
 die("connection failed");
} 
// else {
//  echo"connected";
// }
?>
