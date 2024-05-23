<?php
$title = "Modifier Formation";
ob_start();
?>
    <form action="index.php?action=update" method="post">
        <div class="form-group">
            <input type="hidden" class="form-control" name="id" value="<?= $formation->id ?>">
        </div>
        <div class="form-group">
            <label for="formationSanitaire">Sélectionnez une formation sanitaire</label>
                <select class="custom-select" name="fomation_sanitaire" id="formationSanitaire" value="<?= $formation->fomation_sanitaire ?>" require>
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
            <input type="number" class="form-control" name="consultation_md_paramd" id="consultation" oninput="updatePoints()"  value="<?= $formation->consultation_md_paramd ?>">
        </div>
        <div class="form-group">
            <label>Points</label>
            <input type="number" class="form-control" name="consultation_md_paramd_Points" readonly  id="consultation_point" value="<?= $formation->consultation_md_paramd_Points ?>">
        </div>
        <div class="form-group">
            <label>Nbre de la population</label>
            <input type="number" class="form-control" name="nbr_population" id="population" oninput="updatePoints()"value="<?= $formation->nbr_population ?>">
        </div>
        <div class="form-group">
            <label>Points</label>
            <input type="number" class="form-control" name="nbr_population_Points" readonly  id="population_point"value="<?= $formation->nbr_population_Points ?>">
        </div>
        <div class="form-group">
            <label>Nbre d'accouchement</label>
            <input type="number" class="form-control" name="nbr_accouchement" id="accouchement" oninput="updatePoints()"value="<?= $formation->nbr_accouchement ?>">
        </div>
        <div class="form-group">
            <label>Points</label>
            <input type="number" class="form-control" name="nbr_accouchement_Points" readonly id="accouchement_point"  value="<?= $formation->nbr_accouchement_Points ?>">
        </div>
        
        <div class="form-group">
            <label>Nombre totales des points</label>
            <input type="text" class="form-control" name="nbr_Points_Total" readonly  id="nbrtotal_point"  value="<?= $formation->nbr_Points_Total ?>">
        </div>
        <div class="form-group">
            <label>% de Crédit</label>
            <input type="number" class="form-control" name="Credit"  value="<?= $formation->Credit ?>">
        </div>
        <div class="form-group">
            <label>Budget </label>
            <input type="number" class="form-control" name="budget"  value="<?= $formation->budget ?>">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary my-2" value="Modifier" name="modifier">
            <a class="btn btn-warning" href="index.php?action=list">Annuler</a>
        </div>
    </form>
    <!-- <script src="script.js"></script> -->
    <script>
        function updatePoints() {
            var consultationValue = parseFloat(document.getElementById("consultation").value) || 0;
            var populationValue = parseFloat(document.getElementById("population").value) || 0;
            var accouchementValue = parseFloat(document.getElementById("accouchement").value) || 0;

            var consultationPoints = consultationValue / 1000;
            var populationPoints = populationValue / 1000;
            var accouchementPoints = accouchementValue / 100;

            document.getElementById("consultation_point").value = consultationPoints.toFixed(3);
            document.getElementById("population_point").value = populationPoints.toFixed(3);
            document.getElementById("accouchement_point").value = accouchementPoints.toFixed(3);

            var totalPoints = consultationPoints + populationPoints + accouchementPoints;
            document.getElementById("nbrtotal_point").value = totalPoints.toFixed(3);
        }
            
    </script>
<?php $content = ob_get_clean(); ?>
<?php include_once 'views/layout.php'; ?>