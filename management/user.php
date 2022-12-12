<?php

include '../src/components/Head.php';

echo "<body>";
include '../src/layout/management/Navbar.php';
?>

<main>
  <section class="grid grid-cols-8 grid-flow-row-dense min-h-screen">
    <div class="col-span-2 bg-green-500">
      <?php
      include '../management/Sidebar.php';
      ?>
    </div>
    <div class="col-span-6 bg-green-primary">
    </div>
  </section>
</main>

<?php
include '../src/layout/Footer.php';
echo "</body>"

?>