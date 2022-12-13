<?php

include '../src/components/Head.php';

echo "<body>";
include '../src/layout/Navbar.php';
?>
  <main>
    <section class="bg-green-primary">
      <div class="px-4 py-2">
        <div class="bg-white container">
          <div class="grid grid-cols-8">
            <div class="col-span-2">
              <div class="rounded-full flex flex-col items-center justify-center mt-100">
                <img src="/public/assets/images/icons/avatar.png" height="160" width="160"/>
                <p>Edit</p>
              </div>
            </div>
            <div class="col-span-6">
              <form class="">
                <h2 class="text-center">
                  Edit Profile
                </h2>
      
                <div class="mt-9 flex flex-col">
                  <label>Nama</label>
                  <input>
                </div>
                <div class="mt-3 flex flex-col">
                  <label>Tanggal Lahir</label>
                  <input>
                </div>
                <div class="mt-3 flex flex-col">
                  <label>Alamat</label>
                  <input>
                </div>
                <div class="mt-3 flex flex-col">
                  <label>Email</label>
                  <input type="email" placeholder="Email">
                </div>
                <div class="mt-3 flex flex-col">
                  <label>No. Handphone</label>
                  <input type="text" placeholder="No Handphone">
                </div>
                <div class="mt-3 flex flex-col">
                  <label>Jenis Kelamin</label>
                  <input  placeholder="Jenis Kelamin">
                </div>
                <div class="mt-3 flex flex-col">
                  <label>Asuransi yang dimiliki</label>
                  <input>
                </div>
                <div class="mt-3 flex flex-col">
                  <label>Riwayat Penyakit</label>
                  <input>
                </div>
      
                <div class="flex justify-end">
                  <button class="button-outline mt-9">Simpan</button>
                </div>
              </form>
            </div>
          </div>
          <!-- Section 2 -->
        </div>
      </div>
    </section>
  </main>
<?php
include '../src/layout/Footer.php';
echo "</body>"

?>
