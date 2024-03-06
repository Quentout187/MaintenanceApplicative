<?php
if(isset($_POST['envoyer'])){
    $dossier = 'upload/';
    $fichier = basename($_FILES['fichier']['name']);
    if(move_uploaded_file($_FILES['fichier']['tmp_name'], $dossier . $fichier)){
        echo 'Upload effectué avec succès !';
    }else{
        echo 'Echec de l\'upload !';
    }
}
?>