<?php
$title = "Modifier Médicament";
ob_start();
?>
    <form action="index.php?action=updatemed" method="post" class="row">
    <div class="form-group">
            <input type="hidden" class="form-control" name="id" value="<?= $medicament->id ?>">
        </div>
        <div class="form-group col">
            <label>Reference</label>
            <input type="text" class="form-control" name="ref_med" id="consultation"  value="<?= $medicament->ref_med ?>">
        </div>
        <div class="form-group col">
            <label>Conditionnement</label>
            <input type="text" class="form-control" name="Conditionnement"  value="<?= $medicament->Conditionnement ?>">
        </div>
        <div class="form-group ">
            <label>Prix Estimati</label>
            <input type="number" class="form-control" name="Prix_Estimati" id="Prix_Estimati" oninput="calculeMontant()" value="<?= $medicament->Prix_Estimati ?>">
        </div>
        <div class="form-group ">
            <label>Quantité Livree</label>
            <input type="number" class="form-control" name="Quantite_Livree" id="Quantite_Livree" oninput="calculeMontant()" value="<?= $medicament->Quantite_Livree ?>">
        </div>
        <div class="form-group ">
            <label>Montant</label>
            <input type="number" class="form-control" name="montant" id="montant" readonly value="<?= $medicament->montant ?>">
        </div>
        
        <div class="form-group ">
        <input type="submit" class="btn btn-primary my-2" value="Modifier" name="modifier">
            <a class="btn btn-warning" href="index.php?action=listmed">Annuler</a>
        </div>
    </form>

    <!-- <script src="script.js"></script> -->
    <script>
        function calculeMontant() {
            var Prix_Estimati = parseFloat(document.getElementById("Prix_Estimati").value) || 0;
            var Quantite_Livree = parseFloat(document.getElementById("Quantite_Livree").value) || 0;

            var montant_total = Prix_Estimati * Quantite_Livree ;
            document.getElementById("montant").value = montant_total.toFixed(3);
        }
            
    </script>
<?php $content = ob_get_clean(); ?>
<?php include_once 'views/layout.php'; ?>