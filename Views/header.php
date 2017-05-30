<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <title>Bicycleshop</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- STYLES -->
    <link href="/assets/css/bootstrap.css" rel='stylesheet' type='text/css' />

    <!-- Custom Theme files -->
    <link href="/assets/css/style.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    
    <link href="/assets/css/component.css" rel='stylesheet' type='text/css' />    


    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- Header Starts Here -->
<div class="user_menus">
    <ul>
        <?php 
            
            $user = false;
            $user = User::checkLogged();
            // var_dump($user);
            if(!$user){
        ?>
            <li>
                <a href="/login">
                login
                </a>
            </li>
            <li>
                <a href="/register">
                registration
                </a>
            </li>
        <?php } else { ?>
            <li>
                <a href="#">
                    You logined!
                </a>
            </li>
            <li>
                <a href="/logout">
                    logout
                </a>
            </li>
        <?php } ?>
    </ul>
</div>
<div class="header">
    <div class="container-fluid">
        <div class="header-top clearfix">
            <div class="logo">
                <a href="../"><img src="/assets/images/logo.png"></a>
            </div>
            <span class="menu"></span>
            <div class="clear"></div>
            <div class="navigation">
                <ul class="navig">
                    <li><a href="/store">Bikes</a></li>
                    <li><a href="/best">Best Buy</a></li>
                    <li><a href="/store">Offers</a></li>
                    <li><a href="/best">Accessories</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/aboutus">About Us</a></li>
                    <li><a href="/cart" >
                        <span class="glyphicon glyphicon-shopping-cart"></span>
                        (<span id="cart-number"> <?php echo Cart::countCartItems(); ?> </span>)
                    </a></li>
                </ul>

            </div>
<!--             <div class="clearfix"></div> -->
        </div>