<?php
    //start session
    session_start();
    include('Template_Header.php');
    include('../model/methods.php');
     
    include("../config/database.php");
    
    $database = new Database();
    $db = $database->connection();
    //getting id value
    $id = $_GET['id'];
    $methods = new methods($db);
    $result = $methods->Read_Full_Details($id);
    $num = $result->rowCount();
    if($num > 0)
    {
        while($row = $result->fetch(PDO::FETCH_ASSOC))
        
        {
        ?>   

             <table class="table table-sm">
             <tbody>
                <tr>
                    <td>Mark</td>
                    <td><?php echo $row['Marque']; ?></td>
                </tr>
                <tr>
                    <td>Nom du produit</td>
                    <td><?php echo $row['NomDuProduit'];?></td>
                </tr>
                <tr>
                    <td>Catégorie</td>
                    <td><?php echo $row['Categorie'];?></td>
                </tr>
                <tr>
                    <td>Système d&apos;exploitation</td>
                    <td><?php echo $row['system_dexploitation'];?></td>
                </tr>
                <tr>
                    <td>Résolution</td>
                    <td><?php echo $row['Resolution'];?></td>
                </tr>
                <tr>
                    <td>Ram</td>
                    <td><?php echo $row['Ram'];?></td>
                </tr>
                <tr>
                    <td>CPU</td>
                    <td><?php echo $row['CPU'];?></td>
                </tr>
                <tr>
                    <td>Nombre de coeurs</td>
                    <td><?php echo $row['NombreDeCoeurs'];?></td>
                </tr>
                <tr>
                    <td>Poids</td>
                    <td><?php echo $row['Poids'];?></td>
                </tr>
                <tr>
                    <td>Couleur</td>
                    <td><?php echo $row['Couleur'];?></td>
                </tr>
           </tbody>
         </table>
       <?php
        }

    }  
    else{
        echo 'Sorry No Records Found';
    }

    echo '<a href="edit.php?id='.$id.'" class="btn btn-lg btn-danger" target=_blank>Edit</a>';
    include('Template_Footer.php');

?>