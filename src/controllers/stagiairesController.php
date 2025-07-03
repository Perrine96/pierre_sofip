<?php 
require_once __DIR__ . '/../../config/connexion_db.php';

$con = connectdb();

$req = 'SELECT * FROM stagiaires';
$response = $con->query($req);
$lignes = $response->fetchAll();

?>