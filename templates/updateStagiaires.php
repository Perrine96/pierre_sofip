<?php
require_once __DIR__ . '/../config/connexion_db.php';
require_once __DIR__ . '/partials/__head.php';
require_once __DIR__ . '/partials/__nav.php';

$con = connectdb();
$data = null;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $idStagiaire = (int) $_POST['id'];
    $result = $con->query("SELECT * FROM stagiaires WHERE id = $idStagiaire");
    $data = $result->fetch();
}
?>

<div class="container mt-4">
    <h1 class="text-center text-primary">Modifier les informations du stagiaire</h1>

    <?php if ($data): ?>
        <form action="../src/controllers/updateStagiairesController.php" method="post">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($data['id']); ?>">

            <label class="form-label mt-3" for="nom">Nom</label>
            <input class="form-control" type="text" name="nom" id="nom" value="<?php echo htmlspecialchars($data['nom']); ?>" required>

            <label class="form-label mt-3" for="prenom">Prénom</label>
            <input class="form-control" type="text" name="prenom" id="prenom" value="<?php echo htmlspecialchars($data['prenom']); ?>" required>

            <label class="form-label mt-3" for="age">Âge</label>
            <input class="form-control" type="number" name="age" id="age" value="<?php echo htmlspecialchars($data['age']); ?>" required>

            <label class="form-label mt-3" for="date_de_naissance">Date de naissance</label>
            <input class="form-control" type="date" name="date_de_naissance" id="date_de_naissance" value="<?php echo htmlspecialchars($data['date_de_naissance']); ?>" required>

            <label class="form-label mt-3" for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" value="<?php echo htmlspecialchars($data['email']); ?>" required>

            <label class="form-label mt-3" for="ville">Ville</label>
            <input class="form-control" type="text" name="ville" id="ville" value="<?php echo htmlspecialchars($data['ville']); ?>" required>

            <input type="submit" class="btn btn-success my-4" value="Mettre à jour">
        </form>
    <?php else: ?>
        <div class="alert alert-warning mt-4">Aucun stagiaire sélectionné pour la modification.</div>
    <?php endif; ?>

    <div>
        <a href="./stagiaires.php" class="btn btn-outline-primary">Retour à la liste</a>
    </div>
</div>

<?php require_once __DIR__ . '/partials/__footer.php'; ?>
<?php require_once __DIR__ . '/partials/__scripts.php'; ?>
