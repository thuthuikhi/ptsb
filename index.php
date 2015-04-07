<?php
error_reporting(0);

@$page=$_GET['mod'];


include "inc/header.php" ;

if ($page==''){
include "home.php";
}else if($page=='que'){
	include "modules/queue/index.php";
}else if($page=='sel'){
	include "modules/seller/index.php";
}else if($page=='wei'){
	include "modules/weigher/index.php";
}else if($page=='pac'){
	include "modules/packer/index.php";
}else if($page=='was'){
	include "modules/wasdist/index.php";
}

include "inc/footer.php";
?>
     