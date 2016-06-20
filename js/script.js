jQuery(document).ready(function(){
"use strict";

/* =============== Sign in & Registration Forms ===================== */
$(".open-signup").on("click",function(){
    $(".popup").fadeIn();
    $("html,body").addClass("stop");
    $(".popup-inner.signin-form").removeClass('active');
    setTimeout(function(){
        $(".popup-inner.registration-form").addClass('active');
    },500);
    return false;
});
$(".open-signin").on("click",function(){
    $(".popup").fadeIn();
    $("html,body").addClass("stop");
    $(".popup-inner.registration-form").removeClass('active');
    setTimeout(function(){
        $(".popup-inner.signin-form").addClass('active');
    },500);
    return false;
});
$(".popup").on("click",function(){
    $(this).fadeOut();
    $("html,body").removeClass("stop");
    $(".popup-inner.registration-form").removeClass('active');
    $(".popup-inner.signin-form").removeClass('active');
});
$(".popup-inner").on("click",function(e){
    e.stopPropagation();
});

/* =============== Ajax Contact Form ===================== */
$('#contactform').submit(function(){
    var action = $(this).attr('action');
    $("#message").slideUp(750,function() {
    $('#message').hide();
        $('#submit')
        .after('<img src="images/ajax-loader.gif" class="loader" />')
        .attr('disabled','disabled');
    $.post(action, {
        name: $('#name').val(),
        email: $('#email').val(),
        comments: $('#comments').val(),
        verify: $('#verify').val()
    },
        function(data){
            document.getElementById('message').innerHTML = data;
            $('#message').slideDown('slow');
            $('#contactform img.loader').fadeOut('slow',function(){$(this).remove()});
            $('#submit').removeAttr('disabled');
            if(data.match('success') != null) $('#contactform').slideUp('slow');

        }
    );
    });
    return false;
});




/*=================== Dropdown Anmiation ===================*/ 
var drop = $('nav > ul > li > ul > li') 
$('nav > ul > li').each(function(){
    var delay = 0;
    $(this).find(drop).each(function(){
    $(this).css({transitionDelay: delay+'ms'});
    delay += 50;
    });
});  
var drop2 = $('nav > ul > li > ul > li > ul > li') 
$('nav > ul > li > ul > li').each(function(){
    var delay2 = 0;
    $(this).find(drop2).each(function(){
    $(this).css({transitionDelay: delay2+'ms'});
    delay2 += 50;
    });
});  



/*=================== LightBox ===================*/  
$(function() {
    var foo = $('.lightbox');
    foo.poptrox({
        usePopupCaption: true
    });
});



$(".responsive-bar > span").on("click",function(){
    $(".responsive-menu").addClass("slidein");
});
$("html").on("click",function(){
    $(".responsive-menu").removeClass("slidein");
});
$(".responsive-header").on("click", function(e){
    e.stopPropagation();
}); 


$(".responsive-menu li > ul").parent().addClass("has-dropdown");
$(".responsive-menu .has-dropdown > a").bind('touchstart click', function(){
    $(this).parent().siblings().children("ul").slideUp();
    $(this).parent().children("ul").slideToggle();
    $(this).parent().siblings().find("a").removeClass("active");
    $(this).toggleClass("active");
    return false;
});




    /*=================== Sticky Header ===================*/   
    var header_stick;
    if($("header").hasClass('stick')){
        var header_stick = $("header").offset().top;
    }
    var header_height = $("header.stick").innerHeight();
    $(".header-height").css({
        "height":header_height
    });
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > header_stick) {
            $("header.stick").addClass("sticky");
        } else {
            $("header.stick").removeClass("sticky");
        }
    });
    

});


$(window).load(function(){
$('.parallax').scrolly({bgParallax: true});

});






