<?php 



if (isset($_GET['id'])) {
  $childView = 'src/pages/pembayaran-detail.php';
  include ('src/layout/Layout.php');
}
else {
  $childView = 'src/pages/home-pembayaran.php';
  include ('src/layout/Layout.php');
}

?>