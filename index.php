<?php
require ("model.php");
require ("view.php");
//$utilisateurs = getUtilisateurs();
//$categories = getCategories();
$Utilisateurs2 = getUtilsateursByNom("Lecerf");
render_all($Utilisateurs2);

//render_all($utilisateurs);
//render_all($categorie);




/*  SQL : sytème de gestion de BDD relationnelles - Structure Query Language
créer des relations entre les tables
Jointure de deux tables (lien) - JOIN 
Many to many = n <-> n 
One to many = 1 -> n / = n -> 1
One to one = 1 <-> 1

Sur phpmyadmin
SELECT* FROM utilisateurs  (afficher le contenu des colonnes de la table)

SELECT * FROM `utilisateurs` INNER JOIN hentai ON utilisateurs.id=hentai.utilisateurs_id

$server = "localhost";
$user = "root";
$password = "root";
$dbname = "cours-sql";
$conn = new PDO("mysql:host=$server;dbname=$dbname", $user, $password);
//$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "connexion Tip Top";
echo "<br/>";

//PDO = PHP DATA OBJECT

$res = $conn->query ("SELECT*FROM utilisateurs"); //print_r($res);
print_r($res->fetch()); 


//res est un objet qui représente la requête dans la BDD, appel de la fonction fetch pour aller chercher des données dans l'objet
//print_r = echo d'un array (et non d'un string comme avec echo)
// le fetch renvoie une liste de toutes les valeurs (en array avec le print_r) -> renvoyer que la première ligne du tableau
//comment le faire pour toutes les lignes ? = faire une boucle pour pas se retaper fetch à chaque fois

while ($row = $res->fetch()) {
$print_r($row);
echo "<br/>";
} 

$res = $conn->query ("SELECT *
FROM utilisateurs
INNER JOIN categorie
ON utilisateurs.categorie_id = categorie.id
");
print_r($res->fetch());
echo "<br/>";
*/
?>