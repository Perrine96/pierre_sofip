<?php require_once __DIR__ . '/../templates/partials/__head.php'; ?>
<?php require_once __DIR__ . '/../templates/partials/__nav.php'; ?>

<div class="container my-5 flex-grow-1">

  <h2 class="text-center mb-4">Test de connexion à la base de données</h2>
  <hr>

  <?php
  date_default_timezone_set('Europe/Paris');
  require_once '../config/connexion_db.php';

  try {
      echo '<p class="text-muted">Tentative de connexion à la base de données...</p>';
      
      $connexion = connectdb();

      if ($connexion) {
          echo '<div class="alert alert-success"><strong>Connexion réussie !</strong></div>';
          echo '<p>Connexion établie avec succès à la base de données <strong>pierre_sofip</strong>.</p>';

          try {
              $stmt = $connexion->query("SELECT 1 as test");
              $result = $stmt->fetch();
              if ($result['test'] == 1) {
                  echo '<p class="text-success">✔️ Test de requête réussi.</p>';
              }
          } catch (PDOException $e) {
              echo "<div class='alert alert-warning'>⚠️ Connexion établie mais erreur lors de la requête : " . $e->getMessage() . "</div>";
          }

          echo "<h3 class='mt-4'>Informations de connexion :</h3>";
          echo "<ul class='list-group'>";
          echo "<li class='list-group-item'><strong>Serveur :</strong> localhost</li>";
          echo "<li class='list-group-item'><strong>Base de données :</strong> pierre_sofip</li>";
          echo "<li class='list-group-item'><strong>Utilisateur :</strong> root</li>";
          echo "<li class='list-group-item'><strong>Status :</strong> Connecté</li>";
          echo "</ul>";

      } else {
          echo "<div class='alert alert-danger'><strong>❌ Échec de la connexion</strong></div>";
      }

  } catch (Exception $e) {
      echo "<div class='alert alert-danger'>";
      echo "<strong>❌ Erreur de connexion :</strong><br>";
      echo "Message d'erreur : " . $e->getMessage() . "<br>";
      echo "Code d'erreur : " . $e->getCode();
      echo "</div>";

      echo "<div class='mt-4'>";
      echo "<h3>Vérifications à effectuer :</h3>";
      echo "<ul class='list-group'>";
      echo "<li class='list-group-item'>✓ Le serveur MySQL est-il démarré ?</li>";
      echo "<li class='list-group-item'>✓ La base de données 'pierre_sofip' existe-t-elle ?</li>";
      echo "<li class='list-group-item'>✓ Les identifiants (root/root) sont-ils corrects ?</li>";
      echo "<li class='list-group-item'>✓ Les permissions sont-elles accordées à l'utilisateur ?</li>";
      echo "</ul>";
      echo "</div>";
  }

  echo "<hr>";
  echo "<p class='text-muted'><em>Test effectué le " . date('d/m/Y à H:i:s') . "</em></p>";
  ?>

</div>

<?php require_once __DIR__ . '/../templates/partials/__footer.php'; ?>
<?php require_once __DIR__ . '/../templates/partials/__scripts.php'; ?>
