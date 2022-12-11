<main>
  <section class="grid grid-cols-8 grid-flow-row-dense min-h-screen">
    <div class="col-span-2 bg-secondary-100 py-2">
      <div class="w-full bg-white mt-100 py-2 px-4">
        <div class="flex gap-3 items-center ">
          <img src="/public/assets/images/icons/search.png" alt="" width="30" height="30">
          <p>Search</p>
        </div>
        <form>
        <p class="mt-3">Spesialisasi</p>
        <div class="mt-3">
          <select>
            <option value="jantung">Jantung</option>
            <option value="paru">Paru</option>
            <option value="mata">Mata</option>
            <option value="kulit">Kulit</option>
          </select>
        </div>
        <p class="mt-3">Cabang</p>
        <div class="mt-3">
          <select>
            <option value="surabaya">Surabaya</option>
            <option value="tuban">Tuban</option>
            <option value="jakarta">Jakarta</option>
            <option value="bandung">Bandung</option>
          </select>
        </div>
        <p class="mt-3">Nama Dokter</p>
        <p class="text-sm">Kosongkan jika tidak tau</p>
        <div class="mt-3">
          <input type="text"/>
        </div>
        <div class="flex items-center justify-center">
          <button class="button-green mt-3">Cari Dokter</button>
        </div>
        </form>
      </div>      
    </div>
    <div class="col-span-6 bg-green-primary">
      <div class="container py-2">
        <h2 class="mt-6">
          Daftar Dokter Rumah Sakit Bhayangkara Surabaya
        </h2>

        <div class="flex justify-between ml-5 mt-9">
          <div class="flex items-start gap-3">
            <img src="/public/assets/images/icons/dokter.png" width="72" height="72"></img>
            <div>
              <p class="font-bold">Dr. Bambang Sucipto</p>
              <p>Umum</p>
            </div>
          </div>
          <div>
            <button class="button-secondary">
              Lihat Profile
            </button>
          </div>
        </div>

        <p class="mt-6">Jadwal Praktik</p>
        <table class="mt-9">
          <thead>
            <tr class="bg-secondary h-50">
              <th class="text-center">Hari</th>
              <th class="text-center">Jam Praktik</th>
              <th class="text-center">Daftar</th>
            </tr>
          </thead>
          <tbody>
            <tr class="h-75">
              <td>Senin</td>
              <td>14.00 - 18.00 WIB</td>
              <td><a class="button-green" href="/daftar-dokter">Daftar Konsultasi</a></td>
            </tr>
            <tr class="h-75">
              <td>Selesa</td>
              <td>09.00 - 14.00 WIB</td>
              <td><a class="button-green" href="/daftar-dokter">Daftar Konsultasi</a></td>
            </tr>
            <tr class="h-75">
              <td>Rabu</td>
              <td>09.00 - 14.00 WIB</td>
              <td><a class="button-green" href="/daftar-dokter">Daftar Konsultasi</a></td>
            </tr>
            <tr class="h-75">
              <td>Kamis</td>
              <td>09.00 - 14.00 WIB</td>
              <td><a class="button-green" href="/daftar-dokter">Daftar Konsultasi</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</main>