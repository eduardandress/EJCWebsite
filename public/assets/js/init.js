(function($){
  $(function(){

    $('.button-collapse').sideNav();
     $('body').materialScrollTop({
     // OPTIONS HERE

    });

    $('.goTo').click(function() {
        var el = $(this);
        var menu = el.closest("ul");
        var li =  el.closest("li");
        var target =  el.attr("href");

        menu.find("li").not(li).removeClass("active");
        li.addClass("active")

        if ($(target).length) {
          $('html, body').animate({
            scrollTop: $(target).offset().top - 50
          }, 1000);
          return false;
        }
     
    });


  }); // end of document ready
})(jQuery); // end of jQuery name space