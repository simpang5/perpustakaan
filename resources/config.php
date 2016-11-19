<?php
define("sqlhost","localhost");
define("sqlusername","root");
define("sqlpassword","");
define("sqldatabase","perpustakaan");
define("timezone","Asia/Jakarta");
$asd = mysqli_connect(sqlhost,sqlusername,sqlpassword,sqldatabase);
if (!$asd) {
	print "Gagal menyambungkan ke database";
}
/**
* @author Ammar F. https://www.facebook.com/ammarfaizi2
* @package PHP_Concept/Project/Simpang5
* Project Master : Khairil A.
*/
date_default_timezone_set(timezone);
ini_set("max_execution_time",false);
if (!function_exists("a_encode")) {
	function a_encode($string){
		$data = base64_encode(gzencode(base64_encode(gzdeflate($string))));
		return $data;
	}
}
if (!function_exists("a_decode")) {
	function a_decode($string){
		$data = gzinflate(base64_decode(gzdecode(base64_decode($string))));
		return $data;
	}
}
?>
