function resize() {
    var gsuit = $('#gsuit');
    var twitter = $('#twitter-feed');
    var school = $('#school-info');
    var w = $(window).width();
    if (w >= 768) {
        gsuit.addClass('show')
        twitter.addClass('show')
        school.addClass('show')
    }
}

function addCollapsed(){
     var w = $(window).width();
     if(w >= 768){
         $('.collapse-link').each(function(index,elem){
             $(elem).removeClass('collapsed')
         });
     }
}

function openOnlyOneOnMobile(){
    $(".collapse-link").click(function (elem) {
        if ($(window).width() <= 767) {
            $(".collapse-block").each(function(index,elem){
                $(elem).collapse('hide');
            });
            $(elem.currentTarget).collapse('show');
        }
    });
}
function openSchoolInfoByDafaultOnMobile(){
    if ($(window).width() <= 767) {
        $(".collapse-block").not('#school-info').each(function (index, elem) {
            $(elem).collapse('hide');
        });
    }
}

// resize();
// addCollapsed();
openOnlyOneOnMobile();
openSchoolInfoByDafaultOnMobile()
