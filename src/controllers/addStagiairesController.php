<?php
require_once __DIR__ . '/../../config/connexion_db.php';

$con = connectdb();

if (
    isset($_POST['nom']) &&
    isset($_POST['prenom']) &&
    isset($_POST['age']) &&
    isset($_POST['date_de_naissance']) &&
    isset($_POST['email']) &&
    isset($_POST['ville'])
) {
    // Sécurisation des données (prévention XSS)
    $nom = strip_tags($_POST['nom']);
    $prenom = strip_tags($_POST['prenom']);
    $age = (int) $_POST['age']; 
    $dateNaissance = strip_tags($_POST['date_de_naissance']);
    $email = strip_tags($_POST['email']);
    $ville = strip_tags($_POST['ville']);

    $req = $con->prepare("INSERT INTO stagiaires (nom, prenom, age, date_de_naissance, email, ville) 
    VALUES (?, ?, ?, ?, ?, ?)");

    $req->execute([$nom, $prenom, $age, $dateNaissance, $email, $ville]);

    header('Location: ../../templates/stagiaires.php');
    exit;

}
?>
