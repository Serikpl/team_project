<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/assets/css/admin.css">
</head>

<body>
<header>
    
    <div class="container">
        <div class="nav">
            <nav>
                <ul class="clearfix admin_menu addit_manu">
                    <li><a href="#">Hey, <?php echo User::getLogedName(); ?>!</a></li>
                    <li><a href="../" title="site">Go to site</a></li>
                    <li><a href="/logout" title="statystyka">log out</a></li>
                </ul>            
                <ul class="clearfix admin_menu">                    
                    <li><a href="/ad/products" title="produkty">Produkty</a></li>
                    <li><a href="/ad/brands" title="kategori">Kategorie(brands)</a></li>
                    <li><a href="/ad/orders" title="zamówienia">Zamówienia(orders)</a></li>
                    <li><a href="/ad/users" title="użytkownicy">Użytkownicy</a></li>
                    <li><a href="/ad/statistics" title="statystyka">Statystyka</a></li>
                    
                </ul>
            </nav>
        </div>
    </div>

</header>
<!-- <pre><?php var_dump($_SESSION); ?></pre> -->