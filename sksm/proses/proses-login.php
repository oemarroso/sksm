<?PHP 
session_start();
require_once"../koneksi.php"; 
    if (isset($_POST['login'])) {
$error = array();
if (empty($_POST['username'])) { 
    $error[] = 'Username tidak boleh kosong'; 
} else {
    $username=mysqli_real_escape_string($mysqli, $_POST['username']);
 }

if (empty($_POST['password'])) { 
     $error[] = 'Password tidak boleh kosong'; 
  } else {
  $password=mysqli_real_escape_string($mysqli, md5($_POST['password']));
 }

if (empty($error)){
$login="SELECT * FROM peserta WHERE user_peserta='$username' AND pass_peserta='$password'";
$result = $mysqli->query($login) or die($mysqli->error.__LINE__);
$rows= $result->fetch_assoc();
extract($rows);
// Apabila username dan password ditemukan
if($result->num_rows > 0){
$member_id = $rows["id"];
    $_SESSION['member_id'] = $member_id;

//echo "<meta http-equiv='refresh' content='0; url=./member.php";
$update="UPDATE peserta SET member_status='Online', member_jam_tgl_login='$member_jam_tgl_login' WHERE member_id='$member_id'" or die($conn->error.__LINE__);
$mysqli->query($update);
header('location:../formkartu.php');   
} 
    else {
echo'
<div class="alert alert-warning alert-dismissable">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Username atau Password salah..!</div>';}
}
else {echo'<div class="alert alert-danger alert-dismissable"><ul>';
foreach ($error as $key => $values) {            
echo'<li>'.$values.'</li>';}
echo'</ul></div>';
}
unset($_POST['login']);}