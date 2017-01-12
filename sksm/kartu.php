<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>SKSM v 0.1 | Kartu Seminar</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet"> <!-- style custom -->
    <link href="assets/css/custom.css" rel="stylesheet">
</head>

<body>
<body>
        <?php require_once"./assets/header-sksm.php";?>
        
		
		<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2 align="center">KARTU SEMINAR</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />

				  
		
		 <?php 
include "koneksi.php";
?>
<style>
    
table[border="1"] {
border-collapse:collapse;
font:normal 12px Verdana,Arial,Sans-Serif;
color:#333;
}
table[border="1"] tr {
background:#F0F0F0;
}
table[border="1"] th, table[border="1"] td {
vertical-align:top;
padding:5px 10px;
border:2px solid #fff;
}
table[border="1"] td:nth-child(odd) {
background:#DEDEDE;
}
table[border="1"] th {
background:#8B7BFF;
border-radius: 10px 10px 0px 0px; 
-moz-border-radius: 10px 10px 0px 0px; 
-webkit-border-radius: 10px 10px 0px 0px;
color:#fff;
font-weight:bold;
}
</style>
<center>

	<table border="1">
		<thead>
			<tr>
				<th>Nama Presenter</th>
				<th>Npm Presenter</th>
				<th>Jurusan</th>
				<th>Judul Seminar</th>
				<th>Jenis Seminar</th>
				<th>Dosen Pembimbing</th>
				<th>Tanggal Seminar</th>
		</tr>		
	</thead>
	<tbody>
		<?php 
$host = "localhost";
$user_name = "root";
$password = "";
$database = "sksm";
 
$koneksi = mysqli_connect($host, $user_name, $password);
$pilihdatabase = mysqli_select_db($koneksi, $database); 
       
$select = "SELECT * from kartu";
$select_query = mysqli_query($koneksi, $select);
while($select_result = mysqli_fetch_array($select_query))
        {
        $nama_presenter = $select_result['nama_presenter'] ;
        $npm_presenter = $select_result['npm_presenter'] ;
        $jurusan = $select_result['jurusan'] ;
        $judul_seminar = $select_result['judul_seminar'] ;
        $jenis_seminar = $select_result['jenis_seminar'] ;
        $dosen_pembimbing = $select_result['dosen_pembimbing'] ;
        $tgl_seminar = $select_result['tgl_seminar'] ;
        echo "
                                                       
        <tr><td>$nama_presenter</td><td>$npm_presenter</td><td>$jurusan</td><td>$judul_seminar</td><td>$jenis_seminar</td><td>$dosen_pembimbing</td><td>$tgl_seminar</td></tr>
        
        ";
        }
        ?>
	</table>
	<br/>
    
		<div>  
        <br>
        <br>  
				  
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
            <div class="col-xs-offset-5">
            <a href="formkartu.php"><input type="button" class="btn btn-primary btn-flat" value="Form kehadiran"></a>
            <a href="logout.php"><input type="button" class="btn btn-danger btn-flat" align="right" value="Log out"></a></div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
