/* Sidebar Menu*/
$(document).ready(function () {
  $('.nav > li > a').click(function(){
    if ($(this).attr('class') != 'active'){
      $('.nav li ul').slideUp();
      $(this).next().slideToggle();
      $('.nav li a').removeClass('active');
      $(this).addClass('active');
    }else if($(this).attr('class') == 'active'){
        //$('.nav li ul').slideToggle;
        $(this).next().slideUp();
        //$('.nav li a').removeClass('active');
        $(this).removeClass('active');
    }
  });


});
$(document).ready(function () {
    /*$('.nav > li > a').hover(function(){

        $('.dropdown-menu').show();
    });*/
    /*$('.dropdown-toggle').focus(function(){
        $('.dropdown-menu').slideDown();
        this.addClass('active');
    });*/
    $('.dropdown-toggle').blur(function(){
        $('.dropdown-menu').slideUp();
        this.removeClass('active');
    });

    /*$('.dropdown-toggle').mouseout(
        function(){
            $('.dropdown-menu').hide();
            $('.dropdown-toggle').removeClass('active');
        }
    );*/
    /*if(.onHover==false){
        $('.dropdown-menu').hide();
    }*/

});

/* Top Stats Show Hide */
$(document).ready(function(){
    $("#topstats").click(function(){
        $(".topstats").slideToggle(100);
    });
});


/* Sidepanel Show-Hide */
$(document).ready(function(){
    $(".sidepanel-open-button").click(function(){
        $(".sidepanel").toggle(100);
    });
});



/* Sidebar Show-Hide On Mobile */
$(document).ready(function(){
    $(".sidebar-open-button-mobile").click(function(){
        $('.topmenu').toggle();
        /*$(".sidebar").toggle(150);*/
    });
});
/*$(document).ready(function(){
    $(".profilebox").click(function(){
        $('.dropdown-menu').toggle();
        /!*$(".sidebar").toggle(150);*!/
    });
});*/


/* Sidebar Show-Hide */
$(document).ready(function(){

    $('.sidebar-open-button').on('click', function(){
        if($('.sidebar').hasClass('hidden')){
            $('.sidebar').removeClass('hidden');
            $('.content').css({
                'marginLeft' : 250
            });  
        }else{
            $('.sidebar').addClass('hidden');
            $('.content').css({
                'marginLeft' : 0
            });    
        }
    });

});


/* ===========================================================
PANEL TOOLS
===========================================================*/
/* Minimize */
$(document).ready(function(){
  $(".panel-tools .minimise-tool").click(function(event){
  $(this).parents(".panel").find(".panel-body").slideToggle(100);

  return false;
}); 

 }); 

/* Close */
$(document).ready(function(){
  $(".panel-tools .closed-tool").click(function(event){
  $(this).parents(".panel").fadeToggle(400);

  return false;
}); 

 }); 

 /* Search */
$(document).ready(function(){
  $(".panel-tools .search-tool").click(function(event){
  $(this).parents(".panel").find(".panel-search").toggle(100);

  return false;
}); 

 }); 




/* expand */
$(document).ready(function(){

    $('.panel-tools .expand-tool').on('click', function(){
        if($(this).parents(".panel").hasClass('panel-fullsize'))
        {
            $(this).parents(".panel").removeClass('panel-fullsize');
        }
        else
        {
            $(this).parents(".panel").addClass('panel-fullsize');
 
        }
    });

});


/* ===========================================================
Widget Tools
===========================================================*/


/* Close */
$(document).ready(function(){
  $(".widget-tools .closed-tool").click(function(event){
  $(this).parents(".widget").fadeToggle(400);

  return false;
}); 

 }); 


/* expand */
$(document).ready(function(){

    $('.widget-tools .expand-tool').on('click', function(){
        if($(this).parents(".widget").hasClass('widget-fullsize'))
        {
            $(this).parents(".widget").removeClass('widget-fullsize');
        }
        else
        {
            $(this).parents(".widget").addClass('widget-fullsize');
 
        }
    });

});

/* Kode Alerts */
/* Default */
$(document).ready(function(){
  $(".kode-alert .closed").click(function(event){
  $(this).parents(".kode-alert").fadeToggle(350);

  return false;
}); 

 }); 


/* Click to close */
$(document).ready(function(){
  $(".kode-alert-click").click(function(event){
  $(this).fadeToggle(350);

  return false;
}); 

 });
$(document).ready(function(){

    $(".img-edit a").click(function(event){
        var wthis = $(this);

        var r=confirm("确认删除该图片？");
        if (r==true)
        {
            //alert((wthis).attr('href'));
           /* $.ajax({

                type: 'get',

                url: url ,

                data: data ,

                success: success ,

                dataType: dataType

            });*/
            if($.get(wthis.attr('href'))){
                alert(wthis.attr('href'));
                wthis.parents('.img-item').remove();
            }
        }
        else
        {
            document.write("佩服佩服");
        }
    });

});


/* Tooltips */
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

/* Popover */
$(function () {
  $('[data-toggle="popover"]').popover()
})


/* Page Loading */
$(window).load(function() {
  $(".loading").fadeOut(750);
})