<?php 



if (isset($_GET['id'])) {
  $childView = 'src/pages/riwayat-detail.php';
  include ('src/layout/Layout.php');
}
else {
  $childView = 'src/pages/home-riwayat.php';
  include ('src/layout/Layout.php');
}

?>