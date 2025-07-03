<?php require_once __DIR__ . '/partials/__head.php'; ?>
<?php require_once __DIR__ . '/partials/__nav.php'; ?>

<h1 class="mb-4 text-center text-primary fw-bold p-3">Ajouter un stagiaire</h1>
<form action="../src/controllers/addStagiairesController.php" method="post" enctype="multipart/form-data" class="container my-5 p-5 rounded shadow-sm bg-light border">
    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom" required class="form-control mb-4">

    <label for="prenom">Prénom</label>
    <input type="text" name="prenom" id="prenom" required class="form-control mb-4">
    
    <label for="age">Age</label>
    <input type="number" name="age" id="age" required class="form-control mb-4">
    
    <label for="date_de_naissance">Date de naissance</label>
    <input type="date" name="date_de_naissance" id="date_de_naissance" required class="form-control mb-4">

    <label for="nom">Email</label>
    <input type="email" name="email" id="email" required class="form-control mb-4">

    <label for="ville">Ville</label>
    <input type="text" name="ville" id="ville" required class="form-control mb-4">
    
    <button type="submit" class="btn btn-primary" id='btn'>Ajouter</button>
</form>







<?php require_once __DIR__ . '/partials/__footer.php'; ?>
<?php require_once __DIR__ . '/partials/__scripts.php'; ?>