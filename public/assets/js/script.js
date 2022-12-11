const button = document.getElementById('daftar');

// Hiden verifikasi-page
document.getElementById('verifikasi').style.display = 'none';
document.getElementById('biodata').style.display = 'none';

button.addEventListener('click', function () {
  // Hide daftar-page
  document.getElementById('daftar-page').style.display = 'none';
  // Show verifikasi-page
  document.getElementById('verifikasi').style.display = 'flex';
});

const button_verifikasi = document.getElementById('daftar-verifikasi');

button_verifikasi.addEventListener('click', function () {
  // Hide verifikasi-page
  document.getElementById('verifikasi').style.display = 'none';
  // Show daftar-page
  document.getElementById('biodata').style.display = 'flex';
});
