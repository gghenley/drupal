!function(e,a){"use strict";a.behaviors.atFS={attach:function(a,i){var s=i[i.ajaxPageState.theme].at_slideshows;for(var t in s)if(s.hasOwnProperty(t)){var o=s[t];o.controlnav&&e(o.slideshow_class).addClass("has-pager"),o.directionnav&&e(o.slideshow_class).addClass("has-direction-nav"),o.as_carousel&&e(o.slideshow_class).addClass("is-carousel"),e(o.slideshow_class).flexslider({start:function(a){e(".flexslider").resize().removeClass("loading")},animation:o.animation?o.animation:"slide",direction:o.direction?o.direction:"horizontal",smoothHeight:!!o.smoothheight&&o.smoothheight,slideshowSpeed:o.slideshowspeed?parseFloat(o.slideshowspeed):4e3,animationSpeed:o.animationspeed?parseFloat(o.animationspeed):600,controlNav:!!o.controlnav&&o.controlnav,directionNav:!!o.directionnav&&o.directionnav,itemWidth:o.itemwidth?parseFloat(o.itemwidth):0,itemMargin:o.itemmargin?parseFloat(o.itemmargin):0,minItems:o.minitems?parseFloat(o.minitems):0,maxItems:o.maxitems?parseFloat(o.maxitems):0,move:o.move?parseFloat(o.move):0,pauseOnAction:!!o.pauseonaction&&o.pauseonaction,pauseOnHover:!!o.pauseonhover&&o.pauseonhover,animationLoop:!!o.animationloop&&o.animationloop,reverse:!!o.reverse&&String(o.reverse),randomize:!!o.randomize&&o.randomize,slideshow:!!o.autostart&&o.autostart,initDelay:o.initdelay?parseFloat(o.initdelay):0,easing:o.easing?o.easing:"swing",useCSS:!!o.usecss&&o.usecss,touch:!!o.touch&&o.touch,video:!!o.video&&o.video,prevText:o.prevtext?o.prevtext:"Previous",nextText:o.nexttext?o.nexttext:"Next",selector:o.selector?o.selector:".slides > li"})}}}}(jQuery,Drupal);

window.matchMedia||(window.matchMedia=function(){"use strict";var e=window.styleMedia||window.media;if(!e){var t=document.createElement("style"),i=document.getElementsByTagName("script")[0],n=null;t.type="text/css";t.id="matchmediajs-test";i.parentNode.insertBefore(t,i);n="getComputedStyle"in window&&window.getComputedStyle(t,null)||t.currentStyle;e={matchMedium:function(e){var i="@media "+e+"{ #matchmediajs-test { width: 1px; } }";if(t.styleSheet){t.styleSheet.cssText=i}else{t.textContent=i}return n.width==="1px"}}}return function(t){return{matches:e.matchMedium(t||"all"),media:t||"all"}}}());
;
