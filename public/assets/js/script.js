// Navbar Fixed Change
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    //console.log(scroll);
    if (scroll >= 50) {
        //console.log('a');
        $(".navbar").addClass("change");
    } else {
        //console.log('a');
        $(".navbar").removeClass("change");
    }
});