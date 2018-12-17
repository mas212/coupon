/**
*
*@author : hariyanto
*custome : libarary traditional FE jquery
*industry : media digital
*version : 0.1 
*/
$(document).ready(function(){
	$(".dropdown").hover(
	    function() { $('.dropdown-menu', this).fadeIn("fast");
	    },
	    function() { $('.dropdown-menu', this).fadeOut("fast");
	});
	//filter product list
	$('.collapse').on('shown.bs.collapse', function(){
		$(this).parent()
			.find(".glyphicon-plus")
			.removeClass("glyphicon-plus")
			.addClass("glyphicon-minus");
		}).on('hidden.bs.collapse', function(){
			$(this).parent()
			.find(".glyphicon-minus")
			.removeClass("glyphicon-minus")
			.addClass("glyphicon-plus");
	});
    //product detail
    $(".mCustomScrollbar").mCustomScrollbar({axis:"x"});
});

$(document).ready(function(e){
    var scrollPos = $(this).scrollTop();
    if(scrollPos > 100){
        $('#scrollToTop').addClass('.hide');
    }else{
        $('#scrollToTop').removeClass('.hide');
    }
});