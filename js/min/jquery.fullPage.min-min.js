!function(e,n,t,o,i){var s=e(n),a=e(t);e.fn.fullpage=function(l){function r(e){e.find(".fp-slides").after('<div class="fp-controlArrow fp-prev"></div><div class="fp-controlArrow fp-next"></div>'),"#fff"!=l.controlArrowColor&&(e.find(".fp-controlArrow.fp-next").css("border-color","transparent transparent transparent "+l.controlArrowColor),e.find(".fp-controlArrow.fp-prev").css("border-color","transparent "+l.controlArrowColor+" transparent transparent")),l.loopHorizontal||e.find(".fp-controlArrow.fp-prev").hide()}function c(){le.append('<div id="fp-nav"><ul></ul></div>'),we=e("#fp-nav"),we.addClass(function(){return l.showActiveTooltip?"fp-show-active "+l.navigationPosition:l.navigationPosition});for(var n=0;n<e(".fp-section").length;n++){var t="";l.anchors.length&&(t=l.anchors[n]);var t='<li><a href="#'+t+'"><span></span></a>',o=l.navigationTooltips[n];"undefined"!=typeof o&&""!==o&&(t+='<div class="fp-tooltip '+l.navigationPosition+'">'+o+"</div>"),t+="</li>",we.find("ul").append(t)}}function f(){e(".fp-section").each(function(){var n=e(this).find(".fp-slide");n.length?n.each(function(){N(e(this))}):N(e(this))}),e.isFunction(l.afterRender)&&l.afterRender.call(this)}function d(){var n;if(!l.autoScrolling||l.scrollBar){for(var i=s.scrollTop(),a=0,r=o.abs(i-t.querySelectorAll(".fp-section")[0].offsetTop),c=t.querySelectorAll(".fp-section"),f=0;f<c.length;++f){var d=o.abs(i-c[f].offsetTop);r>d&&(a=f,r=d)}n=e(c).eq(a)}if(!l.autoScrolling||l.scrollBar){if(!n.hasClass("active")){if(Te=!0,i=e(".fp-section.active"),a=i.index(".fp-section")+1,r=P(n),c=n.data("anchor"),f=n.index(".fp-section")+1,d=n.find(".fp-slide.active"),d.length)var p=d.data("anchor"),u=d.index();me&&(n.addClass("active").siblings().removeClass("active"),e.isFunction(l.onLeave)&&l.onLeave.call(i,a,f,r),e.isFunction(l.afterLoad)&&l.afterLoad.call(n,c,f),F(c,f-1),l.anchors.length&&(he=c,W(u,p,c,f))),clearTimeout(ye),ye=setTimeout(function(){Te=!1},100)}l.fitToSection&&(clearTimeout(Ce),Ce=setTimeout(function(){me&&(e(".fp-section.active").is(n)&&(ve=!0),y(n),ve=!1)},1e3))}}function p(e){return e.find(".fp-slides").length?e.find(".fp-slide.active").find(".fp-scrollable"):e.find(".fp-scrollable")}function u(e,n){if(be[e]){var t,o;if("down"==e?(t="bottom",o=re.moveSectionDown):(t="top",o=re.moveSectionUp),0<n.length){if(!(t="top"===t?!n.scrollTop():"bottom"===t?n.scrollTop()+1+n.innerHeight()>=n[0].scrollHeight:void 0))return!0;o()}else o()}}function v(n){var t=n.originalEvent;if(!h(n.target)&&g(t)){l.autoScrolling&&n.preventDefault(),n=e(".fp-section.active");var i=p(n);me&&!ce&&(t=_(t),Ee=t.y,Le=t.x,n.find(".fp-slides").length&&o.abs(ke-Le)>o.abs(Ae-Ee)?o.abs(ke-Le)>s.width()/100*l.touchSensitivity&&(ke>Le?be.right&&re.moveSlideRight():be.left&&re.moveSlideLeft()):l.autoScrolling&&o.abs(Ae-Ee)>s.height()/100*l.touchSensitivity&&(Ae>Ee?u("down",i):Ee>Ae&&u("up",i)))}}function h(n,t){t=t||0;var o=e(n).parent();return t<l.normalScrollElementTouchThreshold&&o.is(l.normalScrollElements)?!0:t==l.normalScrollElementTouchThreshold?!1:h(o,++t)}function g(e){return"undefined"==typeof e.pointerType||"mouse"!=e.pointerType}function m(e){e=e.originalEvent,l.fitToSection&&ae.stop(),g(e)&&(e=_(e),Ae=e.y,ke=e.x)}function S(e,n){for(var t=0,i=e.slice(o.max(e.length-n,1)),s=0;s<i.length;s++)t+=i[s];return o.ceil(t/n)}function w(t){var i=(new Date).getTime();if(l.autoScrolling){t=n.event||t;var s=t.wheelDelta||-t.deltaY||-t.detail,a=o.max(-1,o.min(1,s));return 149<Se.length&&Se.shift(),Se.push(o.abs(s)),l.scrollBar&&(t.preventDefault?t.preventDefault():t.returnValue=!1),t=e(".fp-section.active"),t=p(t),s=i-Be,Be=i,s>200&&(Se=[]),me&&(i=S(Se,10),s=S(Se,70),i>=s&&(0>a?u("down",t):u("up",t))),!1}l.fitToSection&&ae.stop()}function b(n){var t=e(".fp-section.active").find(".fp-slides");if(t.length&&!ce){var o=t.find(".fp-slide.active"),i=null,i="prev"===n?o.prev(".fp-slide"):o.next(".fp-slide");if(!i.length){if(!l.loopHorizontal)return;i="prev"===n?o.siblings(":last"):o.siblings(":first")}ce=!0,B(t,i)}}function x(){e(".fp-slide.active").each(function(){ee(e(this))})}function y(n,t,o){var i=n.position();if("undefined"!=typeof i&&(t={element:n,callback:t,isMovementUp:o,dest:i,dtop:i.top,yMovement:P(n),anchorLink:n.data("anchor"),sectionIndex:n.index(".fp-section"),activeSlide:n.find(".fp-slide.active"),activeSection:e(".fp-section.active"),leavingSection:e(".fp-section.active").index(".fp-section")+1,localIsResizing:ve},!(t.activeSection.is(n)&&!ve||l.scrollBar&&s.scrollTop()===t.dtop))){if(t.activeSlide.length)var a=t.activeSlide.data("anchor"),r=t.activeSlide.index();l.autoScrolling&&l.continuousVertical&&"undefined"!=typeof t.isMovementUp&&(!t.isMovementUp&&"up"==t.yMovement||t.isMovementUp&&"down"==t.yMovement)&&(t.isMovementUp?e(".fp-section.active").before(t.activeSection.nextAll(".fp-section")):e(".fp-section.active").after(t.activeSection.prevAll(".fp-section").get().reverse()),ne(e(".fp-section.active").position().top),x(),t.wrapAroundElements=t.activeSection,t.dest=t.element.position(),t.dtop=t.dest.top,t.yMovement=P(t.element)),n.addClass("active").siblings().removeClass("active"),me=!1,W(r,a,t.anchorLink,t.sectionIndex),e.isFunction(l.onLeave)&&!t.localIsResizing&&l.onLeave.call(t.activeSection,t.leavingSection,t.sectionIndex+1,t.yMovement),C(t),he=t.anchorLink,F(t.anchorLink,t.sectionIndex)}}function C(n){if(l.css3&&l.autoScrolling&&!l.scrollBar)q("translate3d(0px, -"+n.dtop+"px, 0px)",!0),setTimeout(function(){k(n)},l.scrollingSpeed);else{var t=T(n);e(t.element).animate(t.options,l.scrollingSpeed,l.easing).promise().done(function(){k(n)})}}function T(e){var n={};return l.autoScrolling&&!l.scrollBar?(n.options={top:-e.dtop},n.element=".fullpage-wrapper"):(n.options={scrollTop:e.dtop},n.element="html, body"),n}function A(n){n.wrapAroundElements&&n.wrapAroundElements.length&&(n.isMovementUp?e(".fp-section:first").before(n.wrapAroundElements):e(".fp-section:last").after(n.wrapAroundElements),ne(e(".fp-section.active").position().top),x())}function k(n){A(n),e.isFunction(l.afterLoad)&&!n.localIsResizing&&l.afterLoad.call(n.element,n.anchorLink,n.sectionIndex+1),me=!0,setTimeout(function(){e.isFunction(n.callback)&&n.callback.call(this)},600)}function E(){if(!Te){var e=n.location.hash.replace("#","").split("/"),t=e[0],e=e[1];if(t.length){var o="undefined"==typeof he,i="undefined"==typeof he&&"undefined"==typeof e&&!ce;(t&&t!==he&&!o||i||!ce&&ge!=e)&&U(t,e)}}}function L(e){me&&(e.pageY<Re?re.moveSectionUp():e.pageY>Re&&re.moveSectionDown()),Re=e.pageY}function B(n,t){var o=t.position(),i=t.index(),s=n.closest(".fp-section"),a=s.index(".fp-section"),r=s.data("anchor"),c=s.find(".fp-slidesNav"),f=K(t),d=ve;if(l.onSlideLeave){var p=s.find(".fp-slide.active"),u=p.index(),v;v=u==i?"none":u>i?"left":"right",d||"none"===v||e.isFunction(l.onSlideLeave)&&l.onSlideLeave.call(p,r,a+1,u,v)}t.addClass("active").siblings().removeClass("active"),!l.loopHorizontal&&l.controlArrows&&(s.find(".fp-controlArrow.fp-prev").toggle(0!==i),s.find(".fp-controlArrow.fp-next").toggle(!t.is(":last-child"))),s.hasClass("active")&&W(i,f,r,a);var h=function(){d||e.isFunction(l.afterSlideLoad)&&l.afterSlideLoad.call(t,r,a+1,f,i),ce=!1};l.css3?(o="translate3d(-"+o.left+"px, 0px, 0px)",z(n.find(".fp-slidesContainer"),0<l.scrollingSpeed).css(te(o)),setTimeout(function(){h()},l.scrollingSpeed,l.easing)):n.animate({scrollLeft:o.left},l.scrollingSpeed,l.easing,function(){h()}),c.find(".active").removeClass("active"),c.find("li").eq(i).find("a").addClass("active")}function M(){if(R(),fe){var n=e(t.activeElement);n.is("textarea")||n.is("input")||n.is("select")||(n=s.height(),o.abs(n-ze)>20*o.max(ze,n)/100&&(re.reBuild(!0),ze=n))}else clearTimeout(Ie),Ie=setTimeout(function(){re.reBuild(!0)},500)}function R(){if(l.responsive){var n=pe.hasClass("fp-responsive");s.width()<l.responsive?n||(re.setAutoScrolling(!1,"internal"),re.setFitToSection(!1,"internal"),e("#fp-nav").hide(),pe.addClass("fp-responsive")):n&&(re.setAutoScrolling(xe.autoScrolling,"internal"),re.setFitToSection(xe.autoScrolling,"internal"),e("#fp-nav").show(),pe.removeClass("fp-responsive"))}}function z(e){var n="all "+l.scrollingSpeed+"ms "+l.easingcss3;return e.removeClass("fp-notransition"),e.css({"-webkit-transition":n,transition:n})}function I(e,n){if(825>e||900>n){var t=o.min(100*e/825,100*n/900).toFixed(2);le.css("font-size",t+"%")}else le.css("font-size","100%")}function F(n,t){l.menu&&(e(l.menu).find(".active").removeClass("active"),e(l.menu).find('[data-menuanchor="'+n+'"]').addClass("active")),l.navigation&&(e("#fp-nav").find(".active").removeClass("active"),n?e("#fp-nav").find('a[href="#'+n+'"]').addClass("active"):e("#fp-nav").find("li").eq(t).find("a").addClass("active"))}function P(n){var t=e(".fp-section.active").index(".fp-section");return n=n.index(".fp-section"),t==n?"none":t>n?"up":"down"}function N(e){e.css("overflow","hidden");var n=e.closest(".fp-section"),t=e.find(".fp-scrollable"),o;t.length?o=t.get(0).scrollHeight:(o=e.get(0).scrollHeight,l.verticalCentered&&(o=e.find(".fp-tableCell").get(0).scrollHeight)),n=ue-parseInt(n.css("padding-bottom"))-parseInt(n.css("padding-top")),o>n?t.length?t.css("height",n+"px").parent().css("height",n+"px"):(l.verticalCentered?e.find(".fp-tableCell").wrapInner('<div class="fp-scrollable" />'):e.wrapInner('<div class="fp-scrollable" />'),e.find(".fp-scrollable").slimScroll({allowPageScroll:!0,height:n+"px",size:"10px",alwaysVisible:0,touchScrollStep:100})):H(e),e.css("overflow","")}function H(e){e.find(".fp-scrollable").children().first().unwrap().unwrap(),e.find(".slimScrollBar").remove(),e.find(".slimScrollRail").remove()}function V(e){e.addClass("fp-table").wrapInner('<div class="fp-tableCell" style="height:'+D(e)+'px;" />')}function D(e){var n=ue;return(l.paddingTop||l.paddingBottom)&&(n=e,n.hasClass("fp-section")||(n=e.closest(".fp-section")),e=parseInt(n.css("padding-top"))+parseInt(n.css("padding-bottom")),n=ue-e),n}function q(e,n){n?z(pe):pe.addClass("fp-notransition"),pe.css(te(e)),setTimeout(function(){pe.removeClass("fp-notransition")},10)}function U(n,t){var o;"undefined"==typeof t&&(t=0),o=isNaN(n)?e('[data-anchor="'+n+'"]'):e(".fp-section").eq(n-1),n===he||o.hasClass("active")?Y(o,t):y(o,function(){Y(o,t)})}function Y(e,n){if("undefined"!=typeof n){var t=e.find(".fp-slides"),o=t.find('[data-anchor="'+n+'"]');o.length||(o=t.find(".fp-slide").eq(n)),o.length&&B(t,o)}}function O(e,n){e.append('<div class="fp-slidesNav"><ul></ul></div>');var t=e.find(".fp-slidesNav");t.addClass(l.slidesNavPosition);for(var o=0;n>o;o++)t.find("ul").append('<li><a href="#"><span></span></a></li>');t.css("margin-left","-"+t.width()/2+"px"),t.find("li").first().find("a").addClass("active")}function W(e,n,t,o){o="",l.anchors.length&&(e?("undefined"!=typeof t&&(o=t),"undefined"==typeof n&&(n=e),ge=n,X(o+"/"+n)):("undefined"!=typeof e&&(ge=n),X(t))),j()}function X(e){if(l.recordHistory)location.hash=e;else if(fe||de)history.replaceState(i,i,"#"+e);else{var t=n.location.href.split("#")[0];n.location.replace(t+"#"+e)}}function K(e){var n=e.data("anchor");return e=e.index(".fp-slide"),"undefined"==typeof n&&(n=e),n}function j(){var n=e(".fp-section.active"),t=n.find(".fp-slide.active"),o=n.data("anchor"),i=K(t),n=n.index(".fp-section"),n=String(n);l.anchors.length&&(n=o),t.length&&(n=n+"-"+i),n=n.replace("/","-").replace("#",""),le[0].className=le[0].className.replace(RegExp("\\b\\s?fp-viewing-[^\\s]+\\b","g"),""),le.addClass("fp-viewing-"+n)}function Q(){var e=t.createElement("p"),o,s={webkitTransform:"-webkit-transform",OTransform:"-o-transform",msTransform:"-ms-transform",MozTransform:"-moz-transform",transform:"transform"};t.body.insertBefore(e,null);for(var a in s)e.style[a]!==i&&(e.style[a]="translate3d(1px,1px,1px)",o=n.getComputedStyle(e).getPropertyValue(s[a]));return t.body.removeChild(e),o!==i&&0<o.length&&"none"!==o}function G(){if(fe||de){var e=Z();a.off("touchstart "+e.down).on("touchstart "+e.down,m),a.off("touchmove "+e.move).on("touchmove "+e.move,v)}}function J(){if(fe||de){var e=Z();a.off("touchstart "+e.down),a.off("touchmove "+e.move)}}function Z(){return n.PointerEvent?{down:"pointerdown",move:"pointermove"}:{down:"MSPointerDown",move:"MSPointerMove"}}function _(e){var n=[];return n.y="undefined"!=typeof e.pageY&&(e.pageY||e.pageX)?e.pageY:e.touches[0].pageY,n.x="undefined"!=typeof e.pageX&&(e.pageY||e.pageX)?e.pageX:e.touches[0].pageX,de&&g(e)&&(n.y=e.touches[0].pageY,n.x=e.touches[0].pageX),n}function ee(e){re.setScrollingSpeed(0,"internal"),B(e.closest(".fp-slides"),e),re.setScrollingSpeed(xe.scrollingSpeed,"internal")}function ne(e){l.scrollBar?pe.scrollTop(e):l.css3?q("translate3d(0px, -"+e+"px, 0px)",!1):pe.css("top",-e)}function te(e){return{"-webkit-transform":e,"-moz-transform":e,"-ms-transform":e,transform:e}}function oe(){ne(0),e("#fp-nav, .fp-slidesNav, .fp-controlArrow").remove(),e(".fp-section").css({height:"","background-color":"",padding:""}),e(".fp-slide").css({width:""}),pe.css({height:"",position:"","-ms-touch-action":"","touch-action":""}),e(".fp-section, .fp-slide").each(function(){H(e(this)),e(this).removeClass("fp-table active")}),pe.addClass("fp-notransition"),pe.find(".fp-tableCell, .fp-slidesContainer, .fp-slides").each(function(){e(this).replaceWith(this.childNodes)}),ae.scrollTop(0)}function ie(e,n,t){l[e]=n,"internal"!==t&&(xe[e]=n)}function se(e,n){console&&console[e]&&console[e]("fullPage: "+n)}var ae=e("html, body"),le=e("body"),re=e.fn.fullpage;l=e.extend({menu:!1,anchors:[],navigation:!1,navigationPosition:"right",navigationTooltips:[],showActiveTooltip:!1,slidesNavigation:!1,slidesNavPosition:"bottom",scrollBar:!1,css3:!0,scrollingSpeed:700,autoScrolling:!0,fitToSection:!0,easing:"easeInOutCubic",easingcss3:"ease",loopBottom:!1,loopTop:!1,loopHorizontal:!0,continuousVertical:!1,normalScrollElements:null,scrollOverflow:!1,touchSensitivity:5,normalScrollElementTouchThreshold:5,keyboardScrolling:!0,animateAnchor:!0,recordHistory:!0,controlArrows:!0,controlArrowColor:"#fff",verticalCentered:!0,resize:!1,sectionsColor:[],paddingTop:0,paddingBottom:0,fixedElements:null,responsive:0,sectionSelector:".section",slideSelector:".slide",afterLoad:null,onLeave:null,afterRender:null,afterResize:null,afterReBuild:null,afterSlideLoad:null,onSlideLeave:null},l),function(){l.continuousVertical&&(l.loopTop||l.loopBottom)&&(l.continuousVertical=!1,se("warn","Option `loopTop/loopBottom` is mutually exclusive with `continuousVertical`; `continuousVertical` disabled")),l.continuousVertical&&l.scrollBar&&(l.continuousVertical=!1,se("warn","Option `scrollBar` is mutually exclusive with `continuousVertical`; `continuousVertical` disabled")),e.each(l.anchors,function(n,t){(e("#"+t).length||e('[name="'+t+'"]').length)&&se("error","data-anchor tags can not have the same value as any `id` element on the site (or `name` element for IE).")})}(),e.extend(e.easing,{easeInOutCubic:function(e,n,t,o,i){return 1>(n/=i/2)?o/2*n*n*n+t:o/2*((n-=2)*n*n+2)+t}}),e.extend(e.easing,{easeInQuart:function(e,n,t,o,i){return o*(n/=i)*n*n*n+t}}),re.setAutoScrolling=function(n,t){ie("autoScrolling",n,t);var o=e(".fp-section.active");l.autoScrolling&&!l.scrollBar?(ae.css({overflow:"hidden",height:"100%"}),re.setRecordHistory(l.recordHistory,"internal"),pe.css({"-ms-touch-action":"none","touch-action":"none"}),o.length&&ne(o.position().top)):(ae.css({overflow:"visible",height:"initial"}),re.setRecordHistory(!1,"internal"),pe.css({"-ms-touch-action":"","touch-action":""}),ne(0),o.length&&ae.scrollTop(o.position().top))},re.setRecordHistory=function(e,n){ie("recordHistory",e,n)},re.setScrollingSpeed=function(e,n){ie("scrollingSpeed",e,n)},re.setFitToSection=function(e,n){ie("fitToSection",e,n)},re.setMouseWheelScrolling=function(e){e?t.addEventListener?(t.addEventListener("mousewheel",w,!1),t.addEventListener("wheel",w,!1)):t.attachEvent("onmousewheel",w):t.addEventListener?(t.removeEventListener("mousewheel",w,!1),t.removeEventListener("wheel",w,!1)):t.detachEvent("onmousewheel",w)},re.setAllowScrolling=function(n,t){"undefined"!=typeof t?(t=t.replace(" ","").split(","),e.each(t,function(e,t){switch(t){case"up":be.up=n;break;case"down":be.down=n;break;case"left":be.left=n;break;case"right":be.right=n;break;case"all":re.setAllowScrolling(n)}})):n?(re.setMouseWheelScrolling(!0),G()):(re.setMouseWheelScrolling(!1),J())},re.setKeyboardScrolling=function(e){l.keyboardScrolling=e},re.moveSectionUp=function(){var n=e(".fp-section.active").prev(".fp-section");n.length||!l.loopTop&&!l.continuousVertical||(n=e(".fp-section").last()),n.length&&y(n,null,!0)},re.moveSectionDown=function(){var n=e(".fp-section.active").next(".fp-section");n.length||!l.loopBottom&&!l.continuousVertical||(n=e(".fp-section").first()),n.length&&y(n,null,!1)},re.moveTo=function(n,t){var o="",o=isNaN(n)?e('[data-anchor="'+n+'"]'):e(".fp-section").eq(n-1);"undefined"!=typeof t?U(n,t):0<o.length&&y(o)},re.moveSlideRight=function(){b("next")},re.moveSlideLeft=function(){b("prev")},re.reBuild=function(n){if(!pe.hasClass("fp-destroyed")){ve=!0;var t=s.width();ue=s.height(),l.resize&&I(ue,t),e(".fp-section").each(function(){var n=e(this).find(".fp-slides"),t=e(this).find(".fp-slide");l.verticalCentered&&e(this).find(".fp-tableCell").css("height",D(e(this))+"px"),e(this).css("height",ue+"px"),l.scrollOverflow&&(t.length?t.each(function(){N(e(this))}):N(e(this))),t.length&&B(n,n.find(".fp-slide.active"))}),t=e(".fp-section.active"),t.index(".fp-section")&&y(t),ve=!1,e.isFunction(l.afterResize)&&n&&l.afterResize.call(pe),e.isFunction(l.afterReBuild)&&!n&&l.afterReBuild.call(pe)}};var ce=!1,fe=navigator.userAgent.match(/(iPhone|iPod|iPad|Android|playbook|silk|BlackBerry|BB10|Windows Phone|Tizen|Bada|webOS|IEMobile|Opera Mini)/),de="ontouchstart"in n||0<navigator.msMaxTouchPoints||navigator.maxTouchPoints,pe=e(this),ue=s.height(),ve=!1,he,ge,me=!0,Se=[],we,be={up:!0,down:!0,left:!0,right:!0},xe=e.extend(!0,{},l);re.setAllowScrolling(!0),pe.removeClass("fp-destroyed"),l.css3&&(l.css3=Q()),e(this).length?(pe.css({height:"100%",position:"relative"}),pe.addClass("fullpage-wrapper")):se("error","Error! Fullpage.js needs to be initialized with a selector. For example: $('#myContainer').fullpage();"),e(l.sectionSelector).each(function(){e(this).addClass("fp-section")}),e(l.slideSelector).each(function(){e(this).addClass("fp-slide")}),l.navigation&&c(),e(".fp-section").each(function(n){var t=e(this),o=e(this).find(".fp-slide"),i=o.length;if(n||0!==e(".fp-section.active").length||e(this).addClass("active"),e(this).css("height",ue+"px"),l.paddingTop&&e(this).css("padding-top",l.paddingTop),l.paddingBottom&&e(this).css("padding-bottom",l.paddingBottom),"undefined"!=typeof l.sectionsColor[n]&&e(this).css("background-color",l.sectionsColor[n]),"undefined"!=typeof l.anchors[n]&&(e(this).attr("data-anchor",l.anchors[n]),e(this).hasClass("active")&&F(l.anchors[n],n)),i>1){n=100*i;var s=100/i;o.wrapAll('<div class="fp-slidesContainer" />'),o.parent().wrap('<div class="fp-slides" />'),e(this).find(".fp-slidesContainer").css("width",n+"%"),l.controlArrows&&r(e(this)),l.slidesNavigation&&O(e(this),i),o.each(function(n){e(this).css("width",s+"%"),l.verticalCentered&&V(e(this))}),t=t.find(".fp-slide.active"),t.length?ee(t):o.eq(0).addClass("active")}else l.verticalCentered&&V(e(this))}).promise().done(function(){re.setAutoScrolling(l.autoScrolling,"internal");var o=e(".fp-section.active").find(".fp-slide.active");if(o.length&&(0!==e(".fp-section.active").index(".fp-section")||0===e(".fp-section.active").index(".fp-section")&&0!==o.index())&&ee(o),l.fixedElements&&l.css3&&e(l.fixedElements).appendTo(le),l.navigation&&(we.css("margin-top","-"+we.height()/2+"px"),we.find("li").eq(e(".fp-section.active").index(".fp-section")).find("a").addClass("active")),l.menu&&l.css3&&e(l.menu).closest(".fullpage-wrapper").length&&e(l.menu).appendTo(le),l.scrollOverflow?("complete"===t.readyState&&f(),s.on("load",f)):e.isFunction(l.afterRender)&&l.afterRender.call(pe),R(),!l.animateAnchor&&(o=n.location.hash.replace("#","").split("/")[0],o.length)){var i=e('[data-anchor="'+o+'"]');i.length&&(l.autoScrolling?ne(i.position().top):(ne(0),ae.scrollTop(i.position().top)),F(o,null),e.isFunction(l.afterLoad)&&l.afterLoad.call(i,o,i.index(".fp-section")+1),i.addClass("active").siblings().removeClass("active"))}j(),s.on("load",function(){var e=n.location.hash.replace("#","").split("/"),t=e[0],e=e[1];t&&U(t,e)})});var ye,Ce,Te=!1;s.on("scroll",d);var Ae=0,ke=0,Ee=0,Le=0,Be=(new Date).getTime();s.on("hashchange",E),a.keydown(function(n){clearTimeout(Me);var o=e(t.activeElement);o.is("textarea")||o.is("input")||o.is("select")||!l.keyboardScrolling||!l.autoScrolling||(-1<e.inArray(n.which,[40,38,32,33,34])&&n.preventDefault(),Me=setTimeout(function(){var t=n.shiftKey;switch(n.which){case 38:case 33:re.moveSectionUp();break;case 32:if(t){re.moveSectionUp();break}case 40:case 34:re.moveSectionDown();break;case 36:re.moveTo(1);break;case 35:re.moveTo(e(".fp-section").length);break;case 37:re.moveSlideLeft();break;case 39:re.moveSlideRight()}},150))});var Me;pe.mousedown(function(e){2==e.which&&(Re=e.pageY,pe.on("mousemove",L))}),pe.mouseup(function(e){2==e.which&&pe.off("mousemove")});var Re=0;a.on("click touchstart","#fp-nav a",function(n){n.preventDefault(),n=e(this).parent().index(),y(e(".fp-section").eq(n))}),a.on("click touchstart",".fp-slidesNav a",function(n){n.preventDefault(),n=e(this).closest(".fp-section").find(".fp-slides");var t=n.find(".fp-slide").eq(e(this).closest("li").index());B(n,t)}),l.normalScrollElements&&(a.on("mouseenter",l.normalScrollElements,function(){re.setMouseWheelScrolling(!1)}),a.on("mouseleave",l.normalScrollElements,function(){re.setMouseWheelScrolling(!0)})),e(".fp-section").on("click touchstart",".fp-controlArrow",function(){e(this).hasClass("fp-prev")?re.moveSlideLeft():re.moveSlideRight()}),s.resize(M);var ze=ue,Ie;re.destroy=function(n){re.setAutoScrolling(!1,"internal"),re.setAllowScrolling(!1),re.setKeyboardScrolling(!1),pe.addClass("fp-destroyed"),s.off("scroll",d).off("hashchange",E).off("resize",M),a.off("click","#fp-nav a").off("mouseenter","#fp-nav li").off("mouseleave","#fp-nav li").off("click",".fp-slidesNav a").off("mouseover",l.normalScrollElements).off("mouseout",l.normalScrollElements),e(".fp-section").off("click",".fp-controlArrow"),n&&oe()}}}(jQuery,window,document,Math);