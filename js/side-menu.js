// WordPress追加

jQuery(function(){
    console.log("動作しました。");
});


//tab,sp時のサイドバー設定

jQuery('.p-bar__button, .c-button__close').on('click',function(){
    jQuery('.c-button__close, .l-main__right, .l-main__left, .l-main').toggleClass('is-open');
    jQuery('body').toggleClass('is-fixed')
});

let timer = 0;
let currentWidth = window.innerWidth;
    jQuery(window).on('resize',function(){
        if (currentWidth == window.innerWidth) {
            return;
        }
        if (timer > 0) {
            clearTimeout(timer);
        }

        timer = setTimeout(function() {
            location.reload();
        }, 10);
    });
