var st=typeof globalThis!="undefined"?globalThis:typeof window!="undefined"?window:typeof global!="undefined"?global:typeof self!="undefined"?self:{};function ut(x){return x&&x.__esModule&&Object.prototype.hasOwnProperty.call(x,"default")?x.default:x}var ct={exports:{}};(function(x,Z){(function(g,e){x.exports=e()})(st,function(){return function(g){function e(n){if(r[n])return r[n].exports;var s=r[n]={exports:{},id:n,loaded:!1};return g[n].call(s.exports,s,s.exports,e),s.loaded=!0,s.exports}var r={};return e.m=g,e.c=r,e.p="dist/",e(0)}([function(g,e,r){function n(i){return i&&i.__esModule?i:{default:i}}var s=Object.assign||function(i){for(var j=1;j<arguments.length;j++){var q=arguments[j];for(var H in q)Object.prototype.hasOwnProperty.call(q,H)&&(i[H]=q[H])}return i},v=r(1),w=(n(v),r(6)),a=n(w),m=r(7),c=n(m),d=r(8),u=n(d),p=r(9),O=n(p),E=r(10),Y=n(E),K=r(11),J=n(K),Q=r(14),F=n(Q),S=[],G=!1,b={offset:120,delay:0,easing:"ease",duration:400,disable:!1,once:!1,startEvent:"DOMContentLoaded",throttleDelay:99,debounceDelay:50,disableMutationObserver:!1},A=function(){var i=arguments.length>0&&arguments[0]!==void 0&&arguments[0];if(i&&(G=!0),G)return S=(0,J.default)(S,b),(0,Y.default)(S,b.once),S},N=function(){S=(0,F.default)(),A()},o=function(){S.forEach(function(i,j){i.node.removeAttribute("data-aos"),i.node.removeAttribute("data-aos-easing"),i.node.removeAttribute("data-aos-duration"),i.node.removeAttribute("data-aos-delay")})},t=function(i){return i===!0||i==="mobile"&&O.default.mobile()||i==="phone"&&O.default.phone()||i==="tablet"&&O.default.tablet()||typeof i=="function"&&i()===!0},l=function(i){b=s(b,i),S=(0,F.default)();var j=document.all&&!window.atob;return t(b.disable)||j?o():(b.disableMutationObserver||u.default.isSupported()||(console.info(`
      aos: MutationObserver is not supported on this browser,
      code mutations observing has been disabled.
      You may have to call "refreshHard()" by yourself.
    `),b.disableMutationObserver=!0),document.querySelector("body").setAttribute("data-aos-easing",b.easing),document.querySelector("body").setAttribute("data-aos-duration",b.duration),document.querySelector("body").setAttribute("data-aos-delay",b.delay),b.startEvent==="DOMContentLoaded"&&["complete","interactive"].indexOf(document.readyState)>-1?A(!0):b.startEvent==="load"?window.addEventListener(b.startEvent,function(){A(!0)}):document.addEventListener(b.startEvent,function(){A(!0)}),window.addEventListener("resize",(0,c.default)(A,b.debounceDelay,!0)),window.addEventListener("orientationchange",(0,c.default)(A,b.debounceDelay,!0)),window.addEventListener("scroll",(0,a.default)(function(){(0,Y.default)(S,b.once)},b.throttleDelay)),b.disableMutationObserver||u.default.ready("[data-aos]",N),S)};g.exports={init:l,refresh:A,refreshHard:N}},function(g,e){},,,,,function(g,e){(function(r){function n(t,l,i){function j(f){var L=_,C=T;return _=T=void 0,$=f,k=t.apply(C,L)}function q(f){return $=f,h=setTimeout(B,l),W?j(f):k}function H(f){var L=f-M,C=f-$,nt=l-L;return D?N(nt,P-C):nt}function I(f){var L=f-M,C=f-$;return M===void 0||L>=l||L<0||D&&C>=P}function B(){var f=o();return I(f)?V(f):void(h=setTimeout(B,H(f)))}function V(f){return h=void 0,y&&_?j(f):(_=T=void 0,k)}function tt(){h!==void 0&&clearTimeout(h),$=0,_=M=T=h=void 0}function R(){return h===void 0?k:V(o())}function z(){var f=o(),L=I(f);if(_=arguments,T=this,M=f,L){if(h===void 0)return q(M);if(D)return h=setTimeout(B,l),j(M)}return h===void 0&&(h=setTimeout(B,l)),k}var _,T,P,k,h,M,$=0,W=!1,D=!1,y=!0;if(typeof t!="function")throw new TypeError(d);return l=m(l)||0,v(i)&&(W=!!i.leading,D="maxWait"in i,P=D?A(m(i.maxWait)||0,l):P,y="trailing"in i?!!i.trailing:y),z.cancel=tt,z.flush=R,z}function s(t,l,i){var j=!0,q=!0;if(typeof t!="function")throw new TypeError(d);return v(i)&&(j="leading"in i?!!i.leading:j,q="trailing"in i?!!i.trailing:q),n(t,l,{leading:j,maxWait:l,trailing:q})}function v(t){var l=typeof t=="undefined"?"undefined":c(t);return!!t&&(l=="object"||l=="function")}function w(t){return!!t&&(typeof t=="undefined"?"undefined":c(t))=="object"}function a(t){return(typeof t=="undefined"?"undefined":c(t))=="symbol"||w(t)&&b.call(t)==p}function m(t){if(typeof t=="number")return t;if(a(t))return u;if(v(t)){var l=typeof t.valueOf=="function"?t.valueOf():t;t=v(l)?l+"":l}if(typeof t!="string")return t===0?t:+t;t=t.replace(O,"");var i=Y.test(t);return i||K.test(t)?J(t.slice(2),i?2:8):E.test(t)?u:+t}var c=typeof Symbol=="function"&&typeof Symbol.iterator=="symbol"?function(t){return typeof t}:function(t){return t&&typeof Symbol=="function"&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},d="Expected a function",u=NaN,p="[object Symbol]",O=/^\s+|\s+$/g,E=/^[-+]0x[0-9a-f]+$/i,Y=/^0b[01]+$/i,K=/^0o[0-7]+$/i,J=parseInt,Q=(typeof r=="undefined"?"undefined":c(r))=="object"&&r&&r.Object===Object&&r,F=(typeof self=="undefined"?"undefined":c(self))=="object"&&self&&self.Object===Object&&self,S=Q||F||Function("return this")(),G=Object.prototype,b=G.toString,A=Math.max,N=Math.min,o=function(){return S.Date.now()};g.exports=s}).call(e,function(){return this}())},function(g,e){(function(r){function n(o,t,l){function i(y){var f=z,L=_;return z=_=void 0,M=y,P=o.apply(L,f)}function j(y){return M=y,k=setTimeout(I,t),$?i(y):P}function q(y){var f=y-h,L=y-M,C=t-f;return W?A(C,T-L):C}function H(y){var f=y-h,L=y-M;return h===void 0||f>=t||f<0||W&&L>=T}function I(){var y=N();return H(y)?B(y):void(k=setTimeout(I,q(y)))}function B(y){return k=void 0,D&&z?i(y):(z=_=void 0,P)}function V(){k!==void 0&&clearTimeout(k),M=0,z=h=_=k=void 0}function tt(){return k===void 0?P:B(N())}function R(){var y=N(),f=H(y);if(z=arguments,_=this,h=y,f){if(k===void 0)return j(h);if(W)return k=setTimeout(I,t),i(h)}return k===void 0&&(k=setTimeout(I,t)),P}var z,_,T,P,k,h,M=0,$=!1,W=!1,D=!0;if(typeof o!="function")throw new TypeError(c);return t=a(t)||0,s(l)&&($=!!l.leading,W="maxWait"in l,T=W?b(a(l.maxWait)||0,t):T,D="trailing"in l?!!l.trailing:D),R.cancel=V,R.flush=tt,R}function s(o){var t=typeof o=="undefined"?"undefined":m(o);return!!o&&(t=="object"||t=="function")}function v(o){return!!o&&(typeof o=="undefined"?"undefined":m(o))=="object"}function w(o){return(typeof o=="undefined"?"undefined":m(o))=="symbol"||v(o)&&G.call(o)==u}function a(o){if(typeof o=="number")return o;if(w(o))return d;if(s(o)){var t=typeof o.valueOf=="function"?o.valueOf():o;o=s(t)?t+"":t}if(typeof o!="string")return o===0?o:+o;o=o.replace(p,"");var l=E.test(o);return l||Y.test(o)?K(o.slice(2),l?2:8):O.test(o)?d:+o}var m=typeof Symbol=="function"&&typeof Symbol.iterator=="symbol"?function(o){return typeof o}:function(o){return o&&typeof Symbol=="function"&&o.constructor===Symbol&&o!==Symbol.prototype?"symbol":typeof o},c="Expected a function",d=NaN,u="[object Symbol]",p=/^\s+|\s+$/g,O=/^[-+]0x[0-9a-f]+$/i,E=/^0b[01]+$/i,Y=/^0o[0-7]+$/i,K=parseInt,J=(typeof r=="undefined"?"undefined":m(r))=="object"&&r&&r.Object===Object&&r,Q=(typeof self=="undefined"?"undefined":m(self))=="object"&&self&&self.Object===Object&&self,F=J||Q||Function("return this")(),S=Object.prototype,G=S.toString,b=Math.max,A=Math.min,N=function(){return F.Date.now()};g.exports=n}).call(e,function(){return this}())},function(g,e){function r(m){var c=void 0,d=void 0;for(c=0;c<m.length;c+=1)if(d=m[c],d.dataset&&d.dataset.aos||d.children&&r(d.children))return!0;return!1}function n(){return window.MutationObserver||window.WebKitMutationObserver||window.MozMutationObserver}function s(){return!!n()}function v(m,c){var d=window.document,u=n(),p=new u(w);a=c,p.observe(d.documentElement,{childList:!0,subtree:!0,removedNodes:!0})}function w(m){m&&m.forEach(function(c){var d=Array.prototype.slice.call(c.addedNodes),u=Array.prototype.slice.call(c.removedNodes),p=d.concat(u);if(r(p))return a()})}Object.defineProperty(e,"__esModule",{value:!0});var a=function(){};e.default={isSupported:s,ready:v}},function(g,e){function r(d,u){if(!(d instanceof u))throw new TypeError("Cannot call a class as a function")}function n(){return navigator.userAgent||navigator.vendor||window.opera||""}Object.defineProperty(e,"__esModule",{value:!0});var s=function(){function d(u,p){for(var O=0;O<p.length;O++){var E=p[O];E.enumerable=E.enumerable||!1,E.configurable=!0,"value"in E&&(E.writable=!0),Object.defineProperty(u,E.key,E)}}return function(u,p,O){return p&&d(u.prototype,p),O&&d(u,O),u}}(),v=/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i,w=/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i,a=/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i,m=/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i,c=function(){function d(){r(this,d)}return s(d,[{key:"phone",value:function(){var u=n();return!(!v.test(u)&&!w.test(u.substr(0,4)))}},{key:"mobile",value:function(){var u=n();return!(!a.test(u)&&!m.test(u.substr(0,4)))}},{key:"tablet",value:function(){return this.mobile()&&!this.phone()}}]),d}();e.default=new c},function(g,e){Object.defineProperty(e,"__esModule",{value:!0});var r=function(s,v,w){var a=s.node.getAttribute("data-aos-once");v>s.position?s.node.classList.add("aos-animate"):typeof a!="undefined"&&(a==="false"||!w&&a!=="true")&&s.node.classList.remove("aos-animate")},n=function(s,v){var w=window.pageYOffset,a=window.innerHeight;s.forEach(function(m,c){r(m,a+w,v)})};e.default=n},function(g,e,r){function n(a){return a&&a.__esModule?a:{default:a}}Object.defineProperty(e,"__esModule",{value:!0});var s=r(12),v=n(s),w=function(a,m){return a.forEach(function(c,d){c.node.classList.add("aos-init"),c.position=(0,v.default)(c.node,m.offset)}),a};e.default=w},function(g,e,r){function n(a){return a&&a.__esModule?a:{default:a}}Object.defineProperty(e,"__esModule",{value:!0});var s=r(13),v=n(s),w=function(a,m){var c=0,d=0,u=window.innerHeight,p={offset:a.getAttribute("data-aos-offset"),anchor:a.getAttribute("data-aos-anchor"),anchorPlacement:a.getAttribute("data-aos-anchor-placement")};switch(p.offset&&!isNaN(p.offset)&&(d=parseInt(p.offset)),p.anchor&&document.querySelectorAll(p.anchor)&&(a=document.querySelectorAll(p.anchor)[0]),c=(0,v.default)(a).top,p.anchorPlacement){case"top-bottom":break;case"center-bottom":c+=a.offsetHeight/2;break;case"bottom-bottom":c+=a.offsetHeight;break;case"top-center":c+=u/2;break;case"bottom-center":c+=u/2+a.offsetHeight;break;case"center-center":c+=u/2+a.offsetHeight/2;break;case"top-top":c+=u;break;case"bottom-top":c+=a.offsetHeight+u;break;case"center-top":c+=a.offsetHeight/2+u}return p.anchorPlacement||p.offset||isNaN(m)||(d=m),c+d};e.default=w},function(g,e){Object.defineProperty(e,"__esModule",{value:!0});var r=function(n){for(var s=0,v=0;n&&!isNaN(n.offsetLeft)&&!isNaN(n.offsetTop);)s+=n.offsetLeft-(n.tagName!="BODY"?n.scrollLeft:0),v+=n.offsetTop-(n.tagName!="BODY"?n.scrollTop:0),n=n.offsetParent;return{top:v,left:s}};e.default=r},function(g,e){Object.defineProperty(e,"__esModule",{value:!0});var r=function(n){return n=n||document.querySelectorAll("[data-aos]"),Array.prototype.map.call(n,function(s){return{node:s}})};e.default=r}])})})(ct);var dt=ct.exports;const lt=ut(dt);lt.init();const et=document.querySelector(".header"),U=document.querySelector(".hamburger"),it=document.querySelector(".dropdown");U==null||U.addEventListener("click",x=>{et.classList.contains("active")?(it.classList.remove("active"),U.classList.remove("active"),et.classList.remove("active")):(it.classList.add("active"),U.classList.add("active"),et.classList.add("active"))});const at=document.querySelectorAll("[data-tab-nav]"),ft=document.querySelectorAll(".tab-target-box");at.forEach(x=>{x.addEventListener("click",()=>{const Z=x.getAttribute("data-tab-target"),g=document.getElementById(Z);ft.forEach(e=>{e.classList.contains("active")&&e.classList.remove("active")}),at.forEach(e=>{e.classList.contains("active")&&e.classList.remove("active")}),g.classList.add("active"),x.classList.add("active")})});const ot=document.querySelectorAll(".project"),X=document.querySelectorAll("[data-tab-nav-project]");let rt;X==null||X.forEach(x=>{x.addEventListener("click",Z=>{X.forEach(e=>{e.classList.contains("active")&&e.classList.remove("active")});const g=x.getAttribute("data-tab-target");ot.forEach(e=>{e.classList.contains("active")&&e.classList.remove("active")}),clearTimeout(rt),rt=setTimeout(()=>{g=="all"?ot.forEach(e=>{e.classList.add("active")}):ot.forEach(e=>{e.dataset.cat==g&&e.classList.add("active")})},50),x.classList.add("active")})});document.addEventListener("DOMContentLoaded",function(){console.log("js executed...")});
