        <?php include('view/Template_Header.php');?>

            <h1 class="display-4">Product</h1>
            <div class="row">

            
            <?php
                if($num > 0)
                {
                    while($row = $result->fetch(PDO::FETCH_ASSOC))
                    {
                        echo    '<div class="col-lg-6" id="product_page">';
                        echo        '<div class="card" style="width: 100%; height:100%;">';
                        echo             '<img class="card-img-top" src="..." alt="Card image cap">';
                        echo             '<div class="card-body">';
                        echo                '<h5 class="card-title">'.$row['title'].'</h5>';
                        echo                '<p class="card-text">'.$row['description'].'</p>';
                        echo                '<p class="card-text"> Prix : $'.$row['price'].'</p>';
                        echo                '<a href="view/product.php?id='.$row['id'].'" class="btn btn-primary">More Details</a>';
                        echo            '</div>';
                        echo        '</div>';
                        echo    '</div>';
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