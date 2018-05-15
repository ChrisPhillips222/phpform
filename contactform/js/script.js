$(document).ready(function () {
    $('.dropdown-toggle').click(function (event) {
        event.stopPropagation();
        event.preventDefault();
        $('.nested-menu').toggleClass('active');

    });


    $('html').click( function (e) {
        $('.nested-menu').removeClass('active');
    });
});

$(document).ready(function () {
    $('.navbar-toggle').click(function (event) {
        event.stopPropagation();
        event.preventDefault();
        $('div#navbar').toggleClass('active');
    });
    $('html').click(function (e) {
        $('div#navbar').removeClass('active');
    });
});

