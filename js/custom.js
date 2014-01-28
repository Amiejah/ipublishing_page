$(function(){

    $('.select-choice').on("click", function(e){
        var $this       = $(this),
            hrefString  = $this.attr('href'),
            hrefID      = hrefString.split('#'),
            hiddenInput = $('input[name="option_choice"]'),
            formElement = $('form[name="send_mail"]'),
            formParent  = $(formElement).parent();

        $(formParent).removeClass('hide');

        // Update the value
        $(hiddenInput).val(hrefID[1]);

        e.preventDefault();
    });

    $('#progress_bar .ui-progress .ui-label').hide();
    $('#progress_bar .ui-progress').css('width', '7%');

    $('#progress_bar .ui-progress').animateProgress(43, function() {
        $(this).animateProgress(79, function() {
            setTimeout(function() {
                $('#progress_bar .ui-progress').animateProgress(100, function() {
                    $('.hide-choices').slideDown();
                });
            }, 2000);
        });
    });

});


(function(e){e.fn.animateProgress=function(t,n){return this.each(function(){e(this).animate({width:t+"%"},{duration:2e3,easing:"swing",step:function(t){var n=e(".ui-label",this),r=e(".value",n);Math.ceil(t)<20&&e(".ui-label",this).is(":visible")?n.hide():n.is(":hidden")&&n.fadeIn();if(Math.ceil(t)==100){n.text("Done");setTimeout(function(){n.fadeOut()},1e3)}else r.text(Math.ceil(t)+"%")},complete:function(e,t,r){n&&n.call(this,t,r)}})})}})(jQuery);
