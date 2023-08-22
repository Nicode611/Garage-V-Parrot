<!-- Formulaire pour l'ajout d'un service (voir chatGPT) -->

<?php
if (isset($_FILES['image']) && isset($_POST['titre']) && isset($_POST['texte'])) {
    // Récupérer les données du formulaire
    $titre = $_POST['titre'];
    $texte = $_POST['texte'];

    // Vérifier si un fichier a été téléchargé
    if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $imageTmpName = $_FILES['image']['tmp_name'];
        $imageFileName = $_FILES['image']['name'];

        // Déplacez le fichier téléchargé vers un emplacement de stockage
        move_uploaded_file($imageTmpName, 'images/' . $imageFileName);

        // Vous pouvez enregistrer le titre, le texte et le nom du fichier dans une base de données ou ailleurs
        // Exemple : enregistrement dans un fichier texte
        $data = "Titre: $titre\nTexte: $texte\nImage: $imageFileName\n";
        file_put_contents('data.txt', $data, FILE_APPEND);

        echo "Téléchargement réussi et données enregistrées.";
    } else {
        echo "Erreur lors du téléchargement du fichier.";
    }
}
?>
