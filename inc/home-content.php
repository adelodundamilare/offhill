<?php 

$top_ratings = [
    [ 'first-product'=> 'GTCr8', 'second-product'=>'Online Banking', 'rating' => '4', 'name' => 'GTBank', 'img' => 'img/img-placeholder.png', 'description' => 'this brand is all about this and that all about this' ],
    [ 'first-product'=> 'Email Marketing', 'second-product'=>'Digital Marketing', 'rating' => '5', 'name' => 'BusinessPlus Services', 'img' => 'img/img-placeholder.png', 'description' => 'this brand is all about this and that all about this' ],
    [ 'first-product'=> 'Oil Products', 'second-product'=>'Vehicle Fuel', 'rating' => '3', 'name' => 'Shell', 'img' => 'img/img-placeholder.png', 'description' => 'this brand is all about this and that all about this' ],
    [ 'first-product'=> 'MTN Browser bundle', 'second-product'=>'WWTBAM', 'rating' => '4', 'name' => 'MTN Nigeria', 'img' => 'img/img-placeholder.png', 'description' => 'this brand is all about this and that all about this' ],
    [ 'first-product'=> 'Cocacola', 'second-product'=>'Fanta', 'rating' => '2', 'name' => 'Cocacola', 'img' => 'img/img-placeholder.png', 'description' => 'this brand is all about this and that all about this' ],
    [ 'first-product'=> 'Oil Products', 'second-product'=>'Vehicle Fuel', 'rating' => '3', 'name' => 'Shell', 'img' => 'img/img-placeholder.png', 'description' => 'this brand is all about this and that all about this' ]
];
 
?>

<section class="home-content">
    <div class="wrap">	
        <section class="rating-rows">
                <h2 class="rating__h2">Top Rated Brands</h2>
                <div class="rating">
                    <div class="rating__prev"><i class="ion-ios-arrow-left rate-more left"></i></div>
                    <section class="rating__box">
                        <div class="rating__box-inside">
                            <?php foreach($top_ratings as $brand) :  ?>
                                <div class="rating__div">
                                    <div class="rating__div--inner">
                                        <img class="rating__div__img" src="<?php echo $brand['img']; ?>" alt="">
                                        <div class="rating__div__stars">
                                            <?php for($i=0; $i<$brand['rating']; $i++) {
                                                echo '<i class="ion-ios-star"></i>';
                                            }
                                            //this checks if the brand rating is equal to a set value
                                                if($brand['rating'] != 5){
                                                    $value = 5 - (int)$brand['rating'];
                                                    while($value>0){
                                                        echo '<i class="ion-ios-star-outline"></i>';
                                                        $value--;
                                                    }
                                                }
                                            ?>
                                        </div>
                                        <div class="rating__div__div">
                                            <h3 class="rating__div__h3"><?php echo $brand['name']; ?></h3>
                                            <p class="rating__div__p"><?php echo $brand['description']; ?></p>
                                        </div>
                                        
                                        <div class="rating__div__top-products">
                                            <div>
                                                <?php echo $brand['first-product']; ?>
                                            </div>
                                            <div>
                                                <?php echo $brand['second-product']; ?>
                                            </div>
                                        </div>
                                        
                                        <a href="reviews.php" class="rating__div__read-reviews">Read Reviews</a>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </section>   
                    <div class="rating__next"><i class="ion-ios-arrow-right rate-more right"></i></div> 
                </div>
        </section>
    </div>
</section>

<section>
    <div class="wrap">
        <h1>Site is still Under construction, more fields will be added soon...</h1>
    </div>
</section>