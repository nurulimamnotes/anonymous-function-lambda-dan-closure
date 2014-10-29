<?php
  $minimal = 60;
  $mahasiswa = array(
    array("nama" => "Nurul Imam",
          "nilai" => 90),
    array("nama" => "Zaenal Muttaqien",
          "nilai" => 55)
    );

  array_walk($mahasiswa, function ($siswa) use ($minimal) {
    echo "Nama : ".$siswa['nama']."<br />";
    echo "Nilai : ".$siswa['nilai']."<br />";
    echo "Keterangan : ";

    if ($siswa['nilai'] >= $minimal) {
      echo "Lulus <br /><br />";
    } else {
      echo "Gagal <br /><br />";
    }
  });
?>