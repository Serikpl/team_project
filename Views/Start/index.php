<?php include ROOT.'/Views/header.php'; ?>

        <!-- here start main section -->
        <!-- Banner Slide Starts Here -->
            <div class="slider">
            <!-- Slideshow 3 -->
            <script src="/assets/js/responsiveslides.min.js"></script>
            <script>
                // You can also use "$(window).load(function() {"
                $(function () {
                  // Slideshow 3
                  $("#slider3").responsiveSlides({
                    manualControls: '#slider3-pager',
                  });
                });
              </script>
            <ul class="rslides" id="slider3">
                <li>
                    <div class="banner">
                        <h1>What a beautiful bike</h1>
                        <h2>timeless, atmospheric<br>& uncredible bikes!</h2>
                    </div>
                </li>
                <li>
                    <div class="banner banner2">
                        <h1>What a beautiful bike</h1>
                        <h2>timeless, atmospheric<br>& uncredible bikes!</h2>
                    </div>
                </li>
                <li>
                    <div class="banner banner1">
                        <h1>What a beautiful bike</h1>
                        <h2>timeless, atmospheric<br>& uncredible bikes!</h2>
                    </div>
                </li>
            </ul>
            <ul id="slider3-pager">
              <li><a href="#"><img src="/assets/images/bg_main.jpg" alt=""></a></li>
              <li><a href="#"><img src="/assets/images/bg_main.jpg" alt=""></a></li>
              <li><a href="#"><img src="/assets/images/bg_main.jpg" alt=""></a></li>
            </ul>
            <div class="clearfix"> </div>
            </div>
        <!-- Banner Slide Ends Here -->
        <!-- Best Seller Starts Here -->
        <div class="best-seller">
            <div class="best-seller-row">
                <div class="seller-column">
                    <div class="sale-box">
                        <span class="on_sale title_shop">bestseller</span>
                    </div>
                    <img src="/assets/images/biscyle1.jpg" alt=""  class="seller-img">
                </div>
                <div class="seller-column1">
                    <h3>Sale</h3>
                    <span class="sale-nip"></span>
                    <h4>Bicycle RetroSyperb Vii #1</h4>
                    <small>by Rodriguez Else</small>
                    <p>299.99$</p>
                    <div class="price">
                        <a href="single.html">Add to Shopping bag</a>
                        <span class="rating">Rating: 5.0 <i class="ratings"></i></span>
                    </div>
                    <p class="customer">Ask the Customer a Question</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="biseller-info">
                <ul id="flexiselDemo3">
                    <?php 
                        foreach ($products as $row) 
                        {
                            $brand = Brand::getOneBrand($row['brand_id']);
                    ?> 
                    <li>
                        <div class="biseller-column">
                        <img src="/<?php echo $row['main_img']; ?>" alt="" class="veiw-img">
                            <div class="veiw-img-mark">
                                <a href="#">Add to Cart</a>
                            </div>
                        <div class="biseller-name">
                            <h4><?php echo $row['productName']; ?></h4>
                            <small>by <?php echo $brand['brand_name']; ?></small>
                        </div>
                        <div class="biseller-name1">
                            <p><?php echo $row['buyPrice']; ?>$</p>
                        </div>
                        <div class="clearfix"></div>
                        <div class="price-s">
                            <a href="single.html">Add to Shopping bag</a>
                        </div>
                        
                        </div>
                    </li>
                    <?php    
                        }
                    ?>


                </ul>
            </div>
        </div>
            <script type="text/javascript">
                 $(window).load(function() {
                    $("#flexiselDemo3").flexisel({
                        visibleItems: 3,
                        animationSpeed: 1000,
                        autoPlay: true,
                        autoPlaySpeed: 3000,            
                        pauseOnHover: true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: { 
                            portrait: { 
                                changePoint:480,
                                visibleItems: 1
                            }, 
                            landscape: { 
                                changePoint:640,
                                visibleItems: 2
                            },
                            tablet: { 
                                changePoint:768,
                                visibleItems: 3
                            }
                        }
                    });
                    
                });
               </script>
               <script type="text/javascript" src="/assets/js/jquery.flexisel.js"></script>
    </div>
</div>
<!-- section products on main -->


<?php include ROOT.'/Views/footer.php'; ?>