// validate register form
function validate_register_form() {

    var name = document.forms["register_form"]["name"].value; // get name
    var phone = document.forms["register_form"]["phone"].value; // get phone
    
    // if input is empty
    if (name == '' || name == null) {
        document.getElementById('register_error').innerHTML = "<p><strong>Name</strong> Required.</p>";
         $("#register_error").animate({opacity: 1, top: '-50px'}, 1000);
        setTimeout(function(){
            $("#register_error").animate({opacity:0, top: '-40px'}, 1000);
        }, 3000);
        document.forms["register_form"]["name"].focus();

        return false;
    }

    // if name formal
    var name_words = name.split(' ');
    if(name_words.length < 2) {

        document.getElementById('register_error').innerHTML = "<p>Full <strong>Name</strong> Required.</p>";
         $("#register_error").animate({opacity: 1, top: '-50px'}, 1000);
        setTimeout(function(){
            $("#register_error").animate({opacity:0, top: '-40px'}, 1000);
        }, 3000);
        document.forms["register_form"]["name"].focus();

        return false;

    }

    // if input is empty
    if (phone == '' || phone == null) {
        
        document.getElementById('register_error').innerHTML = "<p><strong>Phone</strong> Required.</p>";
         $("#register_error").animate({opacity: 1, top: '-50px'}, 1000);
        setTimeout(function(){
            $("#register_error").animate({opacity:0, top: '-40px'}, 1000);
        }, 3000);
        document.forms["register_form"]["phone"].focus();

        return false;
    }

    if(isNaN(phone)) {

        document.getElementById('register_error').innerHTML = "<p>Invalid <strong>Phone</strong>.</p>";
         $("#register_error").animate({opacity: 1, top: '-50px'}, 1000);
        setTimeout(function(){
            $("#register_error").animate({opacity:0, top: '-40px'}, 1000);
        }, 3000);
        document.forms["register_form"]["phone"].focus();

        return false;
    }

    if(phone.length != 11) {

        document.getElementById('register_error').innerHTML = "<p><strong>Phone</strong> Must be 11 Digits.</p>";
         $("#register_error").animate({opacity: 1, top: '-50px'}, 1000);
        setTimeout(function(){
            $("#register_error").animate({opacity:0, top: '-40px'}, 1000);
        }, 3000);
        document.forms["register_form"]["phone"].focus();

        return false;

    } 

    var first_digits = phone.substring(0, 3);
    var allowed_digits = ["010", "011", "012"];
    var check_digits = allowed_digits.indexOf(first_digits);
    if(check_digits == -1) {

        document.getElementById('register_error').innerHTML = "<p><strong>Phone</strong> Start with 010, 011 or 012.</p>";
         $("#register_error").animate({opacity: 1, top: '-50px'}, 1000);
        setTimeout(function(){
            $("#register_error").animate({opacity:0, top: '-40px'}, 1000);
        }, 6000);
        document.forms["register_form"]["phone"].focus();
       
        return false;
    }

}

$(document).ready(function() {
    
    var base_url = $('#base_url').attr('attr');
    
    // register form
    $('#register_form').ajaxForm({
        beforeSend: function() {
            //$('.loader').fadeIn();
        },
        success: function(response){
            //$('.loader').fadeOut();
            console.log(response);
            if(response == "duplicate_phone") {
                document.getElementById('register_error').innerHTML = "<p><strong>Phone</strong> already Registered.</p>";
                $("#register_error").animate({opacity: 1, top: '-50px'}, 1000);
                setTimeout(function(){
                    $("#register_error").animate({opacity:0, top: '-40px'}, 1000);
                }, 3000);
                document.forms["register_form"]["phone"].focus();
            } else {
                window.location.href = base_url+'index.php/home/wheel';
            }
        }
    });

});

var loader = new PxLoader(),
img_logo = loader.addImage('media/img/logo.png');

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