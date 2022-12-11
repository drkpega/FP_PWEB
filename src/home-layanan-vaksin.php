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
          for ($i=0; $i < count($vaksin); $i++) { 
            echo "<div class='flex'>
                    <input type='checkbox' size='40'></input>
                    <label>$vaksin[$i]</label>
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
          <img src="/public/assets/images/icons/orang-vaksin.png">
          <div>
            <h2 class="font-bold">Vaksin COVID 19</h2>
            <p class="">Vaksin COVID-19 merupakan program vaksinasi gratis dari pemerintah. Setelah melakukan vaksin, PeduliLindung Anda akan otomatis ter-update</p>
          </div>
        </div>

        <!-- Test Covid -->
        <div class="grid grid-cols-8 mt-9 grid-flow-row-dense border">
          <div class="bg-blue-300 px-4 py-2 border-r">
            <img src="/public/assets/images/layanan-khusus/vaksin.png" width="200">
          </div>
          <div class="bg-white col-span-7 flex flex-col justify-center px-4">
            <div class="flex justify-between">
              <div>
                <div>
                  <p class="font-bold">
                  Sinovac - Dosis Kedua Vaksin COVID-19
                  </p>
                  <p>Umur 12+</p>
                </div>
                <div class="mt-3">
                  <p class="font-bold">
                  Puskesmas Klampis Ngasem
                  </p>
                  <p>Klampis, Surabaya</p>
                </div>
              </div>
              <div><button class="button-danger">Buat Janji</button></div>
            </div>
          </div>
        </div>
        <div class="grid grid-cols-8 mt-3 grid-flow-row-dense border">
          <div class="bg-blue-300 px-4 py-2 border-r">
            <img src="/public/assets/images/layanan-khusus/vaksin.png" width="200">
          </div>
          <div class="bg-white col-span-7 flex flex-col justify-center px-4">
            <div class="flex justify-between">
              <div>
                <div>
                  <p class="font-bold">
                  Pfizer - Dosis Ketiga Vaksin COVID-19
                  </p>
                  <p>Umur 18+</p>
                </div>
                <div class="mt-3">
                  <p class="font-bold">
                  Halaman Perpustakaan Daerah Tuban
                  </p>
                  <p>Jenu, Tuban</p>
                </div>
              </div>
              <div>
                <button class="button-danger">Buat Janji</button>
              </div>
            </div>
          </div>
        </div>
        <div class="grid grid-cols-8 mt-3 grid-flow-row-dense border">
          <div class="bg-blue-300 px-4 py-2 border-r">
            <img src="/public/assets/images/layanan-khusus/vaksin.png" width="200">
          </div>
          <div class="bg-white col-span-7 flex flex-col justify-center px-4">
            <div class="flex justify-between">
              <div>
                <div>
                  <p class="font-bold">
                  Janssen - Dosis Pertama Vaksin COVID-19
                  </p>
                  <p>Umur 12+</p>
                </div>
                <div class="mt-3">
                  <p class="font-bold">
                  Monas
                  </p>
                  <p>Gambir, Jakarta Pusat</p>
                </div>
              </div>
              <div>
                <button class="button-danger">Buat Janji</button>
              </div>
            </div>
          </div>
        </div>
        <div class="grid grid-cols-8 mt-3 grid-flow-row-dense border">
          <div class="bg-blue-300 px-4 py-2 border-r">
            <img src="/public/assets/images/layanan-khusus/vaksin.png" width="200">
          </div>
          <div class="bg-white col-span-7 flex flex-col justify-center px-4">
            <div class="flex justify-between">
              <div>
                <div>
                  <p class="font-bold">
                  AstraZeneca - Dosis Kedua Vaksin COVID-19
                  </p>
                  <p>Umur 12+</p>
                </div>
                <div class="mt-3">
                  <p class="font-bold">
                  Rs. Unair
                  </p>
                  <p>Klampis, Surabaya</p>
                </div>
              </div>
              <div>
                <button class="button-danger">Buat Janji</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>