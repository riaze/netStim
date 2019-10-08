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
        $query = 'SELECT id, descrip, Nom_du_produit, price FROM product_details';
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
    
}

