<?php

session_start(); //start session
include("config/database.php");
include_once("model/methods.php");
$database = new Database();
$db = $database->connection();

$methods = new methods($db);
$result = $methods->Read_Product();
$num = $result->rowCount();
include('view/Template_Header.php');
?>
            <h1 class="display-4">Product</h1>
            <div class="row m-4">

            
            <?php
                if($num > 0)
                {
                    while($row = $result->fetch(PDO::FETCH_ASSOC))
                    {
            ?>            
                        <div class="col-lg-5 product_margin" id="product_page">
                            <div class="card" style="width: 100%; height:100%;">
                            <img class="card-img-top" src="https://fakeimg.pl/300x50/" alt="Card image cap">
                                <div class="card-body">
                                <h5 class="card-title"><?php echo $row['Nom_du_produit'];?></h5>
                                <p class="card-text"><?php echo $row['descrip']; ?></p>
                                <p class="card-text"> <b>Prix : $<?php echo $row['price']; ?></b></p>
                                <a href="view/product.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">More Details</a>
                                </div>
                            </div>
                        </div>
            <?php               
                    }      
                }   
                else{
                        echo '<p>oops No product find </p>';
                } 
            ?>
             
            </div>
        <?php include('view/Template_Footer.php');?>
    </div>
</body>
</html> 