//// SETTINGS
let s;
function settings(){

};
//// EXPORT FUNCTION
export function init(){
    settings();
    bindUIActions();
}
//// ACTIONS
function bindUIActions(){

    $('.two-col__co-video').on('click', function() {
        $('.video-modal').addClass('is-open');
        $('body').addClass('modal-active');
        var link = $(this).find('.two-col__video').data('src');
        link = link +'?autoplay=1';
        $('.lm-modal__iframe').attr('src', link);
    });

    $('.lm-modal__close').on('click', function() { 
        $('.video-modal').removeClass('is-open');
        $('body').removeClass('modal-active');
        $('.lm-modal__iframe').attr('src', '');
    });

}