<?php
// Vérifie si le formulaire a été soumis
if(isset($_POST['envoyer'])){
    $dossier = 'upload/'; // Répertoire de destination des fichiers uploadés
    $fichier = basename($_FILES['fichier']['name']); // Nom du fichier uploadé
    // Déplace le fichier temporaire vers le répertoire de destination
    if(move_uploaded_file($_FILES['fichier']['tmp_name'], $dossier . $fichier)){
        echo 'Upload effectué avec succès !';
    }else{
        echo 'Echec de l\'upload !';
    }
}
?>