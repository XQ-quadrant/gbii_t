
(function() {
    "use strict";

    // custom scrollbar

    $("html").niceScroll({styler:"fb",cursorcolor:"#65cea7", cursorwidth: '6', cursorborderradius: '0px', background: '#424f63', spacebarenabled:false, cursorborder: '0',  zindex: '1000'});

    $(".left-side").niceScroll({styler:"fb",cursorcolor:"#65cea7", cursorwidth: '3', cursorborderradius: '0px', background: '#424f63', spacebarenabled:false, cursorborder: '0'});


    $(".left-side").getNiceScroll();
    if ($('body').hasClass('left-side-collapsed')) {
        $(".left-side").getNiceScroll().hide();
    }



    // Toggle Left Menu
   jQuery('.menu-list > a').click(function() {
      
      var parent = jQuery(this).parent();
      var sub = parent.find('> ul');
      
      if(!jQuery('body').hasClass('left-side-collapsed')) {
         if(sub.is(':visible')) {
            sub.slideUp(200, function(){
               parent.removeClass('nav-active');
               jQuery('.main-content').css({height: ''});
               mainContentHeightAdjust();
            });
         } else {
            visibleSubMenuClose();
            parent.addClass('nav-active');
            sub.slideDown(200, function(){
                mainContentHeightAdjust();
            });
         }
      }
      return false;
   });

   function visibleSubMenuClose() {
      jQuery('.menu-list').each(function() {
         var t = jQuery(this);
         if(t.hasClass('nav-active')) {
            t.find('> ul').slideUp(200, function(){
               t.removeClass('nav-active');
            });
         }
      });
   }

   function mainContentHeightAdjust() {
      // Adjust main content height
      var docHeight = jQuery(document).height();
      if(docHeight > jQuery('.main-content').height())
         jQuery('.main-content').height(docHeight);
   }

   //  class add mouse hover
   jQuery('.custom-nav > li').hover(function(){
      jQuery(this).addClass('nav-hover');
   }, function(){
      jQuery(this).removeClass('nav-hover');
   });


   // Menu Toggle
   jQuery('.toggle-btn').click(function(){
       $(".left-side").getNiceScroll().hide();
       
       if ($('body').hasClass('left-side-collapsed')) {
           $(".left-side").getNiceScroll().hide();
       }
      var body = jQuery('body');
      var bodyposition = body.css('position');

      if(bodyposition != 'relative') {

         if(!body.hasClass('left-side-collapsed')) {
            body.addClass('left-side-collapsed');
            jQuery('.custom-nav ul').attr('style','');

            jQuery(this).addClass('menu-collapsed');

         } else {
            body.removeClass('left-side-collapsed chat-view');
            jQuery('.custom-nav li.active ul').css({display: 'block'});

            jQuery(this).removeClass('menu-collapsed');

         }
      } else {

         if(body.hasClass('left-side-show'))
            body.removeClass('left-side-show');
         else
            body.addClass('left-side-show');

         mainContentHeightAdjust();
      }

   });
   

   searchform_reposition();

   jQuery(window).resize(function(){

      if(jQuery('body').css('position') == 'relative') {

         jQuery('body').removeClass('left-side-collapsed');

      } else {

         jQuery('body').css({left: '', marginRight: ''});
      }

      searchform_reposition();

   });

   function searchform_reposition() {
      if(jQuery('.searchform').css('position') == 'relative') {
         jQuery('.searchform').insertBefore('.left-side-inner .logged-user');
      } else {
         jQuery('.searchform').insertBefore('.menu-right');
      }
   }

    // panel collapsible
    $('.panel .tools .fa').click(function () {
        var el = $(this).parents(".panel").children(".panel-body");
        if ($(this).hasClass("fa-chevron-down")) {
            $(this).removeClass("fa-chevron-down").addClass("fa-chevron-up");
            el.slideUp(200);
        } else {
            $(this).removeClass("fa-chevron-up").addClass("fa-chevron-down");
            el.slideDown(200); }
    });

    $('.todo-check label').click(function () {
        $(this).parents('li').children('.todo-title').toggleClass('line-through');
    });
    $('.dropdown ').mousemove(function () {
        //alert('ccc');
        $(this).toggle(
            function(){
                $(this).addClass('open');
             },
            function(){
                $(this).removeClass('open');
            });
    });
    $('.items-a').click(function () {
        //alert(this.children('a').href);
        window.location.href= this.href;

    });
    $('.logout').click(function () {
        //alert('ccc');
        $(this).children('form').submit();
        //window.location.href=this.herf;

    });
    /*$('.dropdown ').toggle(
        function(){
            $(this).addClass('open');
        },
        function(){
            $(this).removeClass('open');
        });
*/
    $(document).on('click', '.todo-remove', function () {
        $(this).closest("li").remove();
        return false;
    });

    $("#sortable-todo").sortable();


    // panel close
    $('.panel .tools .fa-times').click(function () {
        $(this).parents(".panel").parent().remove();
    });



    // tool tips

    $('.tooltips').tooltip();

    // popovers

    $('.popovers').popover();


    $('.video-text a').text(function(){
        var p = $(this).parent('.video-text')
        var box_width = parseInt(p.width());
        var font_size = parseInt(p.css('font-size'));
        var num = parseInt(box_width/font_size);
        var str = $(this).text();//
        if(str.length>num){
            var result = str.substring(0,num-1);
            //$(this).children('a').text(result+'…')
            return result+'…';
        }
    });
    $('.video-text p').text(function(){
        var p = $(this).parent('.video-text')
        var box_width = parseInt(p.width());
        var font_size = parseInt(p.css('font-size'));
        var num = parseInt(box_width/font_size);
        var str = $(this).text();//
        if(str.length>num){
            var result = str.substring(0,num-1);
            //$(this).children('a').text(result+'…')
            return result+'…';
        }
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
                    //alert(wthis.attr('href'));
                    wthis.parents('.img-item').remove();
                }
            }
            else
            {
               // document.write("佩服佩服");
            }
        });

    });



})(jQuery);