<?php
  $namadepan = "Nurul";
  $namabelakang = "Imam";

  function Sapa($nama) {
    echo "Hai, ".$nama."<br />";
  }

  $namalengkap = function () use ($namadepan, $namabelakang) {
    return $namadepan." ".$namabelakang;
  };

  Sapa($namalengkap());
?>