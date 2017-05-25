$(window).load(function () {
    $("#flexiselDemo3").flexisel({
        visibleItems: 3,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: {
            portrait: {
                changePoint: 480,
                visibleItems: 1
            },
            landscape: {
                changePoint: 640,
                visibleItems: 2
            },
            tablet: {
                changePoint: 768,
                visibleItems: 3
            }
        }
    });

});
$(function () {
    $("#slider3").responsiveSlides({
        manualControls: '#slider3-pager',
    });
});
$("span.menu").click(function () {
    $(".navigation ul.navig").slideToggle("slow", function () {});
});
$(document).ready(function () {
    $('#horizontalTab').easyResponsiveTabs({
        type: 'default',
        width: 'auto',
        fit: true
    });
});

$(window).load(function () {
    $("#flexiselDemo1").flexisel({
        visibleItems: 3,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: {
            portrait: {
                changePoint: 480,
                visibleItems: 1
            },
            landscape: {
                changePoint: 640,
                visibleItems: 2
            },
            tablet: {
                changePoint: 768,
                visibleItems: 3
            }
        }
    });

});
//ajax
$(function () {
    $('#contact-form').submit(function (event) {
        event.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'contact-post.php',
            data: $('#contact-form').serialize(),
            success: function (data) {
                console.log(JSON.stringlify(data)); // show response from the php script.
            }
        });

    });
});
