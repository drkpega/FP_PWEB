<?php

include '../src/components/Head.php';

echo "<body>";
include '../src/layout/dokter/Navbar.php';
?>
<main>
  <section class="bg-green-primary">
    <div class="container">
      <div class="bg-white mt-3 px-4 py-2">
        <h2 class="text-center">INFORMASI PASIEN KONSULTASI</h2>
        <hr >
        <div class="ml-5">
          <p class="font-bold text-2xl mt-3">
            RS Bhayangkara Surabaya
          </p>
          <div class="flex mt-6">
            <p class="col-12">Tanggal  Pemeriksaan</p>
            <p>: 31 Oktober 2021, 10:00 WIB</p>
          </div>
          <div class="flex mt-3">
            <p class="col-12">Nama</p>
            <p>: HUHU HAHA</p>
          </div>
          <div class="flex mt-3">
            <p class="col-12">Umur</p>
            <p>: 20 TAHUN</p>
          </div>
          <div class="flex mt-3">
            <p class="col-12">Golongan Darah</p>
            <p>: A+</p>
          </div>
          <div class="flex mt-3">
            <p class="col-12">Berat Badan</p>
            <p>: 58 kg</p>
          </div>
          <div class="flex mt-3">
            <p class="col-12">Tekanan Darah</p>
            <p>: 120/80</p>
          </div>
          <div class="flex mt-3">
            <p class="col-12">Suhu</p>
            <p>: 37°C</p>
          </div>
          <div class="flex mt-3">
            <p class="col-12">Detak Jantung</p>
            <p>: 80 bpm</p>
          </div>
          <p class="font-bold text-xl mt-6">
            Kondisi Pasien
          </p>
          <div class="ml-12">
            <p class="col-6 mt-3 font-bold">Alergi Obat</p>
            <div class="mt-3 ml-12">
              <p>
                1. Antibiotik Penisilin
              </p>
              <p>
                2. Ibuprofen
              </p>
            </div>
          </div>
          <div class="ml-12">
            <p class="col-6 mt-3 font-bold">Riwayat Penyakit</p>
            <div class="mt-3 ml-12">
              <p>
                1. Usus Buntu
              </p>
              <p>
                2. Asam Lambung
              </p>
            </div>
          </div>
          <div class="ml-12">
            <p class="col-6 mt-3 font-bold">Keluhan</p>
            <div class="mt-3 ml-12">
              <p>
              Merasakan beberapa gejala selama 5 hari ini, diantaranya:
              </p>
              <ul>
                <li>
                  Sensasi terbakar di dada (mulas), biasanya setelah makan, yang mungkin lebih buruk di malam hari sakit dada
                  Kesulitan menelan
                </li>
                <li>
                  Regurgitasi makanan atau cairan asam
                </li>
                <li>
                  Sensasi ada benjolan di tenggorokan
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-white mt-3 px-4 py-2">
        <div class="flex items-center justify-between">
          <button class="button-secondary">
            Tambah Hasil Pemeriksaan
          </button>
          <button class="button-green">
            Edit
          </button>
        </div>
        <textarea class="border w-full bg-white mt-6">
        </textarea>
      </div>
      <div class="bg-white mt-3 px-4 py-2">
        <div class="flex items-center justify-between">
          <button class="button-secondary">
            Tambah Hasil Pemeriksaan
          </button>
        </div>
        <input type="file" class="border w-full bg-white mt-6">
      </div>
      <div class="bg-white mt-3 px-4 py-2">
        <div class="flex items-center justify-between">
          <button class="button-secondary">
            Tambah Reseo Obat
          </button>
        </div>
        <table class="mt-3">
          <thead>
            <tr class="bg-secondary">
              <th>
                No
              </th>
              <th>
                Jenis Obat
              </th>
              <th>
                Jumlah
              </th>
              <th>
                Aturan Pemakaian
              </th>
              <th>
                Keterangan
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>2</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="button-secondary border mt-6">
        <p class="text-center">
          Selesaikan Konsultasi
        </p>
      </div>
    </div>
  </section>
</main>
<?php
include '../src/layout/Footer.php';
echo "</body>"

?>