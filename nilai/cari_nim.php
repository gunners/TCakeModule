<?php
include ("../../inc/define.php");
include (HOST.CONF);
include (HOST.FUNC);
conn_db($host,$user,$pass,$db);
$q = strtolower($_GET["q"]);
if (!$q) return;

$sql = "select * from mahasiswa where nim LIKE '%$q%'";
$rsd = mysql_query($sql);
$count = mysql_num_rows($rsd);
if ($count > '0') {
	while($rs = mysql_fetch_array($rsd)) {
		echo ($rs['nim']."\n");
	}
}
else {
	echo "Data tidak ditemukan";
}
?>
