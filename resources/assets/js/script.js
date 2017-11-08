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
     if(w < 768){
         $('.collapse-link').each(function(index,elem){
             $(elem).addClass('collapsed')
         });
     }
}

resize();
addCollapsed();