<?php
$server = "localhost";
$user = "root";
$password = "root";
$dbname = "cours-sql";
$conn = new PDO("mysql:host=$server;dbname=$dbname", $user, $password);

/*
function getUtilisateursCategorie() {
    global $conn;
    $res = $conn->query ("SELECT *  
    FROM utilisateurs
    INNER JOIN categorie
    ON utilisateurs.categorie_id = categorie.id");
    return $res; 
    }; */

/*
function getUtilisateurs() {
    global $conn;
    $res = $conn->query ("SELECT * FROM utilisateurs");
    return $res; 
    }; */

    function getCategories() {
        global $conn;
        $res = $conn->query ("SELECT * FROM categories");
        return $res; 
        };
    
function getUtilsateursByNom($nom){
    global $conn;
   // $conn -> query("SELECT * FROM utilisateur WHERE utilisateurs.nom = $nom");
    //ne mettre de variables dans la requête car n'importe qui peut entrer une commande sql pour supprimer la bdd
    $q = $conn -> prepare ("SELECT * FROM utilisateurs WHERE utilisateurs.Nom = :nom");
    $q-> bindParam(":nom", $nom); // fait la vérification qui empêche les entrées sql (accepte le texte normal)
    $q->execute();
    return $q;
    };

   

    

//CamelCase : écrire les fonctions sans espace/underscore qui explique ce qu'elle fait:
// GetUtilisateursByNoms
// Il faut s'habituer à bien déclarer ses fonctions car Symfony le fera tout seul 
//pas d'affichage sur le Model ! On fait que du return
?>
