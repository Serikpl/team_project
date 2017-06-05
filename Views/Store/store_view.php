<?php include ROOT.'/Views/header.php'; ?>

    <!-- here start main section -->

    <!-- main -->
    <div class="about">

    <?php include ROOT.'/Views/sidebar.php'; ?>

    <div class="new-product">
        <div class="new-product-top">
            <ul class="product-top-list">
                <li><a href="index.php">Home</a>&nbsp;<span>&gt;</span></li>
                <li><a href="bikes.php">Bikes</a>&nbsp;<span>&gt;</span></li>
                <li><span class="act">New Products</span>&nbsp;</li>
            </ul>
            <p class="back"><a href="index.php">Back to Previous</a></p>
            <div class="clearfix"></div>
        </div>
        <div class="new-topday">
            <h3 class="new-models">Today Releases</h3>

            <?php 
                foreach ($products as $row) 
                {        
                    if($row['its_recommended'] == 1){ 
            ?>  
            
            <a href="/product/<?php echo $row['productCode']; ?>">
           
                <div class="today-new-left">
                    <img src="/<?php echo $row['main_img']; ?>" class="img-responsive">
                    <div class="sale-box">
                        <span class="on_sale title_shop">Recommended</span>
                    </div>
                </div>
            
            </a>
            <?php 
                    }
                } ?>


            <div class="clearfix"></div>
        </div>
        <h3 class="new-models">New Models</h3>
        <div class="best-seller">
            <div class="biseller-info">
                <ul id="flexiselDemo3">
                    <li>
                        <div class="biseller-column">
                            <img src="/assets/images/sm1.jpg" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="biseller-column">
                            <img src="/assets/images/sm3.jpg" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="biseller-column">
                            <img src="/assets/images/sm4.jpg" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="biseller-column">
                            <img src="/assets/images/sm1.jpg" alt="">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <h3 class="new-models">Sales Models</h3>
        <div class="best-seller">
            <div class="biseller-info">
                <ul id="flexiselDemo1">
                    <li>
                        <div class="biseller-column">
                            <img src="/assets/images/sm1.jpg" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="biseller-column">
                            <img src="/assets/images/sm3.jpg" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="biseller-column">
                            <img src="/assets/images/sm4.jpg" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="biseller-column">
                            <img src="/assets/images/sm1.jpg" alt="">
                        </div>
                    </li>
                </ul>
            </div>
        </div>


    </div>
    <div class="clearfix"></div>
</div>
<!-- section products on main -->


<?php include ROOT.'/Views/footer.php'; ?>