// Function to adjust slider size dynamically
function setREVStartSize(e) {
    // Initialize window width and height if undefined
    window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
    window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;

    try {
        var pw = document.getElementById(e.c).parentNode.offsetWidth,
            newh;

        // Handle cases where layout is fullwidth
        pw = (pw === 0 || isNaN(pw) || e.l === "fullwidth" || e.layout === "fullwidth")
            ? window.RSIW
            : pw;

        // Set default values for undefined properties
        e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
        e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
        e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
        e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
        e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
        e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
        e.mh = e.mh === undefined || e.mh === "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);

        // If the layout is fullscreen, set new height based on the maximum of mh or window height
        if (e.layout === "fullscreen" || e.l === "fullscreen") {
            newh = Math.max(e.mh, window.RSIH);
        } else {
            e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];

            // Ensure the width values are consistent
            for (var i in e.rl) {
                if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
            }

            // Set default values for height arrays
            e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length === 0)
                ? e.gh
                : e.el;
            e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];

            for (var i in e.rl) {
                if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];
            }

            // Adjust the layout based on the current width and height
            var nl = new Array(e.rl.length), ix = 0, sl;
            e.tabw = e.tabhide >= pw ? 0 : e.tabw;
            e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
            e.tabh = e.tabhide >= pw ? 0 : e.tabh;
            e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;

            // Calculate the best fitting size
            for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
            sl = nl[0];

            for (var i in nl) {
                if (sl > nl[i] && nl[i] > 0) {
                    sl = nl[i];
                    ix = i;
                }
            }

            // Adjust height according to the best fitting option
            var m = pw > e.gw[ix] + e.tabw + e.thumbw
                ? 1
                : (pw - (e.tabw + e.thumbw)) / e.gw[ix];
            newh = e.gh[ix] * m + (e.tabh + e.thumbh);
        }

        // Set the new height for the slider
        var el = document.getElementById(e.c);
        if (el !== null && el) el.style.height = newh + "px";

        // Set the height for the wrapper if it exists
        el = document.getElementById(e.c + "_wrapper");
        if (el !== null && el) {
            el.style.height = newh + "px";
            el.style.display = "block";
        }
    } catch (error) {
        console.log("Failure at Presize of Slider: " + error);
    }
}

// Initialize slider settings
setREVStartSize({
    c: 'rev_slider_12_1',
    rl: [1920, 1700, 1025, 680],
    el: [930, 750, 600, 550],
    gw: [1300, 1100, 778, 320],
    gh: [930, 750, 600, 550],
    type: 'standard',
    layout: 'fullwidth',
    mh: "0"
});

// Handle jQuery double inclusion error
if (typeof revslider_showDoubleJqueryError === "undefined") {
    function revslider_showDoubleJqueryError(sliderID) {
        console.log("You have some jquery.js library include that comes after the Slider Revolution files js inclusion.");
        console.log("To fix this, you can:");
        console.log("1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & Output Filters' -> 'Put JS to Body' to on");
        console.log("2. Find the double jQuery.js inclusion and remove it");
        return "Double Included jQuery Library";
    }
}

// Slider module initialization
window.RS_MODULES = window.RS_MODULES || {};
window.RS_MODULES.modules = window.RS_MODULES.modules || {};
window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
window.RS_MODULES.defered = false;
window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
window.RS_MODULES.type = "compiled";

// Load the necessary script for the slider
if (window.RS_MODULES !== undefined && window.RS_MODULES.modules !== undefined && window.RS_MODULES.modules["revslider121"] !== undefined) {
    window.RS_MODULES.modules["revslider121"].once = false;
    window.revapi12 = undefined;
    if (window.RS_MODULES.checkMinimal !== undefined) window.RS_MODULES.checkMinimal();
}
