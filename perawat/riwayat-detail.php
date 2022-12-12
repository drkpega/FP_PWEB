<?php

include '../src/components/Head.php';

echo "<body>";
include '../src/layout/dokter/Navbar.php';
?>
<main>
  <section class="bg-green-primary">
    <div class="container">
      <div class="bg-white rounded-xl px-6 py-2">
        <h2 class="text-center">Rincian Layanan</h2>
        <hr class="border">
        <h2 class="mt-6">RS Bhayangkara Surabaya</h2>
        <div class="flex mt-2">
          <p class="col-12">Tanggal Pemeriksaan </p>
          <p>: 31 Oktober 2021, 10:00 WIB</p>
        </div>
        <div class="flex mt-2">
          <p class="col-12">Nama </p>
          <p>: MELATIE VICTORIA</p>
        </div>
        <div class="flex mt-2">
          <p class="col-12">Umur</p>
          <p>: 20 TAHUN</p>
        </div>
        <div class="flex mt-2">
          <p class="col-12">Golongan Darah </p>
          <p>: O</p>
        </div>
        <div class="flex mt-2">
          <p class="col-12">Berat Badan </p>
          <p>: 55 Kg</p>
        </div>
        <div class="flex mt-2">
          <p class="col-12">Tinggi Badan </p>
          <p>: 160 cm</p>
        </div>
        <div class="flex mt-2">
          <p class="col-12">Tekanan Darah </p>
          <p>: 120/80</p>
        </div>
        <div class="flex mt-2">
          <p class="col-12">Suhu </p>
          <p>: 40 C</p>
        </div>
        <div class="flex mt-2">
          <p class="col-12">Detak Jantung </p>
          <p>: 80 bpm</p>
        </div>
        <hr class="mt-9">

        <div class="mt-6">
          <div class="flex justify-between">
            <p class="font-bold text-2xl">Bulan Oktober 2022</p>
            <div class="flex">
              <p>Filter dengan</p>
              <select>
                <option>Bulan Ini</option>
                <option>Oktober</option>
              </select>
            </div>
          </div>
          <table>
            <thead>
              <tr class="bg-secondary h-75">
                <th>Lokasi</th>
                <th>Durasi Penanganan</th>
                <th>Dokter</th>
                <th>Hasil Pencarian</th>
                <th>Keterangan</th>
              </tr>
            </thead>
            <tbody>
              <tr class="h-75">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr class="h-75">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
</main>
<?php
include '../src/layout/Footer.php';
echo "</body>"

?>