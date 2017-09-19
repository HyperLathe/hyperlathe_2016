
$(function() {

    if(Modernizr.history){

    var $mainContent = $("#main-content"),
    	$el;
    

    $("nav, #home").on("click", "a", function() {
        _link = $(this).attr("href");
        history.pushState(null, null, _link);
        loadContent(_link);
        	if (document.documentElement.clientWidth < 768) {		
        		document.getElementById("nav-trigger").click();
			}
        return false;
    });



    function loadContent(href){
        $mainContent
                .find("#guts")
                .fadeOut(100, function() {
                    $('#guts').text('loading...');
                    $mainContent.hide().load(href + " #guts", function() {
                        $mainContent.fadeIn(100);
                        $("nav a").removeClass("current");
                        console.log(href);
                        $("nav a[href$='" + href + "']").addClass("current");
         	               if (document.documentElement.clientWidth < 768) {
								$('#myNavmenu').offcanvas('hide');
    						}
                    });

    	
                });
    }
    
    $(window).bind('popstate', function(){
       _link = location.pathname.replace(/^.*[\\\/]/, ''); //get filename only
       loadContent(_link);
    });

} // otherwise, history is not supported, so nothing fancy here.

    
});
