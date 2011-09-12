<?php
include ("../../inc/define.php");
include (HOST.CONF);
include (HOST.FUNC);
conn_db($host,$user,$pass,$db);
auto_complete($_GET['q'],"fakultas","kd_fakultas");
?>
