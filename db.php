<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("o6wkg.h.filess.io","teamwealth_becausemad","00ad00f565a6be51fb2e8914270b2999eb31a598","teamwealth_becausemad","61001");
//$con = mysqli_connect("sql7.freemysqlhosting.net","sql7748837","L2CSaDcTLK","sql7748837","3306");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
