<?php
require_once 'libs/functions.php';
$pets = get_pets();
?>
<?php
require_once 'layout/header.php';
?>
<h1>Helping you find your new best friend from over <?php echo count($pets); ?> pets</h1>
<?php
require_once 'layout/footer.php';
?>