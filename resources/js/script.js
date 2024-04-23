$(document).ready(function () {
    $('.dropdown').hover(function () {
        $(this).find('.dropdown-menu').first().stop(true, true).delay(100).fadeIn(300);
    }, function () {
        $(this).find('.dropdown-menu').first().stop(true, true).delay(100).fadeOut(300);
    });
});

$(document).ready(function () {
    $('.dropend').hover(function () {
        $(this).find('.dropdown-menu').first().stop(true, true).delay(100).fadeIn(300);
    }, function () {
        $(this).find('.dropdown-menu').first().stop(true, true).delay(100).fadeOut(300);
    });
});