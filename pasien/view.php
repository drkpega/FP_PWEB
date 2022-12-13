<?php

include '../src/components/Head.php';

echo "<body>";
include '../src/layout/Navbar.php';
?>
  <main>
    <section class="bg-green-primary">
      <div class="px-4 py-2">
        <div class="bg-white">
          <div class="grid grid-cols-8">
            <div class="col-span-2 px-6 py-3">
              <div class="bg-secondary flex flex-col items-center justify-center h-270 rounded-xl">
                <img src="/public/assets/images/icons/avatar.png"/>
                <p class="font-bold">Seo Ju-Hyun</p>
                <p class="mt-3">Spesialis Anak</p>
              </div>
              <div class="bg-secondary flex flex-col items-center justify-center h-270 rounded-xl mt-6">
                <p class="font-bold">Asuransi</p>
                <p class="mt-3">BPJS : 01234567891001</p>
                <p class="mt-3">AIA  : 4567890987654321</p>
              </div>
            </div>
            <div class="col-span-2 px-6 py-3">
              <div class="bg-secondary flex flex-col justify-center rounded-xl px-4 py-2">
                <img src="../public/assets/images/icons/tensi.png" width="40" height="50"></img>
                <div class="flex gap-3 items-center mt-3 justify-between">
                  <h2>Tensi</h2>
                  <p class="text-xl">110/70</p>
                </div>
              </div>
              <div class="bg-secondary flex flex-col justify-center rounded-xl px-4 py-2 mt-3">
                <img src="../public/assets/images/icons/gula-dara.png" width="50" height="50"></img>
                <div class="flex gap-3 items-center  justify-between mt-3">
                  <h2>Gula Darah</h2>
                  <p class="text-xl">140</p>
                </div>
              </div>
              <div class="bg-secondary flex flex-col justify-center rounded-xl px-4 py-2 mt-6">
                <h2>Riwayat Penyakit</h2>
                <div class="flex gap-3 flex-col  mt-3">
                    <p class="text-2xl">Asma</p>
                    <p class="text-2xl">Anemia</p>
                </div>
              </div>
            </div>
            <div class="col-span-4 px-6 py-3">
              <div class="bg-secondary flex flex-col justify-center rounded-xl px-4 py-2">
                <h2>Reservasi Konsultasi</h2>
                <table>
                  <thead>
                    <tr class="bg-secondary">
                      <th>Nama Rs</th>
                      <th>Poli</th>
                      <th>Nama Dokter</th>
                      <th>Hari/Tanggal</th>
                      <th>Jam</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>RS Bhayangkara Surabaya</td>
                      <td>Umum</td>
                      <td>Dr. Rechel</td>
                      <td>Rabu, 3 Desember 2022</td>
                      <td>14.00</td>
                      <td class="text-red">Hapus</td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
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
