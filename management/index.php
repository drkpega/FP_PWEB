<?php

include '../src/components/Head.php';

echo "<body>";
include '../src/layout/management/Navbar.php';
?>
  <main>
    <section class="bg-green-primary">
      <div class="container">
        <h2 class="font-bold">Hai, Manajer RS Bhayangkara Surabaya</h2>
        <div class="mt-6 bg-white rounded-xl px-4 py-2">
          <p>Senin, 22 November 2022</p>
          <div class="mt-3 flex justify-between gap-3 py-2 px-4">
            <div class="flex items-center justify-center flex-col linear-red px-6 py-2 w-card shadow-2xl rounded-2xl font-bold">
              <p>101</p>
              <p class="mt-6">Total Pasien</p>
            </div>
            <div class="flex items-center justify-center flex-col linear-green px-6 py-2 w-card shadow-2xl rounded-2xl font-bold">
              <p>101</p>
              <p class="mt-6">Total Dokter</p>
            </div>
            <div class="flex items-center justify-center flex-col linear-blue px-6 py-2 w-card shadow-2xl rounded-2xl font-bold">
              <p>101</p>
              <p class="mt-6">Total Appoinment</p>
            </div>
            <div class="flex items-center justify-center flex-col linear-pink px-6 py-2 w-card shadow-2xl rounded-2xl font-bold">
              <p>101</p>
              <p class="mt-6">Total Kamar Kosong</p>
            </div>
          </div>
        </div>
        <div class="mt-6 bg-white rounded-xl px-4 py-2 mt-6">
          <p class="font-bold">Statistik Pasien Masuk dan Keluar Tahun 2022</p>
          <div class="px-6 py-2">
            <img src="../public/assets/images/management/stastik.png" alt="" width="100%" height="100%">
          </div>
        </div>
        <div class="mt-6 bg-white rounded-xl px-4 py-2 mt-6">
          <p class="font-bold">Laporan Keuangan Harian</p>
          <div class="px-6 py-2">
            <img src="../public/assets/images/management/stastik-2.png" alt="" width="100%" height="100%">
          </div>
        </div>
      </div>

    </section>
  </main>

<?php
include '../src/layout/Footer.php';
echo "</body>"

?>


