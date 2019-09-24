$(document).ready(function(){
    var sn = document.getElementById("sticky_nav");
         if ($(this).scrollTop() > 50){ 
             $('#scroll').fadeIn();
             sn.style.top = "0" 
         } else { 
             $('#scroll').fadeOut(); 
             sn.style.top = "-80px"
         } 
     console.log($(this).scrollTop());
     $(window).scroll(function(){
       var sn = document.getElementById("sticky_nav");
         if ($(this).scrollTop() > 50){ 
             $('#scroll').fadeIn();
             sn.style.top = "0" 
         } else { 
             $('#scroll').fadeOut(); 
             sn.style.top = "-80px"
         } 
     }); 
     $('#scroll').click(function(){ 
         $("html, body").animate({ scrollTop: 0 }, 600); 
         return false; 
     }); 
   });

// TOGGLED SIDEBAR
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});