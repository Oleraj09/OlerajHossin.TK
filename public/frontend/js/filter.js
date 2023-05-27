$("button").click(function () {
    var show = $(this).attr('id');
    $('.filter').each(function () {
        $(this).show();
        var test = $(this).attr('id');
        if (test.indexOf(show) < 0) $(this).hide();
    });
});
$("#buttongroup").on('click', 'button', function () {
    $("#buttongroup button.activebtn").removeClass("activebtn");
    $(this).addClass("activebtn");  // adding active class
});



// Clicked to show data for aboutme
$(document).ready(function () {
    $(".fuck li").click(function () {

        // find which li was clicked
        var classClicked = $(this).attr('id');

        //remove "show" class from any previously clicked li
        $(".content div").removeClass("show");

        //add show class to the div corresponding the clicked li
        $(".content-" + classClicked).addClass("show");
    });
});
$("#itemgroup").on('click', 'li', function () {
    $("#itemgroup li.activea").removeClass("activea");
    $(this).addClass("activea");  // adding active class
});