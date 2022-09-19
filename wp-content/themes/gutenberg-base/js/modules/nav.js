//// SETTINGS
let s;
function settings(){
    s = {
        navTrigger: $('.site-header__menu-toggle'),
        navBurger: $('.hamburger'),
        nav: $('.site-header__nav')
    }
};
//// EXPORT FUNCTION
export function init(){
    settings();
    bindUIActions();
}
//// ACTIONS
function bindUIActions(){

    if($(window).width() > 1200) {

        $('#primary-menu .menu-item-has-children').on("mouseover", function () {
            $('.site-header__container').addClass('sub-menu-open');
            $(this).addClass('active');
        });

        $('#primary-menu .menu-item-has-children').on("mouseleave", function () {
            $('.site-header__container').removeClass('sub-menu-open');
            $(this).removeClass('active');
        });

    }
    if($(window).width() < 1200) {

        $('#primary-menu .menu-item-has-children').on("click", function () {
            $('.site-header__container').addClass('sub-menu-open');
        });

        $('.footer-menu > li.menu-item-has-children').each(function() {
            $(this).find('a').first().clone().prependTo($(this).find('.sub-menu').first());
        });

        var buttonText = $('.event a').html();
        $('.event a').html('');
        $('.event a').prependTo('.sticky-button__container');
        $('.sticky-button__container a:first-of-type').addClass('hidden');
        $('.sticky-button__container a:first-of-type').append('<div class="sticky-button__arrow white"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 13.7 7.5" style="enable-background:new 0 0 13.7 7.5;" xml:space="preserve"><path id="Arrow" d="M12.8,2.9L10,0H8.2l3.1,3.1H0v1.2h11.3L8.2,7.5H10l3.7-3.7L12.8,2.9z"/></svg></div><div class="sticky-button__text white"><p>' + buttonText + '</p></div>')
    }

    $('.site-header__mob-back').on('click', function() {
        $('.sub-menu').removeClass('is-open');
        $('.site-header__container').removeClass('sub-menu-open');
    });

    $('li.menu-item-has-children > a').on('click', function(e) {
        if($(window).width() < 1200) {
            e.preventDefault();
            $(this).parent().find('ul').addClass('is-open');

            if($(this).parent().parent().hasClass('footer-menu')) {
                $(this).parent().find('ul').slideToggle();
                $(this).toggleClass('menu-open');
            }
        }
    });

    s.navTrigger.on('click', function() {
        s.navBurger.toggleClass('open');
        s.navTrigger.toggleClass('is-open');
        s.nav.toggleClass('is-open');
        $('body').toggleClass('menu-open');
        $('.sub-menu').removeClass('is-open');
        $('.sticky-button__container a:first-of-type').toggleClass('hidden');
    });
}

//// FUNCTIONS