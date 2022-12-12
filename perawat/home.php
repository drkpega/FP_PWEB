<?php

include '../src/components/Head.php';

echo "<body>";
include '../src/layout/dokter/Navbar.php';
?>

<main>
  <section class="bg-green-primary">
    <div class="container">
      <h2 class="">Hai,  Ners Marie</h2>
      <p class="mb-6">Asisten Dokter Puja</p>
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
    </div>
  </section>
</main>

<?php
include '../src/layout/Footer.php';
echo "</body>"

?>