<?PHP 
require_once"koneksi.php";
if(!empty($_SESSION['kartu'])) { 
header ('location:./hasilform.php');
} else{

require_once"./assets/header-sksm.php";
    echo'
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>SKSM v 0.1 | Form Kehadiran</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet"> <!-- style custom -->
    <!--<link href="css/bootstrap-theme.min.css" rel="stylesheet">-->
    <link href="css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
            $(document).ready(function () {
                $(".tanggal").datepicker({
                    format: "yyyy-mm-dd",
                    autoclose:true
                });
            });
        </script>
  </head>';
    
    echo'
    <body>
    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <div class="login-box-body">
                <div class="panel panel-body"><a href="logout.php"><input type="button" class="btn btn-danger btn-flat" value="Log out"></a>
                <a href="kartu.php"><input type="button" class="btn btn-success btn-flat" align="right" value="Lihat Kartu"></a>
                <h3 align="center">Form Kehadiran</h3><hr>';
    
    require_once"proses/proses-form.php";
    
    echo'
      <form class="form-horizontal" name="form1"  action="" method="post">
        <div class="form-group">
            <label class="control-label" for="nama_presenter">Nama Presenter Seminar:</label>
            <div >
                <input type="text" class="form-control" name="nama_presenter" placeholder="Nama" required autofocus>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="npm_presenter">NPM Presenter Seminar:</label>
            <div>
                <input type="text" class="form-control" name="npm_presenter" placeholder="NPM" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="jurusan">Jurusan:</label>
            <div>
                <input type="text" class="form-control" name="jurusan" placeholder="Jurusan" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="judul_seminar">Judul Seminar:</label>
            <div>
                <input type="text" class="form-control" name="judul_seminar" placeholder="Judul Seminar" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="jenis_seminar">Jenis Seminar:</label>
            <div>
                <div class="col-xs-4">
                <select class="form-control" name="jenis_seminar">
                    <option>Proposal</option>
                    <option>Hasil</option>
                </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="dosen_pembimbing">Dosen Pembimbing:</label>
            <div>
                <input type="text" class="form-control" name="dosen_pembimbing" placeholder="Dosen Pembimbing" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="tgl_seminar">Tanggal Seminar:</label>
            <div>
                <input type="text" name="tgl_seminar" class="tanggal" placeholder="dd-mm-yyyy" />
            </div>
        </div>
        <br>
        <div class="form-actions">
            <div class="col-xs-offset-3">
                <input name="kirim" type="submit" class="btn btn-primary" value="Kirim"></a>
                <input type="reset" class="btn btn-default" value="Reset">
                <input type="button" class="btn btn-success" value="Lihat Kartu"><a href="kartu.php"></a>
                
            </div>
        </div>
    </form>
                </div>
            </div>
        </div>
        </div>

    
    </body>
</html>';}