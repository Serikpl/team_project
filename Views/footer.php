<div class="container-fluid footer-wrapper">
    <div class="footer">
        <a href="/store">Browse shop</a>
    </div>
    <div class="footer-top">
        <ul class="bottom-list">
            <li><a href="#">terms & conditions</a></li>
            <li><a href="#">return policy</a></li>
            <li><a href="#">reviews</a></li>
            <li><a href="#">about shop</a></li>
            <li><a href="#">secure payment</a></li>
        </ul>
    </div>
    <ul class="payment-list">
        <li><i class="paypal"></i></li>
        <li><i class="wi"></i></li>
        <li><i class="visa"></i></li>
        <li><i class="amazon"></i></li>
        <li><i class="sm"></i></li>
    </ul>
</div>

<!-- SCRIPTS -->
<script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }

</script>
<script src="/assets/js/jquery-1.11.0.min.js?ver=1"></script>
<script src="/assets/js/responsiveslides.min.js"></script>
<script src="/assets/js/easyResponsiveTabs.js"></script>
<script src="/assets/js/jquery.flexisel.js"></script>
<script src='/assets/js/animations.js?ver=3'></script>

<!-- AJAX add to cart product -->
<script>
    $(document).ready(function() {
        $('.add-to-cart').click(function() {

            var id_p = $(this).attr('data-id');

            $.post('/cart/add/' + id_p, {}, function(data) {
                $('#cart-number').html(data);
                console.log(data);
            });
            return false;
        });
    });

</script>

</body>

</html>
