(function(){

    //functions
    const findPos = function(obj) {
        let cur_top = 0;
        if (obj.offsetParent) {
            do {
                cur_top += obj.offsetTop;
            } while (obj = obj.offsetParent);
            return [cur_top];
        }
    };
    const urlParam = function(name) {
        const results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        if (results===null){
            return null;
        }
        else{
            return decodeURI(results[1]) || 0;
        }
    };

    const updateQueryStringParameter = function(url, key, value) {
        const re = new RegExp("([?&])" + key + "=.*?(&|$)", "i"),
              separator = url.indexOf('?') !== -1 ? "&" : "?";
        if (url.match(re))
          return url.replace(re, '$1' + key + "=" + value + '$2');
        else
          return url + separator + key + "=" + value;

    };

    // variables
    const scriptEls = document.getElementsByTagName('script');
    const thisScriptEl = scriptEls[scriptEls.length - 1];
    let scriptPath = thisScriptEl.src;
    if(!scriptPath.length)
        scriptPath = document.getElementById('TC_MAIN').src;
    const hostUrl = scriptPath.substr(0, scriptPath.lastIndexOf( '/' ) + 1);
    const tc_embed_token = scriptPath.split("=")[1];
    const embeddedFrame = 'embeddedFrame';
    const popupTCFrame = 'popupTCFrame';
    const loadingTCFrame = 'loadingTCFrame';
    const lightBoxTCFrame = 'lightBoxTCFrame';
    const currentUrl = window.location.protocol + "//" + window.location.host + window.location.pathname;
    let embedShoppingUrl = hostUrl +'?token=' + tc_embed_token;


    if( navigator.userAgent.match(/Android/i)
        || navigator.userAgent.match(/webOS/i)
        || navigator.userAgent.match(/iPhone/i)
        || navigator.userAgent.match(/BlackBerry/i)
        || navigator.userAgent.match(/Windows Phone/i)) {

          if(urlParam('thankyou') !== null && urlParam('thankyou') !== '')
              window.location.href =  hostUrl +'?token=' + tc_embed_token +'&thankyou=' + urlParam('thankyou') + '&direct=true';

          if(urlParam('tour_detail') !== null && urlParam('tour_detail') !== '')
            window.location.href =   hostUrl +'?token=' + tc_embed_token + '&direct=true&tour_detail='+urlParam('tour_detail');
          else if(urlParam('cart') !== null && urlParam('cart') !== '')
            window.location.href =   hostUrl +'?token=' + tc_embed_token + '&direct=true&cart='+urlParam('cart');
          else if(urlParam('checkout') !== null && urlParam('checkout') !== '')
            window.location.href =   hostUrl +'?token=' + tc_embed_token + '&direct=true&checkout='+urlParam('checkout');
          else
            window.location.href =   hostUrl +'?token=' + tc_embed_token + '&direct=true';
    }

    // check param
    if(urlParam('tour_detail') !== null && urlParam('tour_detail') !== '')
        embedShoppingUrl = hostUrl +'?token=' + tc_embed_token +'&tour_detail='+urlParam('tour_detail');
    else if(urlParam('cart') !== null && urlParam('cart') !== '')
        embedShoppingUrl = hostUrl +'?token=' + tc_embed_token +'&cart='+urlParam('cart');
    else if(urlParam('checkout') !== null && urlParam('checkout') !== '')
        embedShoppingUrl = hostUrl +'?token=' + tc_embed_token +'&checkout='+urlParam('checkout');

    if(urlParam('thankyou') !== null && urlParam('thankyou') !== '')
        embedShoppingUrl = hostUrl +'?token=' + tc_embed_token +'&thankyou='+urlParam('thankyou');

    // css
    document.querySelector('head').innerHTML += '<link rel="stylesheet" id="cssTCIFrame" href="'+hostUrl+'css/tc-iframe.css" type="text/css"/>';

    // iFrame
    document.write(
        '<div class="tcBookingEmbed" style="min-height: 500px!important;">'+
            '<iframe id="'+ embeddedFrame +'" style="transition: all .3s ease 0s;" width="100%" frameborder="0" scrolling="no" src="' + embedShoppingUrl +'"></iframe>'   +
            '<iframe id="'+ popupTCFrame +'" src="' + hostUrl +'popup?token=' + tc_embed_token +'" frameborder="0" class="display-none"></iframe>'+
            '<iframe id="'+ lightBoxTCFrame +'" src="' + hostUrl +'lightbox?token=' + tc_embed_token +'" width="100%" height="100%" frameborder="0" class="display-none" ></iframe>'+
            '<iframe id="'+ loadingTCFrame +'" src="' + hostUrl +'loading" frameborder="0" class="display-none loadingTCFrame"></iframe>'+
        '</div>'
    );

    // Create IE + others compatible event handler
    const eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
    const event = window[eventMethod];
    const messageEvent = eventMethod === "attachEvent" ? "onmessage" : "message";
    // Listen to message from child window
    event(messageEvent, function (e) {
        if(e.data === 'TOP')
            window.scroll(0, findPos(document.getElementById(embeddedFrame)) - 100);
        else if(e.data === 'GOTO-CART') {
            document.getElementById(embeddedFrame).contentWindow.postMessage(e.data,'*');
            history.replaceState({}, '', updateQueryStringParameter(currentUrl, 'cart', 'true'));
        }else if(e.data === 'GOTO-CHECKOUT') {
            document.getElementById(embeddedFrame).contentWindow.postMessage(e.data,'*');
            history.replaceState({}, '', updateQueryStringParameter(currentUrl, 'checkout', 'true'));
        } else if(e.data === 'POPUP-DISPLAY-NONE')
            document.getElementById(popupTCFrame).classList.add("display-none");
        else if(e.data === 'POPUP-DISPLAY-BLOCK-'+tc_embed_token) {
            document.getElementById(popupTCFrame).contentWindow.postMessage(e.data,'*');
            document.getElementById(popupTCFrame).classList.remove("display-none");
        }else if(e.data === 'LOADING-DISPLAY-NONE') {
            document.getElementById(loadingTCFrame).contentWindow.postMessage(e.data,'*');
            document.getElementById(loadingTCFrame).classList.add("display-none");
        } else if(e.data === 'LOADING-DISPLAY-BLOCK') {
            document.getElementById(loadingTCFrame).contentWindow.postMessage(e.data,'*');
            document.getElementById(loadingTCFrame).classList.remove("display-none");
        } else if(e.data === 'DISPLAY-LIGHT-BOX-'+tc_embed_token) {
            document.getElementById(lightBoxTCFrame).contentWindow.postMessage(e.data,'*');
            document.getElementById(lightBoxTCFrame).classList.remove("display-none");
        } else if(e.data === 'CLOSE-LIGHT-BOX')
            document.getElementById(lightBoxTCFrame).classList.add("display-none");
        else if(e.data.toString().slice(0, 17) === 'GO-TO-TOUR-DETAIL') {
            const tour_id = e.data.toString().slice(18, e.data.length);
            history.replaceState({}, '', updateQueryStringParameter(currentUrl, 'tour_detail', tour_id));
            document.getElementById(embeddedFrame).contentWindow.postMessage(e.data,'*');
        } else if(e.data.toString().slice(0, 17) === 'GOTO-THANKYOU') {
            document.getElementById(embeddedFrame).contentWindow.postMessage(e.data,'*');
            history.replaceState({}, '', updateQueryStringParameter(currentUrl, 'thankyou', 'true'));
        } else if( document.getElementById(embeddedFrame)) {
            document.getElementById(embeddedFrame).style.height = (e.data + 150) + 'px';
        }
    }, false);

    //Google translate script
    var flags = document.querySelectorAll(".flag-item");
    for (var i = 0; i < flags.length; i++) {
        flags[i].addEventListener("click",sendMessage)
    }
    function sendMessage(){
        var tc_iframe = document.getElementById("embeddedFrame");
        if(tc_iframe !== undefined){
            tc_iframe.contentWindow.postMessage("GOOGLE_TRANSLATE_"+this.getAttribute("data-value"), "*");
        }
    }
    event(messageEvent, function (e) {
        if(e.data === 'TC_MAIN_LOADED'){
            var flag = document.querySelector(".flag-item.current");
            if(flag !== undefined && flag.getAttribute("data-value")!=="en"){
                var tc_iframe = document.getElementById("embeddedFrame");
                if(tc_iframe !== undefined){
                    tc_iframe.contentWindow.postMessage("GOOGLE_TRANSLATE_"+flag.getAttribute("data-value"), "*");
                }
            }
        }
    }, false);
})();
