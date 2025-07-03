<?php require_once __DIR__ . '/templates/partials/__head.php'; ?>
<?php require_once __DIR__ . '/templates/partials/__nav.php'; ?>


<header class="hero-banner d-flex justify-content-center align-items-center text-white text-center">
  <div class="container">
    <h1 class="mb-4">Bienvenue sur l'espace de gestion des stagiaires</h1>

    <div class="d-flex justify-content-center gap-3 flex-wrap">
        <a href="/pierre_sofip/tests/test_connexion.php" class="btn btn-light">Tester la base de données</a>
        <a href="/pierre_sofip/templates/stagiaires.php" class="btn btn-light">Accéder à la liste des stagiaires</a>
    </div>
  </div>
</header>




<?php require_once __DIR__ . '/templates/partials/__scripts.php'; ?>
<?php require_once __DIR__ . '/templates/partials/__footer.php'; ?>