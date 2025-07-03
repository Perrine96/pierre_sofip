<?php
require_once __DIR__ . '/../../config/connexion_db.php';

$con = connectdb();

if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST['id'])) {
    $id = (int) $_POST['id'];

    $req = $con->prepare("SELECT * FROM stagiaires WHERE id = ?");
    $req->execute([$id]);
    $stagiaire = $req->fetch();

    if ($stagiaire) {
        $req = $con->prepare("DELETE FROM stagiaires WHERE id = ?");
        $req->execute([$id]);

        header("Location: ../../templates/stagiaires.php");
        exit;
    } else {
        echo "Erreur : le stagiaire n'existe pas.";
    }
}
