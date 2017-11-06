$(document).ready(function(){
    
    $(window).scroll(function(){
         $(".navAp").slideUp(200);
         $(".page1-a-a").css("min-height", "120px");
         $(".page1-a-a-a").css("min-height", "150px");
         $(".nav>a").css("border-bottom" , "0px");
       
       
});
    $(".nav > *:first-child , .footer1 .fabout").click(function(){
      $(".body_a").css('display','none');
        $(".dainos").css('display','none');
        $(".aboutus").css('display', 'block');
        $(".cont").css('display','none');
         $(".cal").css('display','none');
         $(".info").css('display','none'); 
    });
    
  
    
     $(".nav .songs, .footer1 .fdainos ").click(function(){
        $(".body_a").css('display','none');
        $(".aboutus").css('display', 'none');
         $(".dainos").css('display','block');
         $(".cont").css('display','none');
         $(".cal").css('display','none');
          $(".info").css('display','none'); 
    });
   

    $(".nav .contakt, .footer1 .fkont").click(function(){
        $(".body_a").css('display','none');
        $(".aboutus").css('display', 'none');
         $(".dainos").css('display','none');
         $(".cont").css('display','block');
        $(".cal").css('display','none');
         $(".info").css('display','none');
    });

    
      $(".nav .calen, .footer1 .fcal").click(function(){
        $(".body_a").css('display','none');
        $(".aboutus").css('display', 'none');
         $(".dainos").css('display','none');
         $(".cont").css('display','none');
        $(".cal").css('display','block');
          $(".info").css('display','none');
    });

       $(".infol, .footer1 .finfo").click(function(){
        $(".body_a").css('display','none');
        $(".aboutus").css('display', 'none');
         $(".dainos").css('display','none');
         $(".cont").css('display','none');
        $(".cal").css('display','none');
        $(".info").css('display','block');
    });
    
      $(".papild").click(function(){
        $(".body_a").css('display','none');
        $(".aboutus").css('display', 'none');
         $(".dainos").css('display','none');
         $(".cont").css('display','none');
         $(".cal").css('display','none');
          $(".info").css('display','none');
    });
    
    

    
    
    $(".hrefiei, .section-a-b > *").click(function(){
        $(".ieiti").css('display', 'block');
        $(".section-a .href").css('display', 'none');
        $(".section-a-c").css('visibility', 'hidden');
        });
    
    
     if($(window).width() > 800) {
    
    $('.nav .about').hover(
    function(){$(this).addClass("foc");} ,
    function(){$(this).removeClass("foc");});
    
                 
     $('.nav .songs').hover(
    function(){$(this).addClass("foc");} ,
    function(){$(this).removeClass("foc");});
     
     $('.nav .calen').hover(
    function(){$(this).addClass("foc");} ,
    function(){$(this).removeClass("foc");});
      
     $('.nav .contakt').hover(
    function(){$(this).addClass("foc");} ,
    function(){$(this).removeClass("foc");});
};
    
var width = 0;

$(window).resize(function() {
    
    width = $(window).width();
    
    if(width > 800) {
    
        $('.nav .about').hover(
        function(){$(this).addClass("foc");} ,
        function(){$(this).removeClass("foc");});


         $('.nav .songs').hover(
        function(){$(this).addClass("foc");} ,
        function(){$(this).removeClass("foc");});

         $('.nav .calen').hover(
        function(){$(this).addClass("foc");} ,
        function(){$(this).removeClass("foc");});

         $('.nav .contakt').hover(
        function(){$(this).addClass("foc");} ,
        function(){$(this).removeClass("foc");});
        
    } else {
        width = 0;
        
        $('.nav .about').hover(
        function(){$(this).removeClass("foc");});


         $('.nav .songs').hover(
        function(){$(this).removeClass("foc");});

         $('.nav .calen').hover(
        function(){$(this).removeClass("foc");});

         $('.nav .contakt').hover(
        function(){$(this).removeClass("foc");});
    }
    
});
    
       
     var win = $("h2").width();   
     var leftRu =  $("h2").width() - 200 - (win-300)*1/2;
     var leftLenk= 700 - ( 800 - win);
       
    /* spaudziu LT kalba*/
    $(".lt").click(function() {
        $( ".ru img" ).animate({
            left: "-=" + leftRu + "px",
            top:"+=103px"
        }, 800, function(){
            location.replace('dainosLt.php')}),
       $( ".lenk img" ).animate({
            left: "-=" + leftLenk + "px",
            top:"+=207px"}, 800);});
    
    /* spaudziu RU kalba*/
 
   $(".ru").click(function() {
        $( ".ru img" ).animate({
            left: "-=" + leftRu + "px",
            top:"+=103px"
            }, 800, function(){
                location.replace('dainosRu.php')}),
       $( ".lenk img" ).animate({
            left: "-=" + leftLenk + "px",
            top:"+=207px"}, 800);});
    
    /* spaudziu LENK kalba*/
    
     $(".lenk").click(function() {
        $( ".ru img" ).animate({
            left: "-=" + leftRu + "px",
            top:"+=103px"}, 800, function(){
            location.replace('dainosPl.php') }),
        $( ".lenk img" ).animate({
            left: "-=" + leftLenk + "px",
            top:"+=207px"}, 800);});
    
    
    /* dainu zodziai ir akordai*/


$( "select" ).change(function() {
    $( "select option:selected" ).each(function() {
        $(".slova").text( $( "select option:selected" ).val() ),
        $(".akkordai").text( $( "select option:selected" ).data("value") ),
        $(".ak").text("Akordai:"),
        $( ".youtube a").attr('href', $( "select option:selected" ).data("url")),
        $( ".youtube a").html( $( "select option:selected" ).data("url"));
});
        resize.resizedIframe();
   });
    
    $(window).resize(function() {
        
var heiP= $(".id qetizod").height();
var heiD= $(".dainos1").height();
        
    $(".dainos1").css('min-height', heiP + 'px');
});
    
    /* iframe height*/
    
    if (window.parent) {
        resize.resizedIframe();
        $(window).resize(function () {
            resize.resizedIframe();
        });
    }
    });

var resize = {
    body: $('body'),
    resizedIframe: function () {
        if (window.parent) {
           var height = $('body').height();
           window.parent.resize.resizeIframe(height);
        }
    },
    resizeIframe: function (height) {
        $('#iframe').css({height: height + 'px'});
        
    }
};

