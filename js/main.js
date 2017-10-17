$(document).ready(function(){
    
    $(window).scroll(function(){
        $(".page1-a-a").attr("class","page1-a-a-cr");
        $(".page1-a-a-a").attr("class","page1-a-a-a-cr") ;  
       
});
    $(".nav > *:first-child").click(function(){
        
        console.log("yes");
        
        $(".body_a").css('display','none');
        $(".aboutus").css('display', 'block');
    });

   });
                  