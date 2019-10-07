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
        ?>    
             <form action="" id="editform">
                 <div class="form-group">
                    <label>Mark</label>
                    <input type="text" class="form-control" value='<?php echo $row['Marque']; ?>'>
                 </div>
                 <div class="form-group">
                    <label>Prix</label>
                    <input type="text" class="form-control"  value='<?php echo $row['price']; ?>'>
                 </div>
                 <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="form-control"  value='<?php echo $row['descrip']; ?>'>
                 </div>
                 <div class="form-group">
                    <label>Nom du produit</label>
                    <input type="text"  class="form-control" value='<?php echo $row['Nom_du_produit']; ?>'>
                 </div>
                 <div class="form-group">
                    <label>Catégorie</label>
                    <input type="text" class="form-control" value='<?php echo $row['Categorie']; ?>'>
                 </div>
                 <div class="form-group">
                    <label>Système d&apos;exploitation</label>
                    <input type="text" class="form-control" value='<?php echo $row['System dexploitation']; ?>'>
                 </div>
                 <div class="form-group">
                    <label>Résolution</label>
                    <input type="text" class="form-control" value='<?php echo $row['Resolution']; ?>'>
                 </div>
                 <div class="form-group">
                    <label>Ram</label>
                    <input type="text" class="form-control" value='<?php echo $row['Ram']; ?>'>
                 </div>
                 <div class="form-group">
                    <label>CPU</label>
                    <input type="text" class="form-control" value='<?php echo $row['CPU']; ?>'>
                 </div>
                 <div class="form-group">
                    <label>Nombre de coeurs</label>
                    <input type="text" class="form-control" value='<?php echo $row['Nombre de coeurs']; ?>'>
                 </div>
                 <div class="form-group">
                    <label>Poids</label>
                    <input type="text" class="form-control" value='<?php echo $row['Poids']; ?>'>
                 </div>
                 <div class="form-group">
                    <label>Couleur</label>
                    <input type="text" class="form-control" value='<?php echo $row['Couleur']; ?>'>
                 </div>
                 <input type="submit" href="edit.php?id='<?php echo $row['id'];?>'" class="btn btn-lg btn-success" value="Update">    
             </form>
             <div id='response'></div>
        <?php     
        }
    }  
    else{
        echo 'Sorry No Records Found';
    }

    
    
    include('Template_Footer.php');

        ?>
            
            