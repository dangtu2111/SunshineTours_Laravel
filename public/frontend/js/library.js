function googleTranslateElementInit() {
    new google.translate.TranslateElement({ pageLanguage: 'en', includedLanguages: 'en,de,es,fr,vi,zh-CN,ko,ja' }, 'google_translate_element');
}

const triggerEvent = (element, eventName) => {
    const event = new Event(eventName);
    element.dispatchEvent(event);
};

function readCookie(e) {
    // console.log("DEBUG: readCookie("+e+")");
    for (var o = e + "=", i = document.cookie.split(";"), r = 0; r < i.length; r++) {
        for (var t = i[r]; " " == t.charAt(0);) t = t.substring(1, t.length);
        if (0 == t.indexOf(o)) return t.substring(o.length, t.length);
    }
    return '/en/en';
}

var cookieRegistry = [];
function checkCookie(e, o) {
    // console.log("DEBUG: checkCookie("+e+", "+o+")");
    if (cookieRegistry[e]) {
        if (readCookie(e) != cookieRegistry[e]) {
            cookieRegistry[e] = readCookie(e)
        }
    } else {
        cookieRegistry[e] = readCookie(e);
    };
    var tmp = cookieRegistry[e].split("index.html");
    o(tmp[2]);
}

function highlightFlag(lang) {
    // console.log("DEBUG: highlightFlag("+lang+")");
    $(".flag-item").each(function () {
        var tis = $(this);
        tis.removeClass("current");
        if (lang === tis.data("value")) {
            tis.addClass("current");
        }
    });
}

jQuery(document).ready(function (e) {
    function changeLanguage(lang) {
        // console.log("DEBUG: changeLanguage("+lang+")");
        $('.goog-te-combo').val(lang);
        // window.alert($('.goog-te-combo').val());
        // $('.goog-te-combo option[value='+lang+']').attr('selected','selected');
        console.log($('.goog-te-combo').val());
        triggerEvent(document.querySelector('.goog-te-combo'), 'change');
        setTimeout(function () {
            triggerEvent(document.querySelector('.goog-te-combo'), 'change');
        }, 100);
        highlightFlag(lang);
    }

    $(".flag-item").on("click", function (event) {
        let lang = $(this).attr("data-value");
        changeLanguage(lang);
    });

    checkCookie("googtrans", highlightFlag);
});
window.dataLayer = window.dataLayer || [];
function gtag() { dataLayer.push(arguments); } gtag('js', new Date());

gtag('config', 'G-B83KVM1KM5', {});

gtag('config', 'AW-982119637');