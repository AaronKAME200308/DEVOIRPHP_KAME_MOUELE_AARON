<?php
include "Etudiant.php";
session_start();    


    if (isset($_SESSION['listeEtudiant'])) {

    }else{
            $_SESSION['listeEtudiant']=[];
    }

    $Etudiant = new Etudiant;

    $Etudiant->DonneeEtudiant($Etudiant);

    array_push($_SESSION['listeEtudiant'], $Etudiant);

    var_dump($_SESSION['listeEtudiant']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="StyleListeEtudiants.css">
</head>
<body>
     <div>
        <table>
            <thead> 
                <tr>
                    <?php
                        foreach($Etudiant as $etudiant=> $etudiant ) {
                            echo "<th>$etudiant</th>";
                        }
                    ?>
                </tr>                          
            </thead>
            <tbody>  
                
                    <?php
                        foreach($_SESSION['listeEtudiant'] as $etudiant) {
                            echo '<tr>';
                            foreach($etudiant as $etudiant2) {
                                echo '<td>'.$etudiant2.'</td>';
                            }
                            echo '</tr>';
                        }

                    ?> 
            </tbody>
        </table>
    </div>
        <div>
        <a href="http://localhost/EVALUATION_PHP/Inscription.php"> Ajouter</a>
    </div>
</body>
</html>