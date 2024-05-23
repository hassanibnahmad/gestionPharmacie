<?php
$title = "Saisir un nouveau Médicament";
ob_start();
?>
    <form action="index.php?action=storemed" method="post" class="row">
        <!-- <select name="" id=""></select> -->
        <div class="form-group  ">
            <label for="formationSanitaire">Sélectionnez une formation sanitaire</label>

            <select class="custom-select" name="formation_sanitaire" id="formationSanitaire" require>
                    <option value="Douar Chems(CSU1)" >Douar Chems (CSU1)</option>
                    <option value="Tassoumaate(CSU1)">Tassoumaate (CSU1)</option>
                    <option value="Sidi Daoud(CSU1)">Sidi Daoud (CSU1)</option>
                    <option value="Ait Kdif(CSU1)">Ait Kdif (CSU1)</option>
                    <option value="Taznakhte(CSU2)">Taznakhte (CSU2)</option>
                    <option value="Tarmighte(CSU2)">Tarmighte (CSR1)</option>
                    <option value="Skoura(CSU2)">Skoura (CSR2)</option>
                    <option value="Idelsane(CSU1)">Idelsane (CSR1)</option>
                    <option value="Amerzgane(CSU1)">Amerzgane (CSR1)</option>
                    <option value="Tidiline(CSU2)">Tidiline (CSR2)</option>
                    <option value="Anzal(CSU1)">Anzal (CSR1)</option>
                    <option value="Tachakouchte(CSU1)">Tachakouchte (CSR1)</option>
                    <option value="Agouime(DR)">Agouime (DR)</option>
                    <option value="Ighrem(CSU2)">Ighrem (CSU2)</option>
                    <option value="Sour(CSU2)">Sour (CSR2)</option>
                    <option value="Asdif (DR)">Asdif (DR)</option>
                    <option value="Taznakhte (CSUA)">Taznakhte (CSUA)</option>
                    <option value="Ghessate (CSR1)">Ghessate (CSR1)</option>
                    <option value="Telouete (CSR2)">Telouete (CSR2)</option>
                    <option value="Amzri (CSR1)">Amzri (CSR1)</option>
                    <option value="Bouramane (CSR2)">Bouramane (CSR2)</option>
                    <option value="Toundoute (CSR2)">Toundoute (CSR2)</option>
                </select>
        </div>    
        <div class="form-group  ">
            <label>Reference</label>
            <input type="text" class="form-control" name="ref_med" id="consultation" >
            <!-- <button class="btn btn-success my-2">selectionner les references:</button> -->
        </div>
        <div class="form-group col">
            <label>Conditionnement</label>
            <input type="text" class="form-control" name="Conditionnement" >
        </div>
        <div class="form-group col ">
            <label>Prix Estimati</label>
            <input 
            disabled
        
            type="number" class="form-control" name="Prix_Estimati" id="Prix_Estimati" oninput="calculeMontant()"  min="1">
        </div>
        <script>
              

        </script>
        <div class="form-group  ">
            <label>Quantité Livree</label>
            <input
            type="number" class="form-control" name="Quantite_Livree" id="Quantite_Livree" oninput="calculeMontant()"  min="1">
        </div>
        <div class="form-group ">
            <label>Montant</label>
            <input type="number" class="form-control" name="montant" id="montant" readonly>
        </div>
         
        <div class="form-group ">
            <input type="submit" class="btn btn-success my-2" value="Ajouter" name="ajouter">
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