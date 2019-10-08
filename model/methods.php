<?php
class Methods{
     private $conn;
     private $id;
     private $title;
     private $description;

     public function __construct($db){
         $this->conn = $db;
     }

    public function Read_Product(){
        $query = 'SELECT id, descrip, NomDuProduit, price FROM product_details';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    Public function Read_Full_Details($id){
        $query = "SELECT * FROM product_details WHERE id = '$id'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    
    Public function Update_Product_Details($id){

        $query = "UPDATE product_details SET Marque = '{$_POST["mark"]}', price = '{$_POST["Prix"]}', descrip = '{$_POST["descri"]}',
                  Categorie = '{$_POST["cate"]}', Resolution = '{$_POST["reso"]}', Ram = '{$_POST["ram"]}', CPU = '{$_POST["cpu"]}',
                  NombreDeCoeurs = '{$_POST["nomDeCou"]}', NomDuProduit = '{$_POST["nom_du_pro"]}', system_dexploitation = '{$_POST["sys"]}', 
                  Poids = '{$_POST["poids"]}', Couleur = '{$_POST["couleur"]}' WHERE id= '$id'";
       
        $stmt = $this->conn->prepare($query);
        $stmt->execute();    
    }
}
    if(!empty($_POST) && isset($_GET['action']) && $_GET['action'] == 'Update_Product_Details') {
        include_once('../config/database.php');
        $database = new Database();
        $db = $database->connection();
        $update = new Methods($db);
        $id = $_GET['id'];
        $update->Update_Product_Details($id);  
}

    

