<?php

include '../src/components/Head.php';

echo "<body>";
include '../src/layout/management/Navbar.php';
?>
  <main>
    <section class="bg-green-primary">
      <div class="container">
        <h2 class="font-bold">Stok Obat</h2>
        <div class="bg-white mt-3 flex justify-between px-6 py-3">
          <button class="button-green">Tambah Obat</button>
          <div class="flex items-center gap-3">
            <p>Search :  </p>
            <input>
          </div>
        </div>
        <div class="bg-white mt-3 flex justify-between px-6 py-3 mt-3">
          <table>
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


