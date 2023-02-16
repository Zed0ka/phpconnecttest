<?php

include './utils/connectBdd.php';

/* Exercice 1 requête SQL de consultation PHP PDO :
-Créer un nouveau fichier php à la racine de votre projet,
-Ajouter à l'intérieur de celui-ci les éléments suivants :
Import du fichier de connexion à la BDD,
écrire la requête SQL SELECT qui va retourner la liste des catégories avec leur id (id_categorie) et nom (nom_categorie)
En utilisant la méthode prepare execute,
Stocker le résultat avec fetchAll dans une variable. */


//requete prepare : stocker les données cherchées ds une variable
$req = $bdd->prepare('SELECT id_categorie, nom_categorie FROM categorie');

//requete execute :
$req->execute();
//conversion des données en tableau :
$data = $req->fetchAll(PDO::FETCH_ASSOC);
//conversion du tableau en string : 
implode(',',$data);
//affichage :
echo 'Liste des catégories : '.$data;

//SINON :
explode(',',$data); // je reviens en array

foreach($data as $value ) {
    echo $value;
}

?>