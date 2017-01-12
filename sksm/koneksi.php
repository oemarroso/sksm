<?php
    $server = "localhost";
    $usernameDatabase = "admin";
    $passwordDatabase = "admin";
    $databaseName = "sksm";

    $mysqli = mysqli_connect($server,$usernameDatabase,$passwordDatabase,$databaseName) or die("Koneksi gagal");