//Adobe Fonts

(function(d) {
var config = {
    kitId: 'phg4osz',
    scriptTimeout: 3000,
    async: true
    },
h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
})(document)

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

        timer = setTimeout(function () {
            location.reload();
        }, 10);
    });