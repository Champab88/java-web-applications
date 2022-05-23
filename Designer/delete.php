<?php
include_once 'forms/config.php';
$sql = "DELETE FROM products WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($con, $sql)) {
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Deleted Succesfully')
    window.location.href='adddesigns.php';
    </SCRIPT>");
    // header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/Viewcharge.php");
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
?>