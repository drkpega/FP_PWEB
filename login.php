<?php
 include ('src/components/Head.php');
 include ('koneksi.php');
?>

<main>
  <section class="login">
    <div class="min-w-md flex flex-col items-center px-4 py-2 bg-white rounded-2xl">
      <h1 class="font-bold text-5xl mt-9">Login</h1>
      <form class="min-w-81" action="cek-login.php" method="POST">
        <div class="space-y-3">
          <label>
            <p class="mt-9 text-2xl">Username</p>
          </label>
          <input type="text" class="login-input mt-1" name="username" placeholder="Username / Email" />
        </div>
        <div class="space-y-3">
          <label>
            <p class="mt-9 text-2xl">Password</p>
          </label>
          <input type="password" class="login-input mt-1" name="password" placeholder="Password" />
          <p class="text-end text-sm">Lupa Password?</p>
        </div>
        <!-- Ingat Saya -->
        <div class="flex items-center">
          <input type="checkbox" class="form-checkbox" />
          <label class="text-sm font-bold">Ingat Saya</label>
        </div>
        <!-- Google / SSO -->
        <div class="flex justify-center items-center mt-9 gap-x-9">
          <button class="button-google">
            <img src="/public/assets/images/icons/google.png" alt="Google" width="40" height="40" />
          </button>
          <button class="button-google">
            <img src="/public/assets/images/icons/key.png" alt="Google" width="40" height="40" />
          </button>
        </div>
        <!-- Masuk -->
        <div class="flex justify-center items-center mt-9">
          <button class="button-login text-2xl">Masuk</button>
        </div>
        <div class="mt-3">
          <a class="font-bold" href="/daftar.php">
            <p class="text-center">Buat Akun</p>
          </a>
        </div>
      </form>
    </div>
  </section>
</main>
