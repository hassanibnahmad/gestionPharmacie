<?php
$title = "La liste des Médicaments: ";

//   foreach ($medicaments as $med)
//      echo $title . $med->formation_sanitaire;

    // endforeach; 




ob_start();
?>    
        <a href="index.php?action=createMed" class="btn btn-primary mb-2"> <i class="fa-solid fa-plus"></i></a>
    
        <form action="index.php?action=storemed" method="post" class="row">
                <select class="custom-select mb-4" name="formation_sanitaire" id="formationSanitaire" require  onchange="filterTable(this.value)">
                    <option value="" selected >Tout les Formation</option>
                    <option value="Douar Chems(CSU1)" >Douar Chems (CSU1)</option>
                    <option value="Tassoumaate(CSU1)">Tassoumaate (CSU1)</option>
                    <option value="Sidi Daoud(CSU1)">Sidi Daoud (CSU1)</option>
                    <option value="Ait Kdif(CSU1)">Ait Kdif (CSUformation_sanitaire1)</option>
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
        </form>
    <table class="table  table-hover" >
        <h4 id="selected-formation_sanitaire" ></h4>
        <thead>
        <tr>
            <th>formation Sanitaire</th>
            <th>Id</th>
            <th>Designation </th>
            <th>Conditionnement </th>
            <th>Quantite Livree</th>
            <th>Prix Estimati </th>
            <th>Montant</th>
            
            
        </tr>

        </thead>
        <tbody id="medicaments-table">

        <?php foreach ($medicaments as $med): ?>
            <tr>
                <td><?= $med->formation_sanitaire ?></td>
                <td><?= $med->id ?></td>
                <td><?= $med->ref_med ?></td>
                <td><?= $med->Conditionnement ?></td>
                <td><?= $med->Quantite_Livree ?></td>
                <td><?= $med->Prix_Estimati ?></td>
                <td><?= $med->montant ?></td>
                <td></td>
                <td>
                    <a href="index.php?action=editmed&id=<?php echo $med->id?>" class="btn btn-success btn-sm m-1 "><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="index.php?action=deletemed&id=<?php echo $med->id?>" class="btn btn-danger btn-sm m-1"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>

        
        
        </tbody>
    </table>
    <!-- <h3 id="no-results-message" style="display:none;">Aucun Résultat pour cette formation sanitaire</h3> -->
<?php $content = ob_get_clean(); ?>

<?php include_once 'views/layout.php'; ?>
