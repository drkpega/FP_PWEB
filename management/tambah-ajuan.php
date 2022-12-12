<?php

include '../src/components/Head.php';

echo "<body>";
include '../src/layout/management/Navbar.php';
?>
  <main>
    <section class="bg-green-primary">
      <div class="container">
        <div class="bg-white mt-3 flex flex-col justify-between px-6 py-3">
         <h2>Formulir Pendaftaran</h2>
         <form>
          <div class="grid grid-cols-2 gap-6">
            <div>
              <div class="flex flex-col">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="border-2 border-green-400 rounded-md px-2 py-1 h-25">
              </div>
              <div class="flex flex-col mt-3">
                <label for="tempat-lahir">Tempat Lahir</label>
                <input type="text" name="tempat-lahir" id="tempat-lahir" class="border-2 border-green-400 rounded-md px-2 py-1 h-25">
              </div>
              <div class="flex flex-col mt-3">
                <label for="alamat">Alamaat</label>
                <textarea type="text" name="alamat" id="alamat" class="border-2 border-green-400 rounded-md px-2 py-1 h-100"></textarea>
              </div>
              <div class="flex flex-col mt-3">
                <label for="email">E-mail</label>
                <input type="text" name="email" id="email" class="border-2 border-green-400 rounded-md px-2 py-1 h-25">
              </div>
            </div>
            <div>  
              <div class="flex flex-col">
                <label for="gender">Jenis Kelamin</label>
                <input type="text" name="gender" id="gender" class="border-2 border-green-400 rounded-md px-2 py-1 h-25">
              </div>
              <div class="flex flex-col mt-3">
                <label for="tanggal-lahir">Tanggal Lahir</label>
                <input type="text" name="tanggal-lahir" id="tanggal-lahir" class="border-2 border-green-400 rounded-md px-2 py-1 h-25">
              </div>
              <div class="flex flex-col mt-3">
                <label for="no-hp">No Heandphone</label>
                <textarea type="text" name="no-hp" id="no-hp" class="border-2 border-green-400 rounded-md px-2 py-1 h-100"></textarea>
              </div>
              <div class="flex flex-col mt-3">
                <label for="no-asuransi">No Asuransi</label>
                <input type="text" name="no-asuransi" id="no-asuransi" class="border-2 border-green-400 rounded-md px-2 py-1 h-25">
              </div>
            </div>
          </div>
          <div class="flex flex-col mt-3">
            <label for="asuransi">Asuransi yang dimiliki</label>
            <input type="text" name="asuransi" id="asuransi" class="border-2 border-green-400 rounded-md px-2 py-1 h-25">
          </div>
          <div class="flex flex-col mt-3">
            <label for="layanan">Layanan</label>
            <input type="text" name="layanan" id="layanan" class="border-2 border-green-400 rounded-md px-2 py-1 h-25">
          </div>
          <div class="flex flex-col mt-3">
            <label for="alergi-obat">Alergi Obat</label>
            <input type="text" name="alergi-obat" id="alergi-obat" class="border-2 border-green-400 rounded-md px-2 py-1 h-25">
          </div>
          <div class="flex flex-col mt-3">
            <label for="riwayar">Riwayat Penyakit</label>
            <input type="text" name="riwayar" id="riwayar" class="border-2 border-green-400 rounded-md px-2 py-1 h-25">
          </div>
          <div class="flex flex-col mt-3">
            <label for="keluhan">Keluhan</label>
            <input type="text" name="keluhan" id="keluhan" class="border-2 border-green-400 rounded-md px-2 py-1 h-25">
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


