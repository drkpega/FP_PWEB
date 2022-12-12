<?php

include '../src/components/Head.php';

echo "<body>";
include '../src/layout/dokter/Navbar.php';
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
                <p class="font-bold">Seo Ju-Hyun</p>
                <p class="mt-3">Kedokteran Umum </br>Fak. Kedokteran UGM 2014</p>
                <p class="mt-3">Spesialis Anak </br>Fak. Kedokteran UGM 2018</p>
              </div>
            </div>
            <div class="col-span-4 px-6 py-3">
              <div class="bg-secondary flex flex-col justify-center rounded-xl px-4 py-2">
                <h2>Jadwal Praktik</h2>
                <table>
                  <thead>
                    <tr class="bg-secondary">
                      <th>Nama Rs</th>
                      <th>Poli</th>
                      <th>Hari</th>
                      <th>Hari</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>RS Bhayangkara Surabaya</td>
                      <td>Anak</td>
                      <td>Senin</td>
                      <td>08.00 - 12.00</td>
                    </tr>
                    <tr>
                      <td>RS Bhayangkara Surabaya</td>
                      <td>Anak</td>
                      <td>Senin</td>
                      <td>08.00 - 12.00</td>
                    </tr>
                    <tr>
                      <td>RS Bhayangkara Surabaya</td>
                      <td>Anak</td>
                      <td>Senin</td>
                      <td>08.00 - 12.00</td>
                    </tr>
                    <tr>
                      <td>RS Bhayangkara Surabaya</td>
                      <td>Anak</td>
                      <td>Senin</td>
                      <td>08.00 - 12.00</td>
                    </tr>
                    <tr>
                      <td>RS Bhayangkara Surabaya</td>
                      <td>Anak</td>
                      <td>Senin</td>
                      <td>08.00 - 12.00</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-span-2 px-6 py-3">
              <div class="bg-secondary flex flex-col justify-center rounded-xl px-4 py-2">
                <h2>Today’s Appointments</h2>
                <div class="flex gap-3 items-center mt-3">
                  <img src="../public/assets/images/icons/first-aid.png"></img>
                  <p class="text-xl">17</p>
                </div>
              </div>
              <div class="bg-secondary flex flex-col justify-center rounded-xl px-4 py-2 mt-6">
                <h2>Performance Indicator</h2>
                <div class="flex gap-3 items-center mt-3">
                  <img src="../public/assets/images/dokter/table.png" width="100%" height="100%"/>
                </div>
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
