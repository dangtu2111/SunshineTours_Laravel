(function($){
    "use strict";
    var HT={};
    var document = $(document)
    HT.switchery = () =>{
        $('.js-switch_2').each(function(){
            // let _this=$(this)
            // var elem_2 = document.querySelector('.js-switch_2');
            var switchery_2 = new Switchery(this, { color: '#ED5565' });
        })
    }

    document.ready(function(){
        HT.switchery()
    })
})(jQuery);