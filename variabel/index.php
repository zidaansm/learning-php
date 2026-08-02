<?php

/*

Ciri dan Aturan Penamaan Variabel

- Diawali dengan simbol $ (misalnya: $nama).
- Harus dimulai dengan huruf atau underscore (_).
- Bersifat case-sensitive ($nama berbeda dengan $Nama).
- Tidak boleh mengandung spasi ($nama lengkap ❌).
- Tidak boleh menggunakan karakter khusus kecuali underscore (_).
- Tidak boleh dimulai dengan angka ($1nama ❌).

*/

$nama = "Zidan";        // ✅ Benar
$_nama = "Zidan";       // ✅ Benar
$Nama = "Budi";         // ✅ Berbeda dengan $nama
$nama_lengkap = "Zidan Mutaqin"; // ✅ Benar

// Contoh yang salah:
// $nama lengkap = "Zidan"; // ❌ Ada spasi
// $nama-lengkap = "Zidan"; // ❌ Ada karakter -
// $1nama = "Zidan";        // ❌ Diawali angka

?>