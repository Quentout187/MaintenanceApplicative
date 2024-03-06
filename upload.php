<?php
    if(isset($_POST['envoyer'])){
        $dossier = 'upload/';
        $fichier = basename($_FILES['fichier']['name']);
        $typeFichier = $_FILES['fichier']['type'];
        
        // Vérifier si le fichier est une image
        $extensionsAutorisees = array('image/jpeg', 'image/png', 'image/gif');
        if(in_array($typeFichier, $extensionsAutorisees)){
            if(move_uploaded_file($_FILES['fichier']['tmp_name'], $dossier . $fichier)){
                echo 'Upload effectué avec succès !';
            }else{
                echo 'Echec de l\'upload !';
            }
        }else{
            echo 'Seuls les fichiers images sont autorisés !';
        }
    }
?>