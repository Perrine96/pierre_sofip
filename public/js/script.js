function confirmerSuppression(event) {
if (!confirm('Êtes-vous sûr de vouloir supprimer ce produit ?')) {
event.preventDefault(); }
}

console.log('js chargé');