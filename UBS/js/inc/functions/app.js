'use strict';

/*------------------------------------------------
    Page Loader
-------------------------------------------------*/
$(window).on('load', function () {
    setTimeout(function () {
        $('.page-loader').fadeOut();
    }, 500);
});

/*------------------------------------------------
    Header
-------------------------------------------------*/
$(window).on('scroll', function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 20) {
        $('.header').addClass('header--scrolled');
    } else {
        $('.header').removeClass('header--scrolled');
    }
});


$(document).ready(function () {

    /*------------------------------------------------
        Clock
    -------------------------------------------------*/
    if($('.clock')[0]) {
        var newDate = new Date();
        newDate.setDate(newDate.getDate());

        setInterval( function() {
            var seconds = new Date().getSeconds();
            $('.sec').html(( seconds < 10 ? '0' : '' ) + seconds);
        },1000);

        setInterval( function() {
            var minutes = new Date().getMinutes();
            $('.min').html(( minutes < 10 ? '0' : '' ) + minutes);
        },1000);

        setInterval( function() {
            var hours = new Date().getHours();
            $('.hours').html(( hours < 10 ? '0' : '' ) + hours);
        }, 1000);
    }


    /*------------------------------------------------
        Theme Switch
    -------------------------------------------------*/
    $('body').on('change', '.theme-switch input:radio', function () {
        var theme = $(this).val();

        $('body').attr('data-sa-theme', theme);
    });


    /*------------------------------------------------
        Search
    -------------------------------------------------*/

    // Active Stat
    $('body').on('focus', '.search__text', function () {
        $(this).closest('.search').addClass('search--focus');
    });

    // Clear
    $('body').on('blur', '.search__text', function () {
        $(this).val('');
        $(this).closest('.search').removeClass('search--focus');
    });


    /*------------------------------------------------
        Sidebar toggle menu
    -------------------------------------------------*/
    $('body').on('click', '.navigation__sub > a', function (e) {
        e.preventDefault();

        $(this).parent().toggleClass('navigation__sub--toggled');
        $(this).next('ul').slideToggle(250);
    });


    /*------------------------------------------------
        Form group bar
    -------------------------------------------------*/
    if($('.form-group--float')[0]) {
        $('.form-group--float').each(function () {
            var p = $(this).find('.form-control').val()

            if(!p.length == 0) {
                $(this).find('.form-control').addClass('form-control--active');
            }
        });

        $('body').on('blur', '.form-group--float .form-control', function(){
            var i = $(this).val();

            if (i.length == 0) {
                $(this).removeClass('form-control--active');
            }
            else {
                $(this).addClass('form-control--active');
            }
        });
    }
});