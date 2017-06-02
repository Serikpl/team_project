<?php include ROOT.'/Views/header.php'; ?>

    <!-- here start main section -->

    <!-- main -->
    <div class="about">

    <?php include ROOT.'/Views/sidebar.php'; ?>

<div class="new-product">
        <div class="new-product-top">
            <ul class="product-top-list">
                <li><a href="index.php">Home</a>&nbsp;<span>&gt;</span></li>
                <li><a href="best.php">Best Buy</a>&nbsp;<span>&gt;</span></li>
                <li><span class="act">Best Sales</span>&nbsp;</li>
            </ul>
            <p class="back"><a href="index.php">Back to Previous</a></p>
            <div class="clearfix"></div>
        </div>
        <div class="mens-toolbar">
            <div class="sort">
                <div class="sort-by">
                    <label>Sort By</label>
                    <select>
			                            <option value="">
			                    Position                </option>
			                            <option value="">
			                    Name                </option>
			                            <option value="">
			                    Price                </option>
			            </select>
                    <a href=""><img src="/assets/images/arrow2.gif" alt="" class="v-middle"></a>
                </div>
            </div>
            <ul class="women_pagenation dc_paginationA dc_paginationA06">
                <li><a href="#" class="previous">Page:</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
            <div class="cbp-vm-options">
                <a href="#" class="cbp-vm-icon cbp-vm-grid cbp-vm-selected" data-view="cbp-vm-view-grid" title="grid">Grid View</a>
                <a href="#" class="cbp-vm-icon cbp-vm-list" data-view="cbp-vm-view-list" title="list">List View</a>
            </div>
            <div class="pages">
                <div class="limiter visible-desktop">
                    <label>Show</label>
                    <select>
                            <option value="" selected="selected">
                    9                </option>
                            <option value="">
                    15                </option>
                            <option value="">
                    30                </option>
                  </select> per page
                </div>
            </div>
            <div class="clearfix"></div>
            <ul>
                <?php 
                foreach ($products as $row) 
                {        
            	?>

                <li>
                    <a class="cbp-vm-image" href="/product/<?php echo $row['productCode']; ?>">
                        <div class="view view-first">
                            <div class="inner_content clearfix">
                                <div class="product_image">
                                    <img src="/<?php echo $row['main_img']; ?>" class="img-responsive" alt="" />
                                    <div class="mask">
                                        <div class="info">Quick View</div>
                                    </div>
                                    <div class="product_container">
                                        <div class="cart-left">
                                            <p class="title"><?php echo $row['productName']; ?></p>
                                        </div>
                                        <div class="pricey">$<?php echo $row['buyPrice']; ?></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="cbp-vm-details">
                        Silver beet shallot wakame tomatillo salsify mung bean beetroot groundnut.
                    </div>
                    <a class="cbp-vm-icon cbp-vm-add add-to-cart" href="#" data-id='<?php echo $row['productCode']; ?>'>Add to cart</a>
                </li>
                <?php } ?>

            </ul>
        </div>
        <script src="js/cbpViewModeSwitch.js" type="text/javascript"></script>
        <script src="js/classie.js" type="text/javascript"></script>
    </div>
</div>
<div class="clearfix"></div>
    <!-- section products on main -->


<?php include ROOT.'/Views/footer.php'; ?>