$(function() {
    function a() {
        b.find("img").first().fadeOut().appendTo(b), b.find("img").first().fadeIn();
    }
    $("header").height();
    smoothScroll.init();
    var b = $("div#slider");
    b.find("img").hide(), b.find("img").first().show(), setInterval(a, 5e3), $("nav#main-menu li a").on("click", function(a) {
        $(this).parent().find(".submenu").addClass("active").length > 0 && (a.preventDefault(), 
        $(this).parent().addClass("hover"));
    }), $("body:not(nav#main-menu>*)").on("click", function(a) {
        $("ul.submenu.active").length > 0 && !$(a.target).is(".submenu") && !$(a.target).is("nav#main-menu li.hover a") && !$(a.target).closest(".submenu").length && $("nav#main-menu li.hover").removeClass("hover");
    }), $("a.fancybox").fancybox({
        openSpeed: "fast",
        closeSpeed: "fast",
        prevSpeed: "normal",
        nextSpeed: "normal",
        prevEffect: "fade",
        nextEffect: "fade",
        closeClick: !1,
        helpers: {
            title: {
                type: "over"
            }
        },
        padding: 5
    });
});