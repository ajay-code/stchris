(function () {
    $(window).on('resize', function () {
        resize();
    })
})();

function resize() {
    var gsuit = $('#gsuit');
    var twitter = $('#twitter-feed');
    var school = $('#school-info');
    var w = $(window).width();
    if (w >= 768) {
        gsuit.addClass('show')
        twitter.addClass('show')
        school.addClass('show')
    } else {
        gsuit.removeClass('show');
        twitter.removeClass('show');
        school.removeClass('show');
    }
}

resize();