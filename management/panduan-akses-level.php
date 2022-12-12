<?php

include '../src/components/Head.php';

echo "<body>";
include '../src/layout/management/Navbar.php';
?>

<main>
  <section class="grid grid-cols-8 grid-flow-row-dense min-h-screen">
    <div class="col-span-2 bg-green-500">
      <?php
      include '../management/Sidebar.php';
      ?>
    </div>
    <div class="col-span-6 bg-green-primary">
      <div class="container">
        <div class="bg-white px-6 py-2">
          <h2>Pandang Akses Level</h2>
        </div>
        <div class="bg-white px-6 py-2 mt-4">
          <p>Akses level digunakan untuk mitigasi risiko keamanan dan fitur pada website “nama instansi”. 
Manajemen rumah sakit wajib mengetahui jenis akses level pada website dibawah ini.</p>
          <br />
          <table>
            <thead>
              <tr>
                <td>
                  Level
                </td>
                <td>
                  Pemilik
                </td>
                <td>
                  Akses
                </td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Pasien</td>
                <td></td>
              </tr>
              <tr>
                <td>2
                  </td>
                  <td>Tenaga Non Medis</td>
                  <td></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Tenaga Medis</td>
                  <td></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Dokter</td>
                  <td></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Manajemen</td>
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