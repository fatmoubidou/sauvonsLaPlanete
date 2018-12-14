<?php include "view/template/header.php";  ?>

<div class="container">
  <div class="d-flex flex-column justify-content-center align-items-center">
  <div class="w-50 d-flex justify-content-between">
    <h2><?php echo $title; ?></h2>
    <div class="">
      <a <?php setHref("messages"); ?> class="btn btn-primary">Tous les messages reçus</a>
    </div>
  </div>
  <!-- Form message add or edit -->
  <?php include "view/form/messageForm.php"; ?>
</div>
</div>

<?php include "view/template/footer.php"; ?>
