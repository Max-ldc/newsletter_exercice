<?php
// LAYOUT - HEADER
$title = "Inscrivez vous à la newsletter";
require_once 'layout/header.php';
require_once 'classes/NewsletterError.php';

if (isset($_GET['error'])) { ?>
  <div class="error">
    Une erreur est survenue : <?php echo NewslettorError::getErrorMessage(intval($_GET['error'])); ?>
  </div>
<?php } ?>

<!-- CONTENT -->
<form action="register.php" method="post" class="d-flex flex-column w-25 mx-auto mt-3">
  <label for="email">E-mail</label>
  <input type="email" name="email" id="email" class="mb-2">
  <button type="submit" name="" class="btn btn-info">Enregistrer</button>
</form>
<!-- CONTENT -->

<?php
// LAYOUT - FOOTER
require_once 'layout/footer.php';