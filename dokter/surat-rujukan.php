<?php

include '../src/components/Head.php';

echo "<body>";
include '../src/layout/dokter/Navbar.php';
?>

<main>
  <section class="bg-green-primary">
    <div class="container">
      <h2 class="text-center">Surat Rujukan</h2>
      <div class="bg-white container rounded-xl mt-6">
        <p>Dari :</p>
        <div class="flex ml-12 mt-3">
          <p class="col-6">
            No Rujukan
          </p>
          <p>
            : 00/23/23/2423
          </p>
        </div>
        <div class="flex ml-12 mt-3">
          <p class="col-6">
            Rumah Sakit
          </p>
          <p>
            : RS Bayucakra
          </p>
        </div>
        <div class="flex ml-12 mt-3">
          <p class="col-6">
            Dokter
          </p>
          <p>
            : Drg. Inggrit
          </p>
        </div>
        <div class="flex ml-12 mt-3">
          <p class="col-6">
            Poliklinik
          </p>
          <p>
            : Gigi
          </p>
        </div>
      </div>
      <div class="mt-9">
        <div class="bg-white container rounded-xl">
          <p>Kepada :</p>
          <div class="flex ml-12 mt-3">
            <p class="col-6">
              Rumah Sakit
            </p>
            <p>
              : Rs. Bhayangkara Surabaya
            </p>
          </div>
          <div class="flex ml-12 mt-3">
            <p class="col-6">
              Poliklinik
            </p>
            <p>
              : Gigi
            </p>
          </div>
        </div>
      </div>
      <div class="mt-9">
        <div class="bg-white container rounded-xl">
          <p>Data Diri Pasien :</p>
          <div class="flex ml-12 mt-3">
            <p class="col-6">
              Nama
            </p>
            <p>
              : Suyono
            </p>
          </div>
          <div class="flex ml-12 mt-3">
            <p class="col-6">
              Umur
            </p>
            <p>
              : 30 Tahun
            </p>
          </div>
          <div class="flex ml-12 mt-3">
            <p class="col-6">
              Jenis Kelamin
            </p>
            <p>
              : Laki-laki
            </p>
          </div>
          <div class="flex ml-12 mt-3">
            <p class="col-6">
              Diagnosa
            </p>
            <p>
              : Sakit Gigi
            </p>
          </div>
          <div class="ml-12 mt-3">
            <p class="col-6">
              Telah diberikan
            </p>
            <div class="ml-6">
              <ul>
                <li>
                Obat amocyliny
              </li>
              <li>
                Pembersihan karang gigi 
              </li>
              </ul>
            </div>
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