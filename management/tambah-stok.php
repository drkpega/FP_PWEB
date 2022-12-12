<?php

include '../src/components/Head.php';

echo "<body>";
include '../src/layout/management/Navbar.php';
?>
  <main>
    <section class="bg-green-primary">
      <div class="container">
        <h2 class="font-bold">Stok Obat</h2>
        <div class="bg-white mt-3 flex flex-col justify-between px-6 py-3">
         <h2>Formulir Penambahan Stok Obat</h2>
         <form>
          <div class="flex flex-col">
            <label for="id_obat">Id Obat</label>
            <input type="text" name="id_obat" id="id_obat" class="border-2 border-green-400 rounded-md px-2 py-1 h-50">
          </div>
          <div class="flex flex-col mt-6">
            <label for="nama_obat">Nama Obat</label>
            <input type="text" name="nama_obat" id="nama_obat" class="border-2 border-green-400 rounded-md px-2 py-1 h-50">
          </div>
          <div class="flex flex-col mt-6">
            <label for="fungsi">Fungsi</label>
            <input type="text" name="fungsi" id="fungsi" class="border-2 border-green-400 rounded-md px-2 py-1 h-50">
          </div>
          <div class="flex flex-col mt-6">
            <label for="quantity">Quantity</label>
            <input type="text" name="quantity" id="quantity" class="border-2 border-green-400 rounded-md px-2 py-1 h-50">
          </div>
         </form>
        </div>
      </div>

    </section>
  </main>

<?php
include '../src/layout/Footer.php';
echo "</body>"

?>


