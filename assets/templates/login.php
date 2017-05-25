<?php require_once('page_parts/header.php'); ?>
<div class="about">
    <?php require_once('sidebar.php'); ?>
    <div class="new-product prodys">
        <div class="new-product-top">
            <ul class="product-top-list">
                <li><a href="index.php">Home</a>&nbsp;<span>&gt;</span></li>
                <li><a href="#">Account</a>&nbsp;<span>&gt;</span></li>
                <li><span class="act"><a href="login.php">Log In</a></span>&nbsp;</li>
            </ul>
            <p class="back"><a href="index.php">Back to Previous</a></p>
            <div class="clearfix"></div>
        </div>
        <div class="account_grid">
            <div class="col-md-6 login-right">
                <h3>REGISTERED CUSTOMERS</h3>
                <p>If you have an account with us, please log in.</p>
                <form>
                    <div>
                        <span>Email Address<label>*</label></span>
                        <input type="text">
                    </div>
                    <div>
                        <span>Password<label>*</label></span>
                        <input type="text">
                    </div>
                    <a class="forgot" href="#">Forgot Your Password?</a>
                    <input type="submit" value="Login">
                </form>
            </div>
            <div class="col-md-6 login-left">
                <h3>NEW CUSTOMERS</h3>
                <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                <a class="acount-btn" href="register.php">Create an Account</a>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <?php require_once('page_parts/footer_js.php'); ?>
