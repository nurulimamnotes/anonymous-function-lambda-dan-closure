<?php
  $nama = function () {
    return "Nurul Imam";
  };

  function Sapa($nama) {
    echo "Hai, ".$nama."<br />";
  }

  Sapa($nama());
?>