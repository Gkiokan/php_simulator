/*
  Project: PHP Simulator
  Autohr: Gkiokan Sali
  Date: 21.02.2016
  URI: //gkiokan.net
  Comment: Creating this JS Object to handle the AJAX Requests to the source.
*/


// Just getting the source out, i'll make an awsome Object for this later.
$(function(){
    function debug(new_debug){
        var debug = $('.debug');
        var old_debug = $('.debug').html();
        //var new_debug = old_debug+'+';
        debug.html(new_debug);
    }

    function get_code(){
        var code = {}
        code.php = $('.key').val();
        return code;
    }

    function push_code(code){
        $.post('core/sim.php', { code:code }, function(data) {
            var result = $('.result');
            result.html(data);
        });

    }

    /* Animation Frame */
    setInterval(function(){
        code = get_code();
        // debug(code);
        push_code(code);

    }, 1000/60);

});
