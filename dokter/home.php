<?php

include '../src/components/Head.php';

echo "<body>";
include '../src/layout/dokter/Navbar.php';
?>

<main>
  <section class="bg-green-primary">
    <div class="container">
      <h2 class="mb-6">Hai,  Dr. Marie</h2>
      <div class="ml-6">
        <p class="mt-2 font-bold">Jadwal Konsultasi</p>
        <table class="mt-3">
          <thead>
            <tr>
              <th>No. Antrian</th>
              <th>Nama Pasien</th>
              <th>Rincian</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Budi</td>
              <td><a href="detail-konsultasi.php" class="text-green-primary">Rincian Informasi Pasien</a></td>
            </tr>
            <tr>
              <td>2</td>
              <td>Nani</td>
              <td><a href="detail-konsultasi.php" class="text-green-primary">Rincian Informasi Pasien</a></td>
            </tr>
            <tr>
              <td>3</td>
              <td>Doni</td>
              <td><a href="detail-konsultasi.php" class="text-green-primary">Rincian Informasi Pasien</a></td>
            </tr>
            <tr>
              <td>4</td>
              <td>Bebek</td>
              <td><a href="detail-konsultasi.php" class="text-green-primary">Rincian Informasi Pasien</a></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="ml-6">
        <p class="mt-2 font-bold">Jadwal Visite</p>
        <table class="mt-3">
          <thead>
            <tr>
              <th>Ruangan</th>
              <th>Nama Pasien</th>
              <th>Rincian</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Dahlia 1 - 5</td>
              <td>Budi</td>
              <td><a href="detail-konsultasi.php" class="text-green-primary">Rincian Informasi Pasien</a></td>
            </tr>
            <tr>
              <td>VIP 1</td>
              <td>Nani</td>
              <td><a href="detail-konsultasi.php" class="text-green-primary">Rincian Informasi Pasien</a></td>
            </tr>
            <tr>
              <td>VVIP 3</td>
              <td>Doni</td>
              <td><a href="detail-konsultasi.php" class="text-green-primary">Rincian Informasi Pasien</a></td>
            </tr>
            <tr>
              <td>Rose 4 - 4</td>
              <td>Bebek</td>
              <td><a href="detail-konsultasi.php" class="text-green-primary">Rincian Informasi Pasien</a></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="ml-6">
        <p class="mt-2 font-bold">Jadwal Tambahan</p>
        <table class="mt-3">
          <thead>
            <tr>
              <th>Hari, Tanggal</th>
              <th>Jam</th>
              <th>Jenis Kegiatan</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Kamis, 13 Januari 2022</td>
              <td>18.00 - 00.00 WIB</td>
              <td>Jaga IGD</td>
              <td>-</td>
            </tr>
            <tr>
              <td>Kamis, 13 Januari 2022</td>
              <td>18.00 - 00.00 WIB</td>
              <td>Jaga IGD</td>
              <td>-</td>
            </tr>
            <tr>
              <td>Kamis, 13 Januari 2022</td>
              <td>09.00 - 10.00 WIB</td>
              <td>Acara di luar</td>
              <td>Menjadi pembicara di SMAN 12 Surabaya</td>
            </tr>
            <tr>
              <td>Kamis, 13 Januari 2022</td>
              <td>14.00 - 15.00 WIB</td>
              <td>Visite pasien</td>
              <td>Visite pasien VVIP di rumah pasien</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</main>

<?php
include '../src/layout/Footer.php';
echo "</body>"

?>