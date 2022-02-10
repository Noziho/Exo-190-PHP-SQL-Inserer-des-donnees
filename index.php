<?php
require __DIR__ . '/Config.php';
require __DIR__ . '/DB_Connect.php';
/**
 * Pour cet exercice, vous allez utiliser la base de données table_test_php créée pendant l'exo 189
 * Vous utiliserez également les deux tables que vous aviez créées au point 2 ( créer des tables avec PHP )
 */

try {
    /**
     * Créez ici votre objet de connection PDO, et utilisez à chaque fois le même objet $pdo ici.
     */


    /**
     * 1. Insérez un nouvel utilisateur dans la table utilisateur.
     */
    $insert = 'INSERT INTO utilisateur (family_name, name, email, password, adresse, postal_code, country) VALUES';
    
    $sql1 = $insert . "('Decroix', 'Noah', 'noah.decroix3@gmail.com', 'dede', 'mon adresse', '59530', 'France')";

    DB_Connect::dbConnect()->exec($sql1);

    /**
     * 2. Insérez un nouveau produit dans la table produit
     */

    // TODO votre code ici.

    /**
     * 3. En une seule requête, ajoutez deux nouveaux utilisateurs à la table utilisateur.
     */

    // TODO Votre code ici.

    /**
     * 4. En une seule requête, ajoutez deux produits à la table produit.
     */

    // TODO Votre code ici.

    /**
     * 5. A l'aide des méthodes beginTransaction, commit et rollBack, insérez trois nouveaux utilisateurs dans la table utilisateur.
     */

    // TODO Votre code ici.


    /**
     * 6. A l'aide des méthodes beginTransaction, commit et rollBack, insérez trois nouveaux produits dans la table produit.
     */
    echo "La ou les requêtes a/ont fonctionné(es)";
}
catch (PDOException $e) {
    echo "Erreur: " . $e->getMessage();
}