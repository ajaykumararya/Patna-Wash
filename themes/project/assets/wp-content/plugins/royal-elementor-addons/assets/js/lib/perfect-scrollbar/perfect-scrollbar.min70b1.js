/*!
 * perfect-scrollbar v1.4.0
 * (c) 2018 Hyunje Jun
 * @license MIT
 */
!function(t,e){"object"==typeof exports&&"undefined"!=typeof module?module.exports=e():"function"==typeof define&&define.amd?define(e):t.PerfectScrollbar=e()}(this,function(){"use strict";function f(t){return getComputedStyle(t)}function a(t,e){for(var i in e){var l=e[i];"number"==typeof l&&(l+="px"),t.style[i]=l}return t}function c(t){var e=document.createElement("div");return e.className=t,e}var i="undefined"!=typeof Element&&(Element.prototype.matches||Element.prototype.webkitMatchesSelector||Element.prototype.mozMatchesSelector||Element.prototype.msMatchesSelector);function s(t,e){if(!i)throw new Error("No element matching method supported");return i.call(t,e)}function o(t){t.remove?t.remove():t.parentNode&&t.parentNode.removeChild(t)}function h(t,e){return Array.prototype.filter.call(t.children,function(t){return s(t,e)})}var m={main:"ps",element:{thumb:function(t){return"ps__thumb-"+t},rail:function(t){return"ps__rail-"+t},consuming:"ps__child--consume"},state:{focus:"ps--focus",clicking:"ps--clicking",active:function(t){return"ps--active-"+t},scrolling:function(t){return"ps--scrolling-"+t}}},l={x:null,y:null};function v(t,e){var i=t.element.classList,t=m.state.scrolling(e);i.contains(t)?clearTimeout(l[e]):i.add(t)}function Y(t,e){l[e]=setTimeout(function(){return t.isAlive&&t.element.classList.remove(m.state.scrolling(e))},t.settings.scrollingThreshold)}function r(t){this.element=t,this.handlers={}}var t={isEmpty:{configurable:!0}};r.prototype.bind=function(t,e){void 0===this.handlers[t]&&(this.handlers[t]=[]),this.handlers[t].push(e),this.element.addEventListener(t,e,!1)},r.prototype.unbind=function(e,i){var l=this;this.handlers[e]=this.handlers[e].filter(function(t){return!(!i||t===i)||(l.element.removeEventListener(e,t,!1),!1)})},r.prototype.unbindAll=function(){for(var t in this.handlers)this.unbind(t)},t.isEmpty.get=function(){var e=this;return Object.keys(this.handlers).every(function(t){return 0===e.handlers[t].length})},Object.defineProperties(r.prototype,t);function d(){this.eventElements=[]}function u(t){if("function"==typeof window.CustomEvent)return new CustomEvent(t);var e=document.createEvent("CustomEvent");return e.initCustomEvent(t,!1,!1,void 0),e}d.prototype.eventElement=function(e){var t=this.eventElements.filter(function(t){return t.element===e})[0];return t||(t=new r(e),this.eventElements.push(t)),t},d.prototype.bind=function(t,e,i){this.eventElement(t).bind(e,i)},d.prototype.unbind=function(t,e,i){t=this.eventElement(t);t.unbind(e,i),t.isEmpty&&this.eventElements.splice(this.eventElements.indexOf(t),1)},d.prototype.unbindAll=function(){this.eventElements.forEach(function(t){return t.unbindAll()}),this.eventElements=[]},d.prototype.once=function(t,e,i){var l=this.eventElement(t),r=function(t){l.unbind(e,r),i(t)};l.bind(e,r)};function e(t,e,i,l,r){var n,o,s,a,c,h;if(void 0===l&&(l=!0),void 0===r&&(r=!1),"top"===e)h=["contentHeight","containerHeight","scrollTop","y","up","down"];else{if("left"!==e)throw new Error("A proper axis should be provided");h=["contentWidth","containerWidth","scrollLeft","x","left","right"]}n=t,o=i,a=l,c=r,e=(s=h)[0],t=s[1],i=s[2],l=s[3],r=s[4],h=s[5],void 0===a&&(a=!0),void 0===c&&(c=!1),s=n.element,n.reach[l]=null,s[i]<1&&(n.reach[l]="start"),s[i]>n[e]-n[t]-1&&(n.reach[l]="end"),o&&(s.dispatchEvent(u("ps-scroll-"+l)),o<0?s.dispatchEvent(u("ps-scroll-"+r)):0<o&&s.dispatchEvent(u("ps-scroll-"+h)),a&&function(t,e){v(t,e),Y(t,e)}(n,l)),n.reach[l]&&(o||c)&&s.dispatchEvent(u("ps-"+l+"-reach-"+n.reach[l]))}function p(t){return parseInt(t,10)||0}function X(t){var e,i,l,r=t.element,n=Math.floor(r.scrollTop);t.containerWidth=r.clientWidth,t.containerHeight=r.clientHeight,t.contentWidth=r.scrollWidth,t.contentHeight=r.scrollHeight,r.contains(t.scrollbarXRail)||(h(r,m.element.rail("x")).forEach(o),r.appendChild(t.scrollbarXRail)),r.contains(t.scrollbarYRail)||(h(r,m.element.rail("y")).forEach(o),r.appendChild(t.scrollbarYRail)),!t.settings.suppressScrollX&&t.containerWidth+t.settings.scrollXMarginOffset<t.contentWidth?(t.scrollbarXActive=!0,t.railXWidth=t.containerWidth-t.railXMarginWidth,t.railXRatio=t.containerWidth/t.railXWidth,t.scrollbarXWidth=g(t,p(t.railXWidth*t.containerWidth/t.contentWidth)),t.scrollbarXLeft=p((t.negativeScrollAdjustment+r.scrollLeft)*(t.railXWidth-t.scrollbarXWidth)/(t.contentWidth-t.containerWidth))):t.scrollbarXActive=!1,!t.settings.suppressScrollY&&t.containerHeight+t.settings.scrollYMarginOffset<t.contentHeight?(t.scrollbarYActive=!0,t.railYHeight=t.containerHeight-t.railYMarginHeight,t.railYRatio=t.containerHeight/t.railYHeight,t.scrollbarYHeight=g(t,p(t.railYHeight*t.containerHeight/t.contentHeight)),t.scrollbarYTop=p(n*(t.railYHeight-t.scrollbarYHeight)/(t.contentHeight-t.containerHeight))):t.scrollbarYActive=!1,t.scrollbarXLeft>=t.railXWidth-t.scrollbarXWidth&&(t.scrollbarXLeft=t.railXWidth-t.scrollbarXWidth),t.scrollbarYTop>=t.railYHeight-t.scrollbarYHeight&&(t.scrollbarYTop=t.railYHeight-t.scrollbarYHeight),e=r,l={width:(i=t).railXWidth},n=Math.floor(e.scrollTop),i.isRtl?l.left=i.negativeScrollAdjustment+e.scrollLeft+i.containerWidth-i.contentWidth:l.left=e.scrollLeft,i.isScrollbarXUsingBottom?l.bottom=i.scrollbarXBottom-n:l.top=i.scrollbarXTop+n,a(i.scrollbarXRail,l),n={top:n,height:i.railYHeight},i.isScrollbarYUsingRight?i.isRtl?n.right=i.contentWidth-(i.negativeScrollAdjustment+e.scrollLeft)-i.scrollbarYRight-i.scrollbarYOuterWidth:n.right=i.scrollbarYRight-e.scrollLeft:i.isRtl?n.left=i.negativeScrollAdjustment+e.scrollLeft+2*i.containerWidth-i.contentWidth-i.scrollbarYLeft-i.scrollbarYOuterWidth:n.left=i.scrollbarYLeft+e.scrollLeft,a(i.scrollbarYRail,n),a(i.scrollbarX,{left:i.scrollbarXLeft,width:i.scrollbarXWidth-i.railBorderXWidth}),a(i.scrollbarY,{top:i.scrollbarYTop,height:i.scrollbarYHeight-i.railBorderYWidth}),t.scrollbarXActive?r.classList.add(m.state.active("x")):(r.classList.remove(m.state.active("x")),t.scrollbarXWidth=0,t.scrollbarXLeft=0,r.scrollLeft=0),t.scrollbarYActive?r.classList.add(m.state.active("y")):(r.classList.remove(m.state.active("y")),t.scrollbarYHeight=0,t.scrollbarYTop=0,r.scrollTop=0)}var b={isWebKit:"undefined"!=typeof document&&"WebkitAppearance"in document.documentElement.style,supportsTouch:"undefined"!=typeof window&&("ontouchstart"in window||window.DocumentTouch&&document instanceof window.DocumentTouch),supportsIePointer:"undefined"!=typeof navigator&&navigator.msMaxTouchPoints,isChrome:"undefined"!=typeof navigator&&/Chrome/i.test(navigator&&navigator.userAgent)};function g(t,e){return t.settings.minScrollbarLength&&(e=Math.max(e,t.settings.minScrollbarLength)),t.settings.maxScrollbarLength&&(e=Math.min(e,t.settings.maxScrollbarLength)),e}function n(e,t){var i=t[0],l=t[1],r=t[2],n=t[3],o=t[4],s=t[5],a=t[6],c=t[7],h=t[8],d=e.element,u=null,f=null,p=null;function b(t){d[a]=u+p*(t[r]-f),v(e,c),X(e),t.stopPropagation(),t.preventDefault()}function g(){Y(e,c),e[h].classList.remove(m.state.clicking),e.event.unbind(e.ownerDocument,"mousemove",b)}e.event.bind(e[o],"mousedown",function(t){u=d[a],f=t[r],p=(e[l]-e[i])/(e[n]-e[s]),e.event.bind(e.ownerDocument,"mousemove",b),e.event.once(e.ownerDocument,"mouseup",g),e[h].classList.add(m.state.clicking),t.stopPropagation(),t.preventDefault()})}var w={"click-rail":function(i){i.event.bind(i.scrollbarY,"mousedown",function(t){return t.stopPropagation()}),i.event.bind(i.scrollbarYRail,"mousedown",function(t){var e=t.pageY-window.pageYOffset-i.scrollbarYRail.getBoundingClientRect().top>i.scrollbarYTop?1:-1;i.element.scrollTop+=e*i.containerHeight,X(i),t.stopPropagation()}),i.event.bind(i.scrollbarX,"mousedown",function(t){return t.stopPropagation()}),i.event.bind(i.scrollbarXRail,"mousedown",function(t){var e=t.pageX-window.pageXOffset-i.scrollbarXRail.getBoundingClientRect().left>i.scrollbarXLeft?1:-1;i.element.scrollLeft+=e*i.containerWidth,X(i),t.stopPropagation()})},"drag-thumb":function(t){n(t,["containerWidth","contentWidth","pageX","railXWidth","scrollbarX","scrollbarXWidth","scrollLeft","x","scrollbarXRail"]),n(t,["containerHeight","contentHeight","pageY","railYHeight","scrollbarY","scrollbarYHeight","scrollTop","y","scrollbarYRail"])},keyboard:function(n){var o=n.element;n.event.bind(n.ownerDocument,"keydown",function(t){if(!(t.isDefaultPrevented&&t.isDefaultPrevented()||t.defaultPrevented)&&(s(o,":hover")||s(n.scrollbarX,":focus")||s(n.scrollbarY,":focus"))){var e,i=document.activeElement||n.ownerDocument.activeElement;if(i){if("IFRAME"===i.tagName)i=i.contentDocument.activeElement;else for(;i.shadowRoot;)i=i.shadowRoot.activeElement;if(s(e=i,"input,[contenteditable]")||s(e,"select,[contenteditable]")||s(e,"textarea,[contenteditable]")||s(e,"button,[contenteditable]"))return}var l=0,r=0;switch(t.which){case 37:l=t.metaKey?-n.contentWidth:t.altKey?-n.containerWidth:-30;break;case 38:r=t.metaKey?n.contentHeight:t.altKey?n.containerHeight:30;break;case 39:l=t.metaKey?n.contentWidth:t.altKey?n.containerWidth:30;break;case 40:r=t.metaKey?-n.contentHeight:t.altKey?-n.containerHeight:-30;break;case 32:r=t.shiftKey?n.containerHeight:-n.containerHeight;break;case 33:r=n.containerHeight;break;case 34:r=-n.containerHeight;break;case 36:r=n.contentHeight;break;case 35:r=-n.contentHeight;break;default:return}n.settings.suppressScrollX&&0!==l||n.settings.suppressScrollY&&0!==r||(o.scrollTop-=r,o.scrollLeft+=l,X(n),function(t,e){var i=Math.floor(o.scrollTop);if(0===t){if(!n.scrollbarYActive)return;if(0===i&&0<e||i>=n.contentHeight-n.containerHeight&&e<0)return!n.settings.wheelPropagation}if(i=o.scrollLeft,0===e){if(!n.scrollbarXActive)return;if(0===i&&t<0||i>=n.contentWidth-n.containerWidth&&0<t)return!n.settings.wheelPropagation}return 1}(l,r)&&t.preventDefault())}})},wheel:function(a){var c=a.element;function t(t){var e,i,l,r,n=(l=(i=t).deltaX,r=-1*i.deltaY,void 0!==l&&void 0!==r||(l=-1*i.wheelDeltaX/6,r=i.wheelDeltaY/6),i.deltaMode&&1===i.deltaMode&&(l*=10,r*=10),l!=l&&r!=r&&(l=0,r=i.wheelDelta),i.shiftKey?[-r,-l]:[l,r]),o=n[0],s=n[1];!function(t,e,i){if(!b.isWebKit&&c.querySelector("select:focus"))return 1;if(c.contains(t))for(var l=t;l&&l!==c;){if(l.classList.contains(m.element.consuming))return 1;var r=f(l);if([r.overflow,r.overflowX,r.overflowY].join("").match(/(scroll|auto)/)){r=l.scrollHeight-l.clientHeight;if(0<r&&!(0===l.scrollTop&&0<i||l.scrollTop===r&&i<0))return 1;r=l.scrollWidth-l.clientWidth;if(0<r&&!(0===l.scrollLeft&&e<0||l.scrollLeft===r&&0<e))return 1}l=l.parentNode}}(t.target,o,s)&&(e=!1,a.settings.useBothWheelAxes?a.scrollbarYActive&&!a.scrollbarXActive?(s?c.scrollTop-=s*a.settings.wheelSpeed:c.scrollTop+=o*a.settings.wheelSpeed,e=!0):a.scrollbarXActive&&!a.scrollbarYActive&&(o?c.scrollLeft+=o*a.settings.wheelSpeed:c.scrollLeft-=s*a.settings.wheelSpeed,e=!0):(c.scrollTop-=s*a.settings.wheelSpeed,c.scrollLeft+=o*a.settings.wheelSpeed),X(a),(e=e||(i=o,l=s,r=Math.floor(c.scrollTop),n=0===c.scrollTop,o=r+c.offsetHeight===c.scrollHeight,s=0===c.scrollLeft,r=c.scrollLeft+c.offsetWidth===c.scrollWidth,!(r=Math.abs(l)>Math.abs(i)?n||o:s||r)||!a.settings.wheelPropagation))&&!t.ctrlKey&&(t.stopPropagation(),t.preventDefault()))}void 0!==window.onwheel?a.event.bind(c,"wheel",t):void 0!==window.onmousewheel&&a.event.bind(c,"mousewheel",t)},touch:function(o){var s,n,a,c,e;function h(t,e){s.scrollTop-=e,s.scrollLeft-=t,X(o)}function d(t){return t.targetTouches?t.targetTouches[0]:t}function u(t){return(!t.pointerType||"pen"!==t.pointerType||0!==t.buttons)&&(t.targetTouches&&1===t.targetTouches.length||!(!t.pointerType||"mouse"===t.pointerType||t.pointerType===t.MSPOINTER_TYPE_MOUSE))}function t(t){u(t)&&(t=d(t),n.pageX=t.pageX,n.pageY=t.pageY,a=(new Date).getTime(),null!==e&&clearInterval(e))}function i(t){var e,i,l,r;u(t)&&(e=(r={pageX:(l=d(t)).pageX,pageY:l.pageY}).pageX-n.pageX,i=r.pageY-n.pageY,function(t,e,i){if(s.contains(t))for(var l=t;l&&l!==s;){if(l.classList.contains(m.element.consuming))return 1;var r=f(l);if([r.overflow,r.overflowX,r.overflowY].join("").match(/(scroll|auto)/)){r=l.scrollHeight-l.clientHeight;if(0<r&&!(0===l.scrollTop&&0<i||l.scrollTop===r&&i<0))return 1;r=l.scrollLeft-l.clientWidth;if(0<r&&!(0===l.scrollLeft&&e<0||l.scrollLeft===r&&0<e))return 1}l=l.parentNode}}(t.target,e,i)||(h(e,i),n=r,0<(r=(l=(new Date).getTime())-a)&&(c.x=e/r,c.y=i/r,a=l),function(t,e){var i=Math.floor(s.scrollTop),l=s.scrollLeft,r=Math.abs(t),n=Math.abs(e);if(r<n){if(e<0&&i===o.contentHeight-o.containerHeight||0<e&&0===i)return 0===window.scrollY&&0<e&&b.isChrome}else if(n<r&&(t<0&&l===o.contentWidth-o.containerWidth||0<t&&0===l))return 1;return 1}(e,i)&&t.preventDefault()))}function l(){o.settings.swipeEasing&&(clearInterval(e),e=setInterval(function(){o.isInitialized||!c.x&&!c.y||Math.abs(c.x)<.01&&Math.abs(c.y)<.01?clearInterval(e):(h(30*c.x,30*c.y),c.x*=.8,c.y*=.8)},10))}(b.supportsTouch||b.supportsIePointer)&&(s=o.element,n={},a=0,c={},e=null,b.supportsTouch?(o.event.bind(s,"touchstart",t),o.event.bind(s,"touchmove",i),o.event.bind(s,"touchend",l)):b.supportsIePointer&&(window.PointerEvent?(o.event.bind(s,"pointerdown",t),o.event.bind(s,"pointermove",i),o.event.bind(s,"pointerup",l)):window.MSPointerEvent&&(o.event.bind(s,"MSPointerDown",t),o.event.bind(s,"MSPointerMove",i),o.event.bind(s,"MSPointerUp",l))))}},t=function(t,e){var i,l=this;if(void 0===e&&(e={}),"string"==typeof t&&(t=document.querySelector(t)),!t||!t.nodeName)throw new Error("no element is specified to initialize PerfectScrollbar");for(i in(this.element=t).classList.add(m.main),this.settings={handlers:["click-rail","drag-thumb","keyboard","wheel","touch"],maxScrollbarLength:null,minScrollbarLength:null,scrollingThreshold:1e3,scrollXMarginOffset:0,scrollYMarginOffset:0,suppressScrollX:!1,suppressScrollY:!1,swipeEasing:!0,useBothWheelAxes:!1,wheelPropagation:!0,wheelSpeed:1},e)l.settings[i]=e[i];this.containerWidth=null,this.containerHeight=null,this.contentWidth=null,this.contentHeight=null;var r,n=function(){return t.classList.add(m.state.focus)},o=function(){return t.classList.remove(m.state.focus)};this.isRtl="rtl"===f(t).direction,this.isNegativeScroll=(r=t.scrollLeft,t.scrollLeft=-1,s=t.scrollLeft<0,t.scrollLeft=r,s),this.negativeScrollAdjustment=this.isNegativeScroll?t.scrollWidth-t.clientWidth:0,this.event=new d,this.ownerDocument=t.ownerDocument||document,this.scrollbarXRail=c(m.element.rail("x")),t.appendChild(this.scrollbarXRail),this.scrollbarX=c(m.element.thumb("x")),this.scrollbarXRail.appendChild(this.scrollbarX),this.scrollbarX.setAttribute("tabindex",0),this.event.bind(this.scrollbarX,"focus",n),this.event.bind(this.scrollbarX,"blur",o),this.scrollbarXActive=null,this.scrollbarXWidth=null,this.scrollbarXLeft=null;var s=f(this.scrollbarXRail);this.scrollbarXBottom=parseInt(s.bottom,10),isNaN(this.scrollbarXBottom)?(this.isScrollbarXUsingBottom=!1,this.scrollbarXTop=p(s.top)):this.isScrollbarXUsingBottom=!0,this.railBorderXWidth=p(s.borderLeftWidth)+p(s.borderRightWidth),a(this.scrollbarXRail,{display:"block"}),this.railXMarginWidth=p(s.marginLeft)+p(s.marginRight),a(this.scrollbarXRail,{display:""}),this.railXWidth=null,this.railXRatio=null,this.scrollbarYRail=c(m.element.rail("y")),t.appendChild(this.scrollbarYRail),this.scrollbarY=c(m.element.thumb("y")),this.scrollbarYRail.appendChild(this.scrollbarY),this.scrollbarY.setAttribute("tabindex",0),this.event.bind(this.scrollbarY,"focus",n),this.event.bind(this.scrollbarY,"blur",o),this.scrollbarYActive=null,this.scrollbarYHeight=null,this.scrollbarYTop=null;n=f(this.scrollbarYRail);this.scrollbarYRight=parseInt(n.right,10),isNaN(this.scrollbarYRight)?(this.isScrollbarYUsingRight=!1,this.scrollbarYLeft=p(n.left)):this.isScrollbarYUsingRight=!0,this.scrollbarYOuterWidth=this.isRtl?p((o=f(o=this.scrollbarY)).width)+p(o.paddingLeft)+p(o.paddingRight)+p(o.borderLeftWidth)+p(o.borderRightWidth):null,this.railBorderYWidth=p(n.borderTopWidth)+p(n.borderBottomWidth),a(this.scrollbarYRail,{display:"block"}),this.railYMarginHeight=p(n.marginTop)+p(n.marginBottom),a(this.scrollbarYRail,{display:""}),this.railYHeight=null,this.railYRatio=null,this.reach={x:t.scrollLeft<=0?"start":t.scrollLeft>=this.contentWidth-this.containerWidth?"end":null,y:t.scrollTop<=0?"start":t.scrollTop>=this.contentHeight-this.containerHeight?"end":null},this.isAlive=!0,this.settings.handlers.forEach(function(t){return w[t](l)}),this.lastScrollTop=Math.floor(t.scrollTop),this.lastScrollLeft=t.scrollLeft,this.event.bind(this.element,"scroll",function(t){return l.onScroll(t)}),X(this)};return t.prototype.update=function(){this.isAlive&&(this.negativeScrollAdjustment=this.isNegativeScroll?this.element.scrollWidth-this.element.clientWidth:0,a(this.scrollbarXRail,{display:"block"}),a(this.scrollbarYRail,{display:"block"}),this.railXMarginWidth=p(f(this.scrollbarXRail).marginLeft)+p(f(this.scrollbarXRail).marginRight),this.railYMarginHeight=p(f(this.scrollbarYRail).marginTop)+p(f(this.scrollbarYRail).marginBottom),a(this.scrollbarXRail,{display:"none"}),a(this.scrollbarYRail,{display:"none"}),X(this),e(this,"top",0,!1,!0),e(this,"left",0,!1,!0),a(this.scrollbarXRail,{display:""}),a(this.scrollbarYRail,{display:""}))},t.prototype.onScroll=function(t){this.isAlive&&(X(this),e(this,"top",this.element.scrollTop-this.lastScrollTop),e(this,"left",this.element.scrollLeft-this.lastScrollLeft),this.lastScrollTop=Math.floor(this.element.scrollTop),this.lastScrollLeft=this.element.scrollLeft)},t.prototype.destroy=function(){this.isAlive&&(this.event.unbindAll(),o(this.scrollbarX),o(this.scrollbarY),o(this.scrollbarXRail),o(this.scrollbarYRail),this.removePsClasses(),this.element=null,this.scrollbarX=null,this.scrollbarY=null,this.scrollbarXRail=null,this.scrollbarYRail=null,this.isAlive=!1)},t.prototype.removePsClasses=function(){this.element.className=this.element.className.split(" ").filter(function(t){return!t.match(/^ps([-_].+|)$/)}).join(" ")},t});