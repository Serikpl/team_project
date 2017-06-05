<?php include ROOT.'/Views/header.php'; ?>

<section class="cart">
    <div class="container">

        <div class="home-products padding-vertical-60">
            <div class="row">
                <div class="col-xs-12 ">
                    <h1>Products in Cart</h1>
                    <div class="products row">
                        <div class="shopping-cart-wrapper">
                            <div class="shopping-cart-list">            

                                <?php foreach ($products as $row):?>

                                <div class="shopping-cart-item" id="item-<?php echo $row['productCode']; ?>">
                                    <div class="remove">
                                        <a data-id=<?php echo $row[ 'productCode']; ?> class='del-prod' href="/cart/del/<?php echo $row['productCode']; ?>">
                                        
                                        <img src="assets/images/big-cancel-symbol.png" alt="big-cancel">
                                    </a>
                                    </div>
                                    <div class="cart-image">
                                        <div class="bag-img"><img src="assets/images/shopping-bag.png" alt="img"></div>
                                        <a href="">
                                            <img src="<?php echo $row['main_img']; ?>" alt="cart"></a>
                                    </div>
                                    <div class="short-details">
                                        <div class="short-wrap">
                                            <div class="short-cell">
                                                <div class="short-title">
                                                    <h2>
                                                        <a href="">
                                                            <?php echo $row['productName']; ?>
                                                        </a>
                                                    </h2>

                                                </div>
                                                <div class="short-price">
                                                    <p><span><?php echo $row['buyPrice']; ?></span> $</p>
                                                </div>
                                                <div class="short-quant">
                                                    <p><span>Quantity:</span> <b><?php echo $row['quantity']; ?></b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <!-- ./products -->
                    <div class="total-price">
                        <p><b>Cash to pay: </b><span><span class="total"><?php echo $common_price; ?></span> $</span>
                        </p>
                    </div>
                    <div class="checkout">
                        <div class="btn-checkout but-black">
                            <button><a href="/payment">Checkout</a></button>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.home-products -->

    </div>
    <!-- /.container -->
</section>

<?php include ROOT.'/Views/footer.php'; ?>
