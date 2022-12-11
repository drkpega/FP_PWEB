<main>
  <section class="grid grid-cols-8 grid-flow-row-dense min-h-screen pb-5">
    <div class="col-span-2 bg-secondary-100 px-4 py-2">
      <div class="flex items-center mt-3">
        <img src="/public/assets/images/icons/filter.png" alt="" width="50" height="50">
        <h2>Jenis Vaksin</h2>
      </div>
      <div class="mt-9">
        <div class="flex">
          <input type="checkbox" size="40"></input>
          <label class="font-bold">Semua</label>
        </div>
        <?php
          for ($i=0; $i < count($terapi); $i++) { 
            echo "<div class='flex'>
                    <input type='checkbox' size='40'></input>
                    <label>$terapi[$i]</label>
                  </div>";
          }
        ?>
      </div>
      <div class="flex items-center mt-3">
        <img src="/public/assets/images/icons/lokasi.png" alt="" width="50" height="50">
        <h2>Lokasi</h2>
      </div>
      <div class="mt-3">
        <div class="flex">
          <input type="checkbox" size="40"></input>
          <label>Semua</label>
        </div>
        <div class="flex">
          <input type="checkbox" size="40"></input>
          <label>Ubah Lokasi</label>
        </div>
      </div>
      <h3 class="mt-3 font-bold">Provinsi</h3>
      <div class="mt-3">
        <div class="flex">
          <input type="radio" size="40"></input>
          <label>Jawa Barat</label>
        </div>
        <div class="flex">
          <input type="radio" size="40"></input>
          <label>Jawa Tengah</label>
        </div>
        <div class="flex">
          <input type="radio" size="40"></input>
          <label>Jawa Timur</label>
        </div>
        <div class="flex">
          <input type="radio" size="40"></input>
          <label>Bali</label>
        </div>
        <div class="flex">
          <input type="radio" size="40"></input>
          <label>Sulawesi</label>
        </div>
        <div class="flex">
          <input type="radio" size="40"></input>
          <label>Kalimantan Timur</label>
        </div>
        <div class="flex">
          <input type="radio" size="40"></input>
          <label>Maluku</label>
        </div>
        <div class="flex">
          <input type="radio" size="40"></input>
          <label>Gorontalo</label>
        </div>
      </div>
      <h3 class="mt-3 font-bold">Kabupatern/Kota</h3>
      <div class="mt-3">
        <div class="flex">
          <input type="radio" size="40"></input>
          <label>Kota Surabaya</label>
        </div>
        <div class="flex">
          <input type="radio" size="40"></input>
          <label>Kota Denpasar</label>
        </div>
        <div class="flex">
          <input type="radio" size="40"></input>
          <label>Kota Malang</label>
        </div>
        <div class="flex">
          <input type="radio" size="40"></input>
          <label>Kota Madiun</label>
        </div>
        <div class="flex">
          <input type="radio" size="40"></input>
          <label>Kota Batu</label>
        </div>
        <div class="flex">
          <input type="radio" size="40"></input>
          <label>Kota Bandung</label>
        </div>
        <div class="flex">
          <input type="radio" size="40"></input>
          <label>Kota Bogor</label>
        </div>
      </div>
    </div>
    <div class="col-span-6 bg-green-primary">
      <div class="container py-2">
        <div class="mt-9 flex items-center">
          <img src="/public/assets/images/icons/terapi.png">
          <div>
            <h2 class="font-bold">Terapi</h2>
            <p class="">Usaha untuk memulihkan kesehatan baik dengan stimulasi musik, bahan kimia, dan lain-lain</p>
          </div>
        </div>

        <!-- Test Covid -->
        <div class="grid grid-cols-8 mt-9 grid-flow-row-dense border">
          <div class="bg-blue-300 px-4 py-2 border-r">
            <img src="/public/assets/images/layanan-khusus/terapi.png" width="200">
          </div>
          <div class="bg-white col-span-7 flex flex-col justify-center px-4">
            <div class="flex justify-between">
              <div>
                <div>
                  <p class="font-bold">
                  Terapi Rehabilitasi Medis untuk Pengidap Stroke
                  </p>
                  <p>120 menit</p>
                </div>
                <div class="mt-3">
                  <p class="font-bold">
                  Rs. Bhayangkara Surabaya
                  </p>
                  <p>Klampis, Surabaya</p>
                </div>
              </div>
              <div>
                <p>Rp 240.000</p>
                <button class="button-danger">Buat Janji</button>
              </div>
            </div>
          </div>
        </div>
        <div class="grid grid-cols-8 mt-3 grid-flow-row-dense border">
          <div class="bg-blue-300 px-4 py-2 border-r">
            <img src="/public/assets/images/layanan-khusus/terapi.png" width="200">
          </div>
          <div class="bg-white col-span-7 flex flex-col justify-center px-4">
            <div class="flex justify-between">
              <div>
                <div>
                  <p class="font-bold">
                  Terapi Rehabilitasi Medis untuk Pengidap Jantung
                  </p>
                  <p>160 menit</p>
                </div>
                <div class="mt-3">
                  <p class="font-bold">
                  Rs. Bhayangkara Surabaya
                  </p>
                  <p>Klampis, Surabayan</p>
                </div>
              </div>
              <div>
                <p>Rp 340.000</p>
                <button class="button-danger">Buat Janji</button>
              </div>
            </div>
          </div>
        </div>
        <div class="grid grid-cols-8 mt-3 grid-flow-row-dense border">
          <div class="bg-blue-300 px-4 py-2 border-r">
            <img src="/public/assets/images/layanan-khusus/terapi.png" width="200">
          </div>
          <div class="bg-white col-span-7 flex flex-col justify-center px-4">
            <div class="flex justify-between">
              <div>
                <div>
                  <p class="font-bold">
                  Terapi Rehabilitasi Medis untuk Pengidap Jantung
                  </p>
                  <p>90 menit</p>
                </div>
                <div class="mt-3">
                  <p class="font-bold">
                  Rs. Bhayangkara Surabaya
                  </p>
                  <p>Klampis, Surabaya</p>
                </div>
              </div>
              <div>
                <p>Rp 140.000</p>
                <button class="button-danger">Buat Janji</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>