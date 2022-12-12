<?php

include '../src/components/Head.php';

echo "<body>";
include '../src/layout/management/Navbar.php';
?>
  <main>
    <section class="bg-green-primary">
      <div class="container">
        <div class="bg-white mt-3 flex justify-between px-6 py-3">
          <h2 class="font-bold">Menejemen Ajuan</h2>
        </div>
        <div class="bg-white mt-3 flex flex-col justify-between px-6 py-3 mt-3">
          <div class="flex justify-end">
            <a class="button-green" href="/management/tambah-ajuan.php">Tambah Ajuan</a>
          </div>
          <h2>Dr. Sutromo</h2>
          <p>Umum</p>
          <table class="mt-3">
            <thead>
              <tr class="bg-secondary">
                <th>
                  No
                </th>
                <th>
                  ID Chat
                </th>
                <th>
                  Nama Obat
                </th>
                <th>
                  Fungsi
                </th>
                <th>
                  Stok
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  1
                </td>
                <td>548454545445</td>
                <td>Amocilin 50 Gram</td>
                <td>Antibiotk unuk membunuh kuman dan bakteri</td>
                <td>500 Kotak</td>
              </tr>
            </tbody>
          </table>
          <h2 class="mt-6">Dr. Sutromo</h2>
          <p>Umum</p>
          <table class="mt-3">
            <thead>
              <tr class="bg-secondary">
                <th>
                  No
                </th>
                <th>
                  ID Chat
                </th>
                <th>
                  Nama Obat
                </th>
                <th>
                  Fungsi
                </th>
                <th>
                  Stok
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  1
                </td>
                <td>548454545445</td>
                <td>Amocilin 50 Gram</td>
                <td>Antibiotk unuk membunuh kuman dan bakteri</td>
                <td>500 Kotak</td>
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


