$(document).ready(function() {
    if($('.lightbox')[0]) {
        $('.lightbox').lightGallery();
    }

    $('body').on('click', '[data-action="tab-select"]', function (e) {
        e.preventDefault();

        var pane = $(this).attr('href');
        var label = $(this).text();
        var parent = $(this).closest('.tab-select');

        parent.find('.tab-select__current').text(label);
        parent.find('[data-action="tab-select"]').parent().removeClass('active');
        $(pane).parent().find('.tab-select-content__pane').removeClass('active');
        $(pane).addClass('active');
        $(this).parent().addClass('active');
    });


    $('body').on('click', '.tab-pane--animation-names > span', function(){
        var animation = $(this).text();
        var animateImg = $('.img-animation').find('img');
        if (animation === "hinge") {
            animationDuration = 2100;
        }
        else {
            animationDuration = 1200;
        }

        animateImg.removeAttr('class');
        animateImg.addClass('animated '+animation);

        setTimeout(function(){
            animateImg.removeClass(animation);
        }, animationDuration);
    });


    $('body').on('click', '.sidebar__links > li > ul > a', function (e) {

    });
});