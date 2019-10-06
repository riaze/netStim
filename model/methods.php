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
        $query = 'SELECT id, title, description, price FROM product_details';
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
    public function Update_Product(){
        $query = 'UPDATE product_details SET title = :title, description = :description WHERE id = :id';
        $stmt = $this->conn->prepare($query);

        //clean data
        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->description = htmlspecialchars(strip_tags($this->description));
        $this->id = htmlspecialchars(strip_tags($this->id));
        
        //bind param
        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':id', $this->id);

    }
}