var loadFormPlugins;
$(function () {
    loadFormPlugins= function (callback){
        $.loadScript('js/plugin/masked-input/jquery.mask.js',function (){
            $.loadScript('js/plugin/formValidation/formValidation.min.js',function(){
                $.loadScript('js/plugin/formValidation/framework/bootstrap.min.js',function(){

                $.loadScript('js/plugin/bootstrap-datetimepicker/moment/min/moment.min.js',function(){
                    $.loadScript('js/plugin/bootstrap-datetimepicker/moment/locale/es.js',function () {
                        $.loadScript('js/plugin/bootstrap-datetimepicker/bootstrap-datetimepicker.js',callback);
                    });
                });
                });
            });
        });
      //  $.loadScript('js/plugin/bootstrapvalidator/bootstrapValidator.js',callback);

    };

});
