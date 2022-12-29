$(document).ready(function () {

    "use strict";
    /*---------------------------------------------*
     * Mobile menu
     ---------------------------------------------*/
    $('#mm').click(function (e) {
        e.preventDefault();
        var ss='sr';
        if($(window).width()<750)
            ss='sr2';

        $('html ,body').animate({
            scrollTop:$('#'+ss).offset().top-40
            }
            ,1000);
    });

$('.nav li a').click(function () {
    $(this).addClass('active');
});

    $(document).on('click', '.navbar-collapse.in', function (e) {
        if ($(e.target).is('a')) {
            $(this).collapse('hide');
        }
    });

    /*---------------------------------------------*
     * STICKY scroll
     ---------------------------------------------*/

    $.localScroll();



    /*---------------------------------------------*
     * WOW
     ---------------------------------------------*/

    var wow = new WOW({
        mobile: false // trigger animations on mobile devices (default is true)
    });
    wow.init();


    /*---------------------------------------------*
     * Counter 
     ---------------------------------------------*/

    $('.statistic-counter').counterUp({
        delay: 10,
        time: 2000
    });






    /* ---------------------------------------------------------------------
     Carousel
     ---------------------------------------------------------------------= */

        $('#myCollapsible').on('hidden.bs.collapse', function()
        {
            alert('Collapsible element has been completely closed.');
        });
        $('.main_home_slider').owlCarousel({
        responsiveClass: true,
        autoplay: false,
        items: 1,
        loop: true,
        dots: true,
        nav: false,
        navText: [
            "<i class='lnr lnr-chevron-left'></i>",
            "<i class='lnr lnr-chevron-right'></i>"
        ],
        autoplayHoverPause: true

    });




// main-menu-scroll

    //jQuery(window).scroll(function () {
      //  var top = jQuery(document).scrollTop();
       // var height = 40;
        //alert(batas);

/*        if (top > height) {
            jQuery('.navbar-fixed-top').addClass('menu-scroll');
        } else {
            jQuery('.navbar-fixed-top').removeClass('menu-scroll');
        }*/
    //});



// scroll Up
    $(window).scroll(function () {
        if ($(this).scrollTop() > 600) {
            $('.scrollup').fadeIn('slow');
        } else {
            $('.scrollup').fadeOut('slow');
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({scrollTop: 0}, 1000);
        return false;
    });



//    $('#menu').slicknav();

    $('#mixcontent').mixItUp({
        animation: {
            animateResizeContainer: false,
            effects: 'fade rotateX(-45deg) translateY(-10%)'
        }
    });




    $('#img').wrap('<div class="wrap"></div>');
     $('.wrap').prepend('<span>أضافة صورة</span>')
      $('.wrap').append('<i class="fa fa-upload fa-lg"></i>')
      $('#img').change(function(){
          $(this).prev('span').text($(this).val());

    });
    
    
function validphone(){
    var phone=$('#phone').val();
    if(Number(phone) && phone.length == 11)
    { 
        return true;
    }
    else 
    return false;
    }

    $('[required]').blur(function(){
     if($(this).val()=='')
     {
         $(this).next('p').fadeIn(1000);
         $(this).css('border-color','red');
         
     }
     else
     {
        $(this).css('border-color','black'); 
         $(this).next('p').fadeOut(1000);
     }
    });

   $('#next').click(function(){
    if( $('[required]').val()!='')
{
    
    
    if(validphone())
    {
    $('this').hide();
        $('#data').hide();
        $('#panel').delay(1000).slideDown(2000); 
        $('#order').fadeIn(9000);
    }
    else 
    {
         $('#phone').next('p').text('رقم غير صحيح');
         $('#phone').next('p').fadeIn();


    }
    
    }


       else
{

       $('#message1').fadeIn(100);
       if($('[required]').val()==''){
        $('[required]').css('border-color','red');
       }
    }
    });

    
    //End
$('#mainForm').on('submit',function(e){
   // e.preventDefault();
    
    $.ajax({
        url:'upload.php',
        success:function(data){
         $('#photo').val(data);
          }
 });   
 $('#data').hide();  
 return true;
   });

});