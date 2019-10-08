<?php
    
include("../config/database.php");
class Database1 {
    private $host = 'localhost';
    private $db_name = 'products';
    private $username = 'root';
    private $password = '';
    private $conn;
    //db connct
    public function connection(){
        $this->conn= null;
        try{
            $this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->db_name,$this->username, $this->password);
        
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        }
        catch(PDOException $e){
            echo 'connection Error' . $e->getMessage();
        }
        return $this->conn;
    } 
}
$database = new Database(); 
$database->connection();


    
    $query = "UPDATE product_details SET Marque = '{$_data["mark"]}', descrip = '{$_POST["descri"]}', price = '{$_POST["Prix"]}', 
    Nom_du_produit = '{$_POST["nom_du_pro"]}', Categorie = '{$_POST["cate"]}', Resolution = '{$_POST["reso"]}', System dexploitattion = '{$_POST["sys"]}', 
    Ram = '{$_POST["ram"]}', CPU = '{$_POST["cpu"]}', Nombre de coeurs = '{$_POST["nomDeCou"]}', Poids = '{$_POST["poids"]}', Couleur = '{$_POST["couleur"]}' WHERE id = ".$_POST["id"];
    echo $query;
    $stmt = $conn->prepare($query);
    $stmt->execute();
    
  

