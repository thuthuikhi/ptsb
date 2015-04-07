<?php 

$conn = oci_connect('ORCONN', 'qwertyuiop', 'localhost/xe');
if(!$conn){
	$e = oci_error();
	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, 'SELECT * FROM orusr');
oci_execute($stid);

$v=oci_fetch_array($stid);

$id=$v['NAMA'];

echo $id;

?>
