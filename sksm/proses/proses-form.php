<?PHP
if (isset($_POST['kirim'])) {  
$error = array();
    if (empty($_POST['nama_presenter'])) {  
        $error[] = 'Nama tidak boleh kosong'; 
    } else {
        $nama_presenter =mysqli_real_escape_string($mysqli, $_POST['nama_presenter']);
		
    }

if (empty($_POST['npm_presenter'])) {  
        $error[] = 'NPM tidak boleh kosong'; 
    } else {
       $npm_presenter =mysqli_real_escape_string($mysqli, $_POST['npm_presenter']);
    }
if (empty($_POST['jurusan'])) {  
        $error[] = 'Jurusan Harus diisi'; 
    } else {
       $jurusan =mysqli_real_escape_string($mysqli, $_POST['jurusan']);
    }
if (empty($_POST['judul_seminar'])) {  
        $error[] = 'Judul Seminar Harus diisi'; 
    } else {
       $judul_seminar =mysqli_real_escape_string($mysqli, $_POST['judul_seminar']);
    }
if (empty($_POST['jenis_seminar'])) {  
        $error[] = 'Jenis Seminar Harus dipilih'; 
    } else {
       $jenis_seminar =mysqli_real_escape_string($mysqli, $_POST['jenis_seminar']);
    }
if (empty($_POST['dosen_pembimbing'])) {  
        $error[] = 'Dosen Pembimbing Harus diisi'; 
    } else {
       $dosen_pembimbing =mysqli_real_escape_string($mysqli, $_POST['dosen_pembimbing']);
    }
if (empty($_POST['tgl_seminar'])) {  
        $error[] = 'Tanggal Seminar Harus diisi'; 
    } else {
       $tgl_seminar =mysqli_real_escape_string($mysqli, $_POST['tgl_seminar']);
    }
    
//$tgl_seminar=date("j-M-Y");
	
    if (empty($error)){

// query untuk mencari email yg sdh ada di database
$query ="SELECT * FROM kartu WHERE nama_presenter ='$nama_presenter'";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
if(!$result->num_rows > 0){
	
$insert="INSERT INTO kartu values('$nama_presenter', '$npm_presenter', '$jurusan','$judul_seminar','$jenis_seminar','$dosen_pembimbing','$tgl_seminar')" 
or die($mysqli->error.__LINE__);
    
    if($mysqli->query($insert) === false) { 

echo'
<div class="alert alert-danger alert-dismissable">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Maaf anda tidak bisa mengisi kehadiran karena sistem kami ada kesalahan..!</div>';
  } 
  else   {
      echo'
      <div class="alert alert-warning alert-dismissable" align="center">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Tersimpan!<br></br>
      Terima kasih telah menghadiri seminar <i class="fa fa-thumbs-up"></i> 
      </div>';
 } }

else   {
    echo'
    <div class="alert alert-danger alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Maaf Sebelumnya anda sudah menghadiri seminar...!</div>';
 }}

  


else {echo'<div class="alert alert-danger alert-dismissable"><ul>';
foreach ($error as $key => $values) {            
echo'<li>'.$values.'</li>';}
echo'</ul></div>';
}
unset($_POST['kirim']);
mysqli_close($mysqli); }