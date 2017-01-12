<?PHP  
require_once"koneksi.php";	
 $member_id=$_SESSION['member_id'];
$mysqli->query($update);
session_destroy();
unset($_SESSION['member_id']);
header("location:./");
