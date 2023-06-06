
<?php
session_start();
if (isset($_SESSION['muzuox_userid'])) {
	$_SESSION['muzuox_userid'] = NULL;
	unset($_SESSION['muzuox_userid']);
}

header("Location: ../index.php");
die;
