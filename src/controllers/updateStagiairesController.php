<?php
require_once __DIR__ . '/../../config/connexion_db.php';

$con = connectdb();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = (int) $_POST['id'];
    $nom = strip_tags($_POST['nom']);
    $prenom = strip_tags($_POST['prenom']);
    $age = (int) $_POST['age'];
    $date_de_naissance = $_POST['date_de_naissance'];
    $email = strip_tags($_POST['email']);
    $ville = strip_tags($_POST['ville']);

    $req = $con->prepare("UPDATE stagiaires SET nom = ?, prenom = ?, age = ?, date_de_naissance = ?, email = ?, ville = ? WHERE id = ?");
    $req->execute([$nom, $prenom, $age, $date_de_naissance, $email, $ville, $id]);

    header('Location: ../../templates/stagiaires.php');
    exit;
} else {
    echo "Erreur : données incomplètes ou requête invalide.";
}
