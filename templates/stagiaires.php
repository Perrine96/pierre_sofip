<?php 
require_once __DIR__ . '/../src/controllers/stagiairesController.php';
require_once __DIR__ . '/partials/__head.php';
require_once __DIR__ . '/partials/__nav.php';
?>

<div class="container mt-4 flex-grow-1">
    <h1 class="text-center mb-4 p-3">Stagiaires</h1>
    <table class="table border table-striped"> 
        <thead>
            <tr>
                <th class="border text-center">Nom</th> 
                <th class="border text-center">Prénom</th> 
                <th class="border text-center">Age</th>
                <th class="border text-center">Date de naissance</th>
                <th class="border text-center">Email</th>
                <th class="border text-center">Ville</th>
            </tr> 
        </thead>
        <tbody> 
        <?php
            if (isset($lignes) && is_array($lignes)) {
                foreach ($lignes as $ligne) { 
                    echo '<tr>
                        <td class="border align-middle text-center">' . htmlspecialchars($ligne['nom']) . '</td> 
                        <td class="border align-middle text-center">' . htmlspecialchars($ligne['prenom']) . '</td> 
                        <td class="border align-middle text-center">' . htmlspecialchars($ligne['age']) . '</td>
                        <td class="border align-middle text-center">' . htmlspecialchars($ligne['date_de_naissance']) . '</td>
                        <td class="border align-middle text-center">' . htmlspecialchars($ligne['email']) . '</td>
                        <td class="border align-middle text-center">' . htmlspecialchars($ligne['ville']) . '</td>

                        <td class="border align-middle text-center">
                            <form action="updateStagiaires.php" method="post">
                            <input type="hidden" name="id" value="' . $ligne['id'] . '">
                            <input class="btn btn-outline-success my-1" type="submit" value="Modifier">
                            </form>
                            <form action="../src/controllers/deleteStagiairesController.php" method="post" onsubmit="confirmerSuppression(event)">
                            <input type="hidden" name="id" value="' . $ligne['id'] . '">
                            <input class="btn btn-outline-danger my-1" type="submit" value="Supprimer">
                            </form>
                        </td>
                    </tr>';
                }
            }
        ?>
        </tbody> 
    </table>
    <div class="my-4">
        <a href="addStagiaires.php"><button class="btn btn-outline-primary mx-1">Ajouter</button></a> 
    </div>
</div>


<?php require_once __DIR__ . '/partials/__scripts.php'; ?>
<?php require_once __DIR__ . '/partials/__footer.php'; ?>