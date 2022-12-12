<?php

include '../src/components/Head.php';

echo "<body>";
include '../src/layout/dokter/Navbar.php';
?>
<main>
  <section class="bg-green-primary">
    <div class="container">
      <div class="bg-white rounded-xl px-6 py-2">
        <h2 class="text-center">INFORMASI PASIEN VISITE</h2>
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
        <div class="flex mt-2">
          <p class="col-12">Kamar </p>
          <p>: VVIP 1</p>
        </div>
        <div class="mt-6">
          <p class="font-bold text-xl">Kondisi Pasien</p>
          <div class="ml-12">
            <p>Alergi Obat</p>
            <div class="ml-6 mt-3">
              <p>1. Antibiotik Penisilin</p>
              <p>2. Ibuprofen</p>
            </div>
          </div>
          <div class="ml-12 mt-6">
            <p>Riwayat Penyakit</p>
            <div class="ml-6 mt-3">
              <p>1. Usus Buntu</p>
              <p>2. Asam Lambung</p>
            </div>
          </div>
        </div>
        <div class="mt-6">
          <div class="flex justify-between">
            <p class="font-bold text-2xl">Hasil Pemeriksaan Fisik</p>
            <div class="flex">
              <button class="button-green">
                Tambah Data Hasil Visite
              </button>
            </div>
          </div>
          <table class="mt-3">
            <thead>
              <tr class="bg-secondary h-75">
                <th>Hari, Tanggal</th>
                <th>Tekanan Darah</th>
                <th>Detak Jantung</th>
                <th>Respiratory Rate</th>
                <th>Suhu</th>
              </tr>
            </thead>
            <tbody>
              <tr class="h-30">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr class="h-30">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr class="h-30">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr class="h-30">
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
      <div class="mt-9 bg-secondary px-6 py-9 border rounded-xl">
        <p class="text-center font-bold text-2xl">SELESAIKAN VISITE</p>
      </div>
    </div>
  </section>
</main>
<?php
include '../src/layout/Footer.php';
echo "</body>"

?>