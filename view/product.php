<?php
    //start session
    session_start();
    include('Template_Header.php');
    include('../model/methods.php');
     
    include("../config/database.php");
    
    $database = new Database();
    $db = $database->connection();

    $id = $_GET['id'];
    $methods = new methods($db);
    $result = $methods->Read_Full_Details($id);
    $num = $result->rowCount();
    if($num > 0)
    {
        while($row = $result->fetch(PDO::FETCH_ASSOC))
        {
           
            echo '<table class="table table-sm">';
            echo '<tbody>';
            echo '<tr>';
            echo '<td>Mark</td>';
            echo '<td>'.$row['Marque'].'</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>Nom du produit</td>';
            echo '<td>'.$row['title'].'</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>Catégorie</td>';
            echo '<td>'.$row['Categorie'].'</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>Système d&apos;exploitation</td>';
            echo '<td>'.$row['System dexploitation'].'</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>Résolution</td>';
            echo '<td>'.$row['Resolution'].'</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>Ram</td>';
            echo '<td>'.$row['Ram'].'</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>CPU</td>';
            echo '<td>'.$row['CPU'].'</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>Nombre de coeurs</td>';
            echo '<td>'.$row['Nombre de coeurs'].'</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>Poids</td>';
            echo '<td>'.$row['Poids'].'</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>Couleur</td>';
            echo '<td>'.$row['Couleur'].'</td>';
            echo '</tr>';
        echo '</tbody>';
        echo '</table>';
        }
    }  
    else{
        echo 'Sorry No Records Found';
    }

    echo '<a href="view/edit.php?id='.$id.'" class="btn btn-lg btn-danger">Edit</a>';
    include('Template_Footer.php');

?>