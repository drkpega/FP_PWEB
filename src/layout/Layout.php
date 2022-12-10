<?php
include 'src/components/Head.php';
echo "<body>";
// Navbar Pasien Login
if ($page == "pasien" && $login == true) {
  include 'src/layout/pasien/Navbar.php';
}else {
  // Navbar Umum
  include 'src/layout/Navbar.php';
}
include ($childView);
include 'src/layout/Footer.php';
echo "</body>";



?>
