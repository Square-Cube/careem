$(document).ready(function() {
    
});

var loader = new PxLoader(),
img_logo = loader.addImage('../../media/img/logo.png');

loader.addProgressListener(function (e) {
    $('.web_loader .web_percent .web_bar').stop().animate({
        width: e.completedCount / e.totalCount  * 100 +'%'
    }).promise().done(function(){
        if(e.completedCount === e.totalCount) {
            $('.web_loader').fadeOut(100);
            setTimeout(function(){
                $('.fullContainer').animate({opacity: '1'}, 100, 'swing');
            }, 200);
        }
    });
});

// begin downloading images 
loader.start();