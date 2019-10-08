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
             <form  id="editform">
                 <div class="form-group">
                    <label>Mark</label>
                    <input type="text" class="form-control" name= "mark" value='<?php echo $row['Marque']; ?>'>
                 </div>
                 <div class="form-group">
                    <label>Prix</label>
                    <input type="text" class="form-control" name= "Prix" value='<?php echo $row['price']; ?>'>
                 </div>
                 <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="form-control"   name= "descri" value='<?php echo $row['descrip']; ?>'>
                 </div>
                 <div class="form-group">
                    <label>Nom du produit</label>
                    <input type="text"  class="form-control" name = "nom_du_pro" value='<?php echo $row['Nom_du_produit']; ?>'>
                 </div>
                 <div class="form-group">
                    <label>Catégorie</label>
                    <input type="text" class="form-control" name = "cate" value='<?php echo $row['Categorie']; ?>'>
                 </div>
                 <div class="form-group">
                    <label>Système d&apos;exploitation</label>
                    <input type="text" class="form-control" name = "sys" value='<?php echo $row['System dexploitation']; ?>'>
                 </div>
                 <div class="form-group">
                    <label>Résolution</label>
                    <input type="text" class="form-control" name = "reso" value='<?php echo $row['Resolution']; ?>'>
                 </div>
                 <div class="form-group">
                    <label>Ram</label>
                    <input type="text" class="form-control" name = "ram" value='<?php echo $row['Ram']; ?>'>
                 </div>
                 <div class="form-group">
                    <label>CPU</label>
                    <input type="text" class="form-control" name = "cpu" value='<?php echo $row['CPU']; ?>'>
                 </div>
                 <div class="form-group">
                    <label>Nombre de coeurs</label>
                    <input type="text" class="form-control" name = "nomDeCou" value='<?php echo $row['Nombre de coeurs']; ?>'>
                 </div>
                 <div class="form-group">
                    <label>Poids</label>
                    <input type="text" class="form-control" name = "poids" value='<?php echo $row['Poids']; ?>'>
                 </div>
                 <div class="form-group">
                    <label>Couleur</label>
                    <input type="text" class="form-control" name = "couleur" value='<?php echo $row['Couleur']; ?>'>
                 </div>
                 <div class="form-group">
                     <input type="button" class="btn btn-lg btn-success" id ="save" data-id = '<?php echo $row['id']; ?>'
                     value="Update">
                 </div>
             </form>
            
        <?php     
        }
    }  
    else{
        echo 'Sorry No Records Found';
    }
    include('Template_Footer.php');

            
       ?>     