!function(e,t){var a=function(){t(e.lazySizes),e.removeEventListener("lazyunveilread",a,!0)};t=t.bind(null,e,e.document),"object"==typeof module&&module.exports?t(require("lazysizes"),require("../fix-ios-sizes/fix-ios-sizes")):e.lazySizes?a():e.addEventListener("lazyunveilread",a,!0)}(window,function(e,t,a){"use strict";var n,i=a&&a.cfg||e.lazySizesConfig,r=t.createElement("img"),s="sizes"in r&&"srcset"in r,o=/\s+\d+h/g,l=function(){var e=/\s+(\d+)(w|h)\s+(\d+)(w|h)/,a=Array.prototype.forEach;return function(n){var i=t.createElement("img"),r=function(t){var a,n=t.getAttribute(lazySizesConfig.srcsetAttr);n&&(n.match(e)&&(a="w"==RegExp.$2?RegExp.$1/RegExp.$3:RegExp.$3/RegExp.$1,a&&t.setAttribute("data-aspectratio",a)),t.setAttribute(lazySizesConfig.srcsetAttr,n.replace(o,"")))},s=function(e){var t=e.target.parentNode;t&&"PICTURE"==t.nodeName&&a.call(t.getElementsByTagName("source"),r),r(e.target)},l=function(){i.currentSrc&&t.removeEventListener("lazybeforeunveil",s)};n[1]&&(t.addEventListener("lazybeforeunveil",s),i.onload=l,i.onerror=l,i.srcset="data:,a 1w 1h",i.complete&&l())}}();if(i||(i={},e.lazySizesConfig=i),i.supportsType||(i.supportsType=function(e){return!e}),!e.picturefill&&!i.pf){if(e.HTMLPictureElement&&s)return t.msElementsFromPoint&&l(navigator.userAgent.match(/Edge\/(\d+)/)),void(i.pf=function(){});i.pf=function(t){var a,i;if(!e.picturefill)for(a=0,i=t.elements.length;i>a;a++)n(t.elements[a])},n=function(){var r=function(e,t){return e.w-t.w},l=/^\s*\d+\.*\d*px\s*$/,u=function(e){var t,a,n=e.length,i=e[n-1],r=0;for(r;n>r;r++)if(i=e[r],i.d=i.w/e.w,i.d>=e.d){!i.cached&&(t=e[r-1])&&t.d>e.d-.13*Math.pow(e.d,2.2)&&(a=Math.pow(t.d-.6,1.6),t.cached&&(t.d+=.15*a),t.d+(i.d-e.d)*a>e.d&&(i=t));break}return i},d=function(){var e,t=/(([^,\s].[^\s]+)\s+(\d+)w)/g,a=/\s/,n=function(t,a,n,i){e.push({c:a,u:n,w:1*i})};return function(i){return e=[],i=i.trim(),i.replace(o,"").replace(t,n),e.length||!i||a.test(i)||e.push({c:i,u:i,w:99}),e}}(),c=function(){c.init||(c.init=!0,addEventListener("resize",function(){var e,a=t.getElementsByClassName("lazymatchmedia"),i=function(){var e,t;for(e=0,t=a.length;t>e;e++)n(a[e])};return function(){clearTimeout(e),e=setTimeout(i,66)}}()))},f=function(t,n){var r,s=t.getAttribute("srcset")||t.getAttribute(i.srcsetAttr);!s&&n&&(s=t._lazypolyfill?t._lazypolyfill._set:t.getAttribute(i.srcAttr)||t.getAttribute("src")),t._lazypolyfill&&t._lazypolyfill._set==s||(r=d(s||""),n&&t.parentNode&&(r.isPicture="PICTURE"==t.parentNode.nodeName.toUpperCase(),r.isPicture&&e.matchMedia&&(a.aC(t,"lazymatchmedia"),c())),r._set=s,Object.defineProperty(t,"_lazypolyfill",{value:r,writable:!0}))},z=function(t){var n=e.devicePixelRatio||1,i=a.getX&&a.getX(t);return Math.min(i||n,2.5,n)},g=function(t){return e.matchMedia?(g=function(e){return!e||(matchMedia(e)||{}).matches})(t):!t},y=function(e){var t,n,s,o,d,c,y;if(o=e,f(o,!0),d=o._lazypolyfill,d.isPicture)for(n=0,t=e.parentNode.getElementsByTagName("source"),s=t.length;s>n;n++)if(i.supportsType(t[n].getAttribute("type"),e)&&g(t[n].getAttribute("media"))){o=t[n],f(o),d=o._lazypolyfill;break}return d.length>1?(y=o.getAttribute("sizes")||"",y=l.test(y)&&parseInt(y,10)||a.gW(e,e.parentNode),d.d=z(e),!d.src||!d.w||d.w<y?(d.w=y,c=u(d.sort(r)),d.src=c):c=d.src):c=d[0],c},m=function(e){if(!s||!e.parentNode||"PICTURE"==e.parentNode.nodeName.toUpperCase()){var t=y(e);t&&t.u&&e._lazypolyfill.cur!=t.u&&(e._lazypolyfill.cur=t.u,t.cached=!0,e.setAttribute(i.srcAttr,t.u),e.setAttribute("src",t.u))}};return m.parse=d,m}(),i.loadedClass&&i.loadingClass&&!function(){var e=[];['img[sizes$="px"][srcset].',"picture > img:not([srcset])."].forEach(function(t){e.push(t+i.loadedClass),e.push(t+i.loadingClass)}),i.pf({elements:t.querySelectorAll(e.join(", "))})}()}}),function(e,t){var a=function(){t(e.lazySizes),e.removeEventListener("lazyunveilread",a,!0)};t=t.bind(null,e,e.document),"object"==typeof module&&module.exports?t(require("lazysizes")):e.lazySizes?a():e.addEventListener("lazyunveilread",a,!0)}(window,function(e,t,a){"use strict";if(e.addEventListener){var n=/\s+/g,i=/\s*\|\s+|\s+\|\s*/g,r=/^(.+?)(?:\s+\[\s*(.+?)\s*\])?$/,s=/\(|\)|'/,o={contain:1,cover:1},l=function(e){var t=a.gW(e,e.parentNode);return(!e._lazysizesWidth||t>e._lazysizesWidth)&&(e._lazysizesWidth=t),e._lazysizesWidth},u=function(e){var t;return t=(getComputedStyle(e)||{getPropertyValue:function(){}}).getPropertyValue("background-size"),!o[t]&&o[e.style.backgroundSize]&&(t=e.style.backgroundSize),t},d=function(e,a,s){var o=t.createElement("picture"),l=a.getAttribute(lazySizesConfig.sizesAttr),u=a.getAttribute("data-ratio"),d=a.getAttribute("data-optimumx");a._lazybgset&&a._lazybgset.parentNode==a&&a.removeChild(a._lazybgset),Object.defineProperty(s,"_lazybgset",{value:a,writable:!0}),Object.defineProperty(a,"_lazybgset",{value:o,writable:!0}),e=e.replace(n," ").split(i),o.style.display="none",s.className=lazySizesConfig.lazyClass,1!=e.length||l||(l="auto"),e.forEach(function(e){var a=t.createElement("source");l&&"auto"!=l&&a.setAttribute("sizes",l),e.match(r)&&(a.setAttribute(lazySizesConfig.srcsetAttr,RegExp.$1),RegExp.$2&&a.setAttribute("media",lazySizesConfig.customMedia[RegExp.$2]||RegExp.$2)),o.appendChild(a)}),l&&(s.setAttribute(lazySizesConfig.sizesAttr,l),a.removeAttribute(lazySizesConfig.sizesAttr),a.removeAttribute("sizes")),d&&s.setAttribute("data-optimumx",d),u&&s.setAttribute("data-ratio",u),o.appendChild(s),a.appendChild(o)},c=function(e){if(e.target._lazybgset){var t=e.target,n=t._lazybgset,i=t.currentSrc||t.src;i&&(n.style.backgroundImage="url("+(s.test(i)?JSON.stringify(i):i)+")"),t._lazybgsetLoading&&(a.fire(n,"_lazyloaded",{},!1,!0),delete t._lazybgsetLoading)}};addEventListener("lazybeforeunveil",function(e){var n,i,r;!e.defaultPrevented&&(n=e.target.getAttribute("data-bgset"))&&(r=e.target,i=t.createElement("img"),i.alt="",i._lazybgsetLoading=!0,e.detail.firesLoad=!0,d(n,r,i),setTimeout(function(){a.loader.unveil(i),a.rAF(function(){a.fire(i,"_lazyloaded",{},!0,!0),i.complete&&c({target:i})})}))}),t.addEventListener("load",c,!0),e.addEventListener("lazybeforesizes",function(e){if(e.detail.instance==a&&e.target._lazybgset&&e.detail.dataAttr){var t=e.target._lazybgset,n=u(t);o[n]&&(e.target._lazysizesParentFit=n,a.rAF(function(){e.target.setAttribute("data-parent-fit",n),e.target._lazysizesParentFit&&delete e.target._lazysizesParentFit}))}},!0),t.documentElement.addEventListener("lazybeforesizes",function(e){!e.defaultPrevented&&e.target._lazybgset&&e.detail.instance==a&&(e.detail.width=l(e.target._lazybgset))})}}),function(e,t){var a=function(){t(e.lazySizes),e.removeEventListener("lazyunveilread",a,!0)};t=t.bind(null,e,e.document),"object"==typeof module&&module.exports?t(require("lazysizes")):e.lazySizes?a():e.addEventListener("lazyunveilread",a,!0)}(window,function(e,t,a){"use strict";if(e.addEventListener){var n=e.requestAnimationFrame||setTimeout,i=function(){var r,s,o,l,u=a.cfg,d={"data-bgset":1,"data-include":1,"data-poster":1,"data-bg":1,"data-script":1},c="(\\s|^)("+u.loadedClass,f=t.documentElement,z=function(e){n(function(){a.rC(e,u.loadedClass),u.unloadedClass&&a.rC(e,u.unloadedClass),a.aC(e,u.lazyClass)})},g=function(e){var t,a,n,i;for(t=0,a=e.length;a>t;t++)n=e[t],i=n.target,i.getAttribute(n.attributeName)&&("source"==i.localName&&i.parentNode&&(i=i.parentNode.querySelector("img")),i&&c.test(i.className)&&z(i))};u.unloadedClass&&(c+="|"+u.unloadedClass),c+="|"+u.loadingClass+")(\\s|$)",c=new RegExp(c),d[u.srcAttr]=1,d[u.srcsetAttr]=1,e.MutationObserver?(o=new MutationObserver(g),r=function(){l||(l=!0,o.observe(f,{subtree:!0,attributes:!0,attributeFilter:Object.keys(d)}))},s=function(){l&&(l=!1,o.disconnect())}):(f.addEventListener("DOMAttrModified",function(){var e,t=[],a=function(){g(t),t=[],e=!1};return function(n){l&&d[n.attrName]&&n.newValue&&(t.push({target:n.target,attributeName:n.attrName}),e||(setTimeout(a),e=!0))}}(),!0),r=function(){l=!0},s=function(){l=!1}),addEventListener("lazybeforeunveil",s,!0),addEventListener("lazybeforeunveil",r),addEventListener("lazybeforesizes",s,!0),addEventListener("lazybeforesizes",r),r(),removeEventListener("lazybeforeunveil",i)};addEventListener("lazybeforeunveil",i)}}),function(e,t){var a=t(e,e.document);e.lazySizes=a,"object"==typeof module&&module.exports&&(module.exports=a)}(window,function(e,t){"use strict";if(t.getElementsByClassName){var a,n,i=t.documentElement,r=e.Date,s=e.HTMLPictureElement,o="addEventListener",l="getAttribute",u=e[o],d=e.setTimeout,c=e.requestAnimationFrame||d,f=e.requestIdleCallback,z=/^picture$/i,g=["load","error","lazyincluded","_lazyloaded"],y={},m=Array.prototype.forEach,v=function(e,t){return y[t]||(y[t]=new RegExp("(\\s|^)"+t+"(\\s|$)")),y[t].test(e[l]("class")||"")&&y[t]},p=function(e,t){v(e,t)||e.setAttribute("class",(e[l]("class")||"").trim()+" "+t)},b=function(e,t){var a;(a=v(e,t))&&e.setAttribute("class",(e[l]("class")||"").replace(a," "))},h=function(e,t,a){var n=a?o:"removeEventListener";a&&h(e,t),g.forEach(function(a){e[n](a,t)})},E=function(e,n,i,r,s){var o=t.createEvent("CustomEvent");return i||(i={}),i.instance=a,o.initCustomEvent(n,!r,!s,i),e.dispatchEvent(o),o},A=function(t,a){var i;!s&&(i=e.picturefill||n.pf)?i({reevaluate:!0,elements:[t]}):a&&a.src&&(t.src=a.src)},C=function(e,t){return(getComputedStyle(e,null)||{})[t]},_=function(e,t,a){for(a=a||e.offsetWidth;a<n.minSize&&t&&!e._lazysizesWidth;)a=t.offsetWidth,t=t.parentNode;return a},w=function(){var e,a,n=[],i=[],r=n,s=function(){var t=r;for(r=n.length?i:n,e=!0,a=!1;t.length;)t.shift()();e=!1},o=function(n,i){e&&!i?n.apply(this,arguments):(r.push(n),a||(a=!0,(t.hidden?d:c)(s)))};return o._lsFlush=s,o}(),N=function(e,t){return t?function(){w(e)}:function(){var t=this,a=arguments;w(function(){e.apply(t,a)})}},L=function(e){var t,a=0,n=125,i=666,s=i,o=function(){t=!1,a=r.now(),e()},l=f?function(){f(o,{timeout:s}),s!==i&&(s=i)}:N(function(){d(o)},!0);return function(e){var i;(e=e===!0)&&(s=44),t||(t=!0,i=n-(r.now()-a),0>i&&(i=0),e||9>i&&f?l():d(l,i))}},S=function(e){var t,a,n=99,i=function(){t=null,e()},s=function(){var e=r.now()-a;n>e?d(s,n-e):(f||i)(i)};return function(){a=r.now(),t||(t=d(s,n))}},x=function(){var s,c,f,g,y,_,x,P,R,T,$,W,F,k,O=/^img$/i,B=/^iframe$/i,j="onscroll"in e&&!/glebot/.test(navigator.userAgent),q=0,I=0,H=0,D=-1,U=function(e){H--,e&&e.target&&h(e.target,U),(!e||0>H||!e.target)&&(H=0)},V=function(e,a){var n,r=e,s="hidden"==C(t.body,"visibility")||"hidden"!=C(e,"visibility");for(P-=a,$+=a,R-=a,T+=a;s&&(r=r.offsetParent)&&r!=t.body&&r!=i;)s=(C(r,"opacity")||1)>0,s&&"visible"!=C(r,"overflow")&&(n=r.getBoundingClientRect(),s=T>n.left&&R<n.right&&$>n.top-1&&P<n.bottom+1);return s},X=function(){var e,r,o,u,d,f,z,y,m,v=a.elements;if((g=n.loadMode)&&8>H&&(e=v.length)){r=0,D++,null==F&&("expand"in n||(n.expand=i.clientHeight>500&&i.clientWidth>500?500:370),W=n.expand,F=W*n.expFactor),F>I&&1>H&&D>2&&g>2&&!t.hidden?(I=F,D=0):I=g>1&&D>1&&6>H?W:q;for(;e>r;r++)if(v[r]&&!v[r]._lazyRace)if(j)if((y=v[r][l]("data-expand"))&&(f=1*y)||(f=I),m!==f&&(_=innerWidth+f*k,x=innerHeight+f,z=-1*f,m=f),o=v[r].getBoundingClientRect(),($=o.bottom)>=z&&(P=o.top)<=x&&(T=o.right)>=z*k&&(R=o.left)<=_&&($||T||R||P)&&(n.loadHidden||"hidden"!=C(v[r],"visibility"))&&(c&&3>H&&!y&&(3>g||4>D)||V(v[r],f))){if(te(v[r]),d=!0,H>9)break}else!d&&c&&!u&&4>H&&4>D&&g>2&&(s[0]||n.preloadAfterLoad)&&(s[0]||!y&&($||T||R||P||"auto"!=v[r][l](n.sizesAttr)))&&(u=s[0]||v[r]);else te(v[r]);u&&!d&&te(u)}},J=L(X),G=function(e){p(e.target,n.loadedClass),b(e.target,n.loadingClass),h(e.target,Q),E(e.target,"lazyloaded")},K=N(G),Q=function(e){K({target:e.target})},Y=function(e,t){try{e.contentWindow.location.replace(t)}catch(a){e.src=t}},Z=function(e){var t,a=e[l](n.srcsetAttr);(t=n.customMedia[e[l]("data-media")||e[l]("media")])&&e.setAttribute("media",t),a&&e.setAttribute("srcset",a)},ee=N(function(e,t,a,i,r){var s,o,u,c,g,y;(g=E(e,"lazybeforeunveil",t)).defaultPrevented||(i&&(a?p(e,n.autosizesClass):e.setAttribute("sizes",i)),o=e[l](n.srcsetAttr),s=e[l](n.srcAttr),r&&(u=e.parentNode,c=u&&z.test(u.nodeName||"")),y=t.firesLoad||"src"in e&&(o||s||c),g={target:e},y&&(h(e,U,!0),clearTimeout(f),f=d(U,2500),p(e,n.loadingClass),h(e,Q,!0)),c&&m.call(u.getElementsByTagName("source"),Z),o?e.setAttribute("srcset",o):s&&!c&&(B.test(e.nodeName)?Y(e,s):e.src=s),r&&(o||c)&&A(e,{src:s})),e._lazyRace&&delete e._lazyRace,b(e,n.lazyClass),w(function(){(!y||e.complete&&e.naturalWidth>1)&&(y?U(g):H--,G(g))},!0)}),te=function(e){var t,a=O.test(e.nodeName),i=a&&(e[l](n.sizesAttr)||e[l]("sizes")),r="auto"==i;(!r&&c||!a||!e[l]("src")&&!e.srcset||e.complete||v(e,n.errorClass))&&(t=E(e,"lazyunveilread").detail,r&&M.updateElem(e,!0,e.offsetWidth),e._lazyRace=!0,H++,ee(e,t,r,i,a))},ae=function(){if(!c){if(r.now()-y<999)return void d(ae,999);var e=S(function(){n.loadMode=3,J()});c=!0,n.loadMode=3,J(),u("scroll",function(){3==n.loadMode&&(n.loadMode=2),e()},!0)}};return{_:function(){y=r.now(),a.elements=t.getElementsByClassName(n.lazyClass),s=t.getElementsByClassName(n.lazyClass+" "+n.preloadClass),k=n.hFac,u("scroll",J,!0),u("resize",J,!0),e.MutationObserver?new MutationObserver(J).observe(i,{childList:!0,subtree:!0,attributes:!0}):(i[o]("DOMNodeInserted",J,!0),i[o]("DOMAttrModified",J,!0),setInterval(J,999)),u("hashchange",J,!0),["focus","mouseover","click","load","transitionend","animationend","webkitAnimationEnd"].forEach(function(e){t[o](e,J,!0)}),/d$|^c/.test(t.readyState)?ae():(u("load",ae),t[o]("DOMContentLoaded",J),d(ae,2e4)),a.elements.length?(X(),w._lsFlush()):J()},checkElems:J,unveil:te}}(),M=function(){var e,a=N(function(e,t,a,n){var i,r,s;if(e._lazysizesWidth=n,n+="px",e.setAttribute("sizes",n),z.test(t.nodeName||""))for(i=t.getElementsByTagName("source"),r=0,s=i.length;s>r;r++)i[r].setAttribute("sizes",n);a.detail.dataAttr||A(e,a.detail)}),i=function(e,t,n){var i,r=e.parentNode;r&&(n=_(e,r,n),i=E(e,"lazybeforesizes",{width:n,dataAttr:!!t}),i.defaultPrevented||(n=i.detail.width,n&&n!==e._lazysizesWidth&&a(e,r,i,n)))},r=function(){var t,a=e.length;if(a)for(t=0;a>t;t++)i(e[t])},s=S(r);return{_:function(){e=t.getElementsByClassName(n.autosizesClass),u("resize",s)},checkElems:s,updateElem:i}}(),P=function(){P.i||(P.i=!0,M._(),x._())};return function(){var t,a={lazyClass:"lazyload",loadedClass:"lazyloaded",loadingClass:"lazyloading",preloadClass:"lazypreload",errorClass:"lazyerror",autosizesClass:"lazyautosizes",srcAttr:"data-src",srcsetAttr:"data-srcset",sizesAttr:"data-sizes",minSize:40,customMedia:{},init:!0,expFactor:1.5,hFac:.8,loadMode:2,loadHidden:!0};n=e.lazySizesConfig||e.lazysizesConfig||{};for(t in a)t in n||(n[t]=a[t]);e.lazySizesConfig=n,d(function(){n.init&&P()})}(),a={cfg:n,autoSizer:M,loader:x,init:P,uP:A,aC:p,rC:b,hC:v,fire:E,gW:_,rAF:w}}});