<?php
echo  "<h1>j'aime les moules</h1>";

    /*function render_all($utilisateurs){
        while ($row = $utilisateurs->fetch()) {
            print_r($row);
            echo "<br/>";    
            }
    }; */
/*
    function render_all($categories){
        while ($row = $categories->fetch()) {
            print_r($row);
            echo "<br/>";    
            }
        };  */

        function render_all($getUtilsateursByNom){
            while ($row = $getUtilsateursByNom->fetch()) {
                print_r($row);
                echo "<br/>";    
                }
        };

?>
