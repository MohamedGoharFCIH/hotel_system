$(document).ready(function(){
    
    //count to fire
    $('.timer').countTo();

    //nice scroll code
    $("html").niceScroll({
        cursorwidth:"12px",
        cursorborderradius:0,
        cursorcolor:"#f6d014"
    });

    // scroll to top button
    var scrollButton = $("#scrollTop .fa-chevron-circle-up");

    $(window).scroll(function(){

        if ($(this).scrollTop() >= 400)
            scrollButton.show(400);
        else
            scrollButton.hide(400);

    });

    scrollButton.click(function(){
        $("html,body").animate({scrollTop : 0},850);
    });

});

/* Set the width of the side navigation to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
