// JavaScript Document



//sticky effect when you scroll window sticky fix on top

var menu = document.querySelector('#nav-sticky');
var origOffsetY = menu.offsetTop+48;

if($(window).width()>750 && $(window).width()<1000){
var origOffsetY = menu.offsetTop+48;	
}	

else if($(window).width()>640 && $(window).width()<750){
var origOffsetY = menu.offsetTop+48;	
}

else if($(window).width()<480){
var origOffsetY = menu.offsetTop+48;	
}
	
	
function scroll () {
	
if ($(window).scrollTop() > origOffsetY) {
$('#nav-sticky').addClass('sticky');
$('#add-mrgn-sticky').addClass('sticky1');


} else {
$('#nav-sticky').removeClass('sticky');
$('#add-mrgn-sticky').removeClass('sticky1');


} 

}

document.onscroll = scroll;

//end






// Go To Top JS //
$(document).ready(function(){
     
    $(window).scroll(function () {
        if ($(this).scrollTop() != 0) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    }); 
$('#toTop').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
});
});
//


    // Submenu Script //
    $(document).ready(function(){
        $('.dropdown-submenu a').on("click", function(e){
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
            });
        }); 
        
        