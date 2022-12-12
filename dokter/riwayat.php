<?php

include '../src/components/Head.php';

echo "<body>";
include '../src/layout/dokter/Navbar.php';
?>
<main>
  <section class="bg-green-primary">
    <div class="container">
      <div class="flex justify-between items-center">
        <h2 class="font-bold py-2">Riwayat</h2>
  
        <div class="flex items-center justify-center">
          <p>Filter dengan</p>
          <select>
            <option value="Semua">Semua</option>
            <option value="Konsultasi">Konsultasi</option>
            <option value="mercedes">Layanan</option>
            <option value="Terapi">Terapi</option>
            <option value="Covid">Test Covid</option>
            <option value="Vaksin">Vaksin</option>
          </select>
      </div>
      </div>
      <div class="rounded-xl w-full px-6 py-2 bg-white mt-6">
        <div class="flex items-center justify-between">
          <div>
            <p class="font-bold">Konsultasi</p>
            <p>31 Oktober 2021, 10:00</p>
          </div>

        </div>
        <!-- Rincian -->
        <div class="flex justify-between items-center mt-3 font-bold">
          <div class="border-r px-6 py-4">
            <p>Andrea Yuliningsih</p>
          </div>
          <div class="border-r px-6 py-4">
            <p>2154848484</p>
          </div>
          <div class="border-r px-6 py-4">
            <p>Ruang Dokter A</p>
          </div>
          <div class="border-r px-6 py-4">
            <p>RS Bhayangkara Surabaya</p>
          </div>
          <div class="border-r px-6 py-4">
            <a class="text-red" href="../dokter/riwayat-detail.php">Lebih Lanjut  ></a>
          </div>
        </div>
      </div>
      <div class="rounded-xl w-full px-6 py-2 bg-white mt-6">
        <div class="flex items-center justify-between">
          <div>
            <p class="font-bold">Konsultasi</p>
            <p>31 Oktober 2021, 10:00</p>
          </div>

        </div>
        <!-- Rincian -->
        <div class="flex justify-between items-center font-bold">
          <div class="border-r px-6 py-4">
            <p>Andrea Yuliningsih</p>
          </div>
          <div class="border-r px-6 py-4">
            <p>2154848484</p>
          </div>
          <div class="border-r px-6 py-4">
            <p>Ruang Dokter A</p>
          </div>
          <div class="border-r px-6 py-4">
            <p>RS Bhayangkara Surabaya</p>
          </div>
          <div class="border-r px-6 py-4">
            <a class="text-red" href="../dokter/riwayat-detail.php">Lebih Lanjut  ></a>
          </div>
        </div>
      </div>
      <div class="rounded-xl w-full px-6 py-2 bg-white mt-6">
        <div class="flex items-center justify-between">
          <div>
            <p class="font-bold">Konsultasi</p>
            <p>31 Oktober 2021, 10:00</p>
          </div>

        </div>
        <!-- Rincian -->
        <div class="flex justify-between items-center mt-3 font-bold mt-6">
          <div class="border-r px-6 py-4">
            <p>Andrea Yuliningsih</p>
          </div>
          <div class="border-r px-6 py-4">
            <p>2154848484</p>
          </div>
          <div class="border-r px-6 py-4">
            <p>Ruang Dokter A</p>
          </div>
          <div class="border-r px-6 py-4">
            <p>RS Bhayangkara Surabaya</p>
          </div>
          <div class="border-r px-6 py-4">
            <a class="text-red" href="../dokter/riwayat-detail.php">Lebih Lanjut  ></a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php
include '../src/layout/Footer.php';
echo "</body>"

?>