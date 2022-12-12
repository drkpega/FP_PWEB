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
          <h2>Tagihan Pasien</h2>
        </div>
        <div class="bg-white px-6 py-2 mt-4 overflow-scroll">
          <button class="button-green">
            Tambah Data
          </button>
          <table class="mt-2">
            <thead>
              <tr>
                <td>No</td>
                <td>Foto</td>
                <td>Usernmae</td>
                <td>Nama</td>
                <td>Email</td>
                <td>ID</td>
                <td>NIP</td>
                <td>Akses Level</td>
                <td>Aksi</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td></td>
                <td>Elke Camillia K</td>
                <td>Elke Camillia Kurniawan</td>
                <td>elkecamilliakurniawan@gmail.com</td>
                <td>5555555555</td>
                <td>502555554448</td>
                <td>4</td>
                <td>
                  <div class="flex text-white">
                    <button class="bg-green-500 px-4 py-1">Edit</button>
                    <button class="bg-red-500 px-4 py-1">Edit</button>
                  </div>
                  <button class="bg-gray-100 px-4 py-1 mt-3">Ganti Password</button>
                </td>
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