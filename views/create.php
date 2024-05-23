<?php
$title = "Repartition du Budget 2024";
ob_start();
?>
    <form action="index.php?action=store" method="post">
        <!-- <div class="input-group mb-3"> -->
        <div class="form-group">
            <label for="formationSanitaire">Sélectionnez une formation sanitaire</label>
                <select class="custom-select" name="fomation_sanitaire" id="formationSanitaire" require>
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
                    <option value="Igrem(CSU2)">Igrem (CSU2)</option>
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
            <!-- <input type="text" class="form-control" name="fomation_sanitaire"> -->
            <!-- </div> -->
        
        <div class="form-group">
            <label>Consultation medicales et paramédicales</label>
            <input type="number" class="form-control" name="consultation_md_paramd" id="consultation" oninput="updatePoints()" min="0">
        </div>
        <div class="form-group">        
            <label>Points</label>
            <input type="number" class="form-control" name="consultation_md_paramd_Points" readonly  id="consultation_point" min="0" >
        </div>
        <div class="form-group">
            <label>Nbre de la population</label>
            <input type="number" class="form-control" name="nbr_population" id="population" oninput="updatePoints()" min="0">
        </div>
        <div class="form-group">
            <label>Points</label>
            <input type="number" class="form-control" name="nbr_population_Points" readonly  id="population_point" min="0">
        </div>
        <div class="form-group">
            <label>Nbre d'accouchement</label>
            <input type="number" class="form-control" name="nbr_accouchement" id="accouchement" oninput="updatePoints()" min="0">
        </div>
        <div class="form-group">
            <label>Points</label>
            <input type="number" class="form-control" name="nbr_accouchement_Points" readonly id="accouchement_point"  min="0">
        </div>
        
        <div class="form-group">
            <label>Nombre totales des points</label>
            <input type="text" class="form-control" name="nbr_Points_Total" readonly  id="nbrtotal_point" min="0">
        </div>
        <div class="form-group">
            <label>% de Crédit</label>
            <input type="number" class="form-control" name="Credit" min="0">
        </div>
        <div class="form-group">
            <label>Budget </label>
            <input type="number" class="form-control" name="budget" min="0">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success my-2" value="Ajouter" name="ajouter">
            <a class="btn btn-warning" href="index.php?action=list">Annuler</a>
        </div>
    </form>

    <!-- <script src="script.js"></script> -->
   
<?php $content = ob_get_clean(); ?>
<?php include_once 'views/layout.php'; ?>