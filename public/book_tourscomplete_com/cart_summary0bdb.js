(function () {
    const CS_scriptEls = document.getElementsByTagName('script');
    const CS_thisScriptEl = CS_scriptEls[CS_scriptEls.length - 1];
    let CS_scriptPath = CS_thisScriptEl.src;
    if(!CS_scriptPath.length)
        CS_scriptPath = document.getElementById('TC_CART_SUMMARY').src;
    const CS_hostUrl = CS_scriptPath.substr(0, CS_scriptPath.lastIndexOf( '/' ) + 1);
    const CS_tc_embed_token = CS_scriptPath.split("=")[1];
    const CS_cartSummaryFrame = 'cartSummaryFrame';

    // css
    document.querySelector('head').innerHTML += '<link rel="stylesheet" id="cssTCIFrame" href="'+CS_hostUrl+'css/tc-iframe-cartsummary.css" type="text/css"/>';

    // iFrame
    document.write(
        '<div class="tcBookingEmbed">'+
          '<iframe scrolling="no" id="'+ CS_cartSummaryFrame +'" src="' + CS_hostUrl +'cart-summary-embed?token=' + CS_tc_embed_token +'" frameborder="0"></iframe>'+
        '</div>'
    );

    // Create IE + others compatible event handler
    const CS_eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
    const CS_event = window[CS_eventMethod];
    const CS_messageEvent = CS_eventMethod === "attachEvent" ? "onmessage" : "message";

  // Listen to message from child window
  CS_event(CS_messageEvent, function (e) {
        if(e.data === 'UPDATE-CART-SUMMARY')
            document.getElementById(CS_cartSummaryFrame).contentWindow.postMessage(e.data,'*');
        else if(e.data === 'CART-SUMMARY-DISPLAY-NONE')
            document.getElementById(CS_cartSummaryFrame).classList.add("display-none");
        else if(e.data === 'CART-SUMMARY-DISPLAY-BLOCK')
            document.getElementById(CS_cartSummaryFrame).classList.remove("display-none");
    }, false);
})();
