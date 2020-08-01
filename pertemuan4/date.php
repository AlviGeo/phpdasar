<?php 
    // date, dokumentasi di https://www.php.net/manual/en/function.date.php
    // echo date("l, d-M-Y");

    // Time
    // UNIX Timestamp / EPOCH Time
    // detik yang sudah berlalu sejak 1 Jan 1970
    // echo time();

    // tampilkan hari dari waktu sekarang
    // echo date("d M Y", time()-60*60*24*100);

    //mktime (membuat sendiri detik)
    // mktime(0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
    // echo date("l", mktime(0,0,0,3,29,2001));

    // strtotime
    echo date("l", strtotime("29 Maret 2001"));


?>