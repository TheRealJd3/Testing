<?php
$mysqli = new mysqli("x3ztd854gaa7on6s.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "xa8gfb64lxld077o", "pvx0im66k1csu737", "sgqp3pq60ksm4vdk");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
