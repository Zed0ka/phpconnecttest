<?php

include "./utils/connectBdd.php";

/*
Exercice 2 Requête et super globale GET POST :
Créer 2 nouveaux fichiers : 
-1 page formulaire qui va contenir :
2 inputs de type text (nom_utilisateur, prenom_utilisateur),
1 input de type email (mail_utilisateur),
1 input de type password (password_utilisateur),
1 input de type submit (bouton ajouter),
-1 page de script qui va contenir :
les tests :
-si le bouton est cliqué,
-si les champs sont remplis,
requête pour ajouter un compte en BDD :
-prepare,
-exécute (tableau avec les 4 paramètres : nom, prenom, mail, password)
Gestion des erreurs :
-les champs sont vides,
-le compte à été ajouté en BDD.
Bonus : 
Ajouter la vérification du compte en BDD par son adresse mail
*/
    // Si le bouton submit est cliqué :
    if(isset($_POST["submit"])) {
        //Si le champs n'est pas vide : je génère la variable prenom contenant l'input ET la variable data qui va contenir la donnée à transiter
        if(!empty($_POST["prenom_utilisateur"]) && !empty($_POST["nom_utilisateur"]) && !empty($_POST["mail_utilisateur"]) && !empty($_POST["password_utilisateur"])){
            $prenom     = $_POST["prenom_utilisateur"];
            $nom        = $_POST["nom_utilisateur"];
            $mail       = $_POST["mail_utilisateur"];
            $password   = $_POST["password_utilisateur"];
            // Je prépare la commande et exécute l'envoi à destination des enr de ma table en BDD
            try {
                //Préparation :
                $req = $bdd->prepare("INSERT INTO utilisateur(prenom_utilisateur, nom_utilisateur, mail_utilisateur, password_utilisateur) 
                                    VALUES(:prenom, :nom, :mail, :password)");
                // Envoi :
                $req->execute(
                    ["prenom"=>$prenom, "nom"=>$nom, "mail"=>$mail, "password"=>$password]
                );
                echo "Le compte : ".$prenom.$nom." a été ajouté à la BDD avec succès";
            } catch(Exception $error) {
                die("Erreur :".$error->getMessage());
            }
        } else {
            echo "Veuillez remplir tous les champs";
        }
    }

?>