<?php
   global $koneksi;
   include_once("konfigurasi.php");

   $sql = "SELECT NIM,NAMA,ALAMAT,TGL_LAHIR,JENISKEL FROM mhs;";
   $ps = mysqli_query($koneksi,$koneksi,$sql);
   while($res = mysql_fetch_assoc($ps)){
    $h[] = array(
        "NIM"=>$res["NIM"],
        "NAMA"=>$res["NAMA"],
        "ALAMAT"=>$res["ALAMAT"],
        "LAHIR"=>$res["TGL_LAHIR"],
        "JNSKEL"=>$res["JENISKEL"],


    );


   }
   header("content-type: application/json");
   echo json_encode($h);