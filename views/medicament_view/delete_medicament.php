<?php

$title = "Supprimer le medicament";
ob_start();
?>
<p>Voulez vous vraiment supprimer ce medicament ?</p>
    <a class="btn btn-danger" href="index.php?action=destroymed&id=<?php echo $id?>">Valider la suppression</a>
    <a class="btn btn-warning" href="index.php?action=listmed">Annuler la suppression</a>
<?php
$content = ob_get_clean();
include_once 'views/layout.php';