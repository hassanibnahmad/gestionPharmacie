<?php
$title = "Repartition du Budget 2024";

ob_start();
?>
    <a href="index.php?action=create" class="btn btn-primary mb-2"><i class="fa-solid fa-plus"></i></a>
    <table class="table table-hover table-responsive">
        <thead>
        <tr>
            <!-- <th>Id</th> -->
            <th>Formation Sanitaire</th>
            <th>Consultation medicales et paramédicales</th>
            <th>Points</th>
            <th>Nbre de la population</th>
            <th>Points</th>
            <th>Nbre d'accouchement</th>
            <th>Points</th>
            <th>Nombre totales des points</th>
            <th>% de Crédit</th>
            <th>Budget</th>
            <th>            </th>

        </tr>

        </thead>
        <tbody>

        <?php foreach ($formations as $formation): ?>
            <tr>
                <!-- <td><?= $formation->id ?></td> -->
                <td><?= $formation->fomation_sanitaire ?></td>
                <td><?= $formation->consultation_md_paramd ?></td>
                <td><?= $formation->consultation_md_paramd_Points ?></td>
                <td><?= $formation->nbr_population ?></td>
                <td><?= $formation->nbr_population_Points ?></td>
                <td><?= $formation->nbr_accouchement ?></td>
                <td><?= $formation->nbr_accouchement_Points ?></td>
                <td><?= $formation->nbr_Points_Total ?></td>
                <td><?= $formation->Credit ?></td>
                <td><?= $formation->budget ?></td>
                <td>
                    <a href="index.php?action=edit&id=<?php echo $formation->id?>" class="btn btn-success btn-sm m-1 "><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="index.php?action=delete&id=<?php echo $formation->id?>" class="btn btn-danger btn-sm m-1"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach;

        foreach ($total_C as $t): ?>
            <tr>
                
                <th>Total</th>
                <th><?= $t->consultation_md_paramd ?></th>
                <th><?= $t->consultation_md_paramd_Points ?></th>
                <th><?= $t->nbr_population ?></th>
                <th><?= $t->nbr_population_Points ?></th>
                <th><?= $t->nbr_accouchement ?></th>
                <th><?= $t->nbr_accouchement_Points ?></th>
                <th><?= $t->nbr_Points_Total ?></th>
                <th><?= $t->Credit ?></th>
                <th><?= $t->budget ?></th>
                <th>----------</th>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
<?php $content = ob_get_clean(); ?>
<?php include_once 'views/layout.php'; ?>