<?php
 include ('src/components/Head.php')
?>

<main>
  <section class="login" id="daftar-page">
    <div class="min-w-md flex flex-col items-center px-4 py-2 bg-white rounded-2xl">
      <h1 class="font-bold text-5xl mt-9">Daftar</h1>
      <p class="text-xl font-bold mt-3">Sudah punya akun? <a class="text-green-200 underline cursor-pointer" href="/login.php">Masuk</a> </p>
      
      <div class="button relative mt-9 min-w-81">
        <img src="/public/assets/images/icons/google.png" class="absolute left-4" alt="Google" width="40" height="40" />
        <p>Google</p>
      </div>
      
      <form class="min-w-81">
        <div class="space-y-3">
          <label>
            <p class="mt-9 text-2xl">Phone Number or Email</p>
          </label>
          <input type="text" class="login-input mt-1" placeholder="Phone Number or Email" />
          <p class="text-sm">Example : email@gmail.com</p>
        </div>
        <!-- Masuk -->
      </form>
      <div class="flex justify-center items-center mt-9">
        <button class="button-login text-2xl" id="daftar" name="daftar">Daftar</button>
      </div>
    </div>
  </section>
  <section class="login" id="verifikasi">
    <div class="min-w-md flex flex-col items-center px-4 py-2 bg-white rounded-2xl">
      <h1 class="font-bold text-3xl mt-9">Pilih Metode Verifikasi</h1>
      <p class="text-xl mt-3 text-center">Pilih salah satu metode dibawah ini untuk<br /> mendapatkan kode verifikasi. </p>
      
      <div class="min-w-81 rounded-xl border border-2 relative h-50 text-center px-4 py-2 mt-9 shadow-2xl">
        <img src="/public/assets/images/icons/email.png" class="absolute left-1" width="50" height="50"></img>
        <p>Email Ke</p>
        <p>lalalala152555@gmail.com</p>
      </div>
      <div class="min-w-81 rounded-xl border border-2 relative h-50 text-center px-4 py-2 mt-9 shadow-2xl">
        <img src="/public/assets/images/icons/wa.png" class="absolute left-1" width="50" height="50"></img>
        <p>WhatsApp Ke</p>
        <p>0895555555555</p>
      </div>
      <div class="min-w-81 rounded-xl border border-2 relative h-50 text-center px-4 py-2 mt-9 shadow-2xl">
        <img src="/public/assets/images/icons/sms.png" class="absolute left-1" width="50" height="50"></img>
        <p>Email Ke</p>
        <p>l0895555555555</p>
      </div>
      <div class="flex justify-center items-center mt-9">
        <button class="button-login text-2xl" id="daftar-verifikasi">Daftar</button>
      </div>
    </div>
  </section>
  <section class="login" id="biodata" hidden>
    <div class="min-w-md flex flex-col items-center px-4 py-2 bg-white rounded-2xl">
      <h1 class="font-bold text-3xl mt-9">Daftar</h1>
      <p class="text-xl mt-3 text-center">Pilih salah satu metode dibawah ini untuk<br /> mendapatkan kode verifikasi. </p>
      
      <form class="min-w-81">
        <div class="space-y-3">
          <label>
            <p class="mt-3 text-xl">Nama Lengkap*</p>
          </label>
          <input type="text" class="login-input mt-1" placeholder="Nama" />
        </div>
        <div class="space-y-3">
          <label>
            <p class="mt-3 text-xl">Username*</p>
          </label>
          <input type="text" class="login-input mt-1" placeholder="Username" />
        </div>
        <div class="space-y-3">
          <label>
            <p class="mt-3 text-xl">Password*</p>
          </label>
          <input type="text" class="login-input mt-1" placeholder="Password" />
        </div>
        <div class="flex items-center mt-3">
          <input type="checkbox" class="form-checkbox" />
          <label class="text-sm font-bold underline">I agree to <span class="text-blue-500">the Terms and Conditions.</span></label>
        </div>
        <!-- Masuk -->
      </form>
      <div class="flex justify-center items-center mt-9">
        <button class="button-login text-2xl" id="daftar" name="daftar">Daftar</button>
      </div>
    </div>
  </section>
</main>

<script src="/public/assets/js/script.js"></script>