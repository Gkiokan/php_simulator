/*
  Project: PHP Simulator
  Autohr: Gkiokan Sali
  Date: 21.02.2016
  URI: //gkiokan.net
  Comment: Creating this JS Object to handle the AJAX Requests to the source.
*/


// Just getting the source out, i'll make an awsome Object for this later.
function php_simulator(){

    // Some preparations
    var timer  = 500;
    var editor = {};
    var code   = {};

    // Generate the Code Editor Views
    this.generate_editor = function (){
       editor.php = ace.edit("php");
       editor.php.setTheme("ace/theme/twilight");
       editor.php.setOption("showPrintMargin", false);
       editor.php.session.setMode({path: "ace/mode/php", pure:true, inline:true});
    }

    // Debug propose?
    this.debug = function (new_debug){
        var debug = $('.debug');
        var old_debug = $('.debug').html();
        //var new_debug = old_debug+'+';
        debug.html(new_debug);
    }

    // Get the Source Code and return it
    this.get_code = function (){
        code.php = editor.php.getValue(); // $('.key').val();
        return code;
    }

    // Get the Code and execute it
    this.push_code = function (code){
        $.post('core/sim.php', { code:code }, function(data) {
            var result = $('.result');
            result.html(data);
        });

    }

    // Start Interval for code execution
    this.start_interval = function(that) { var that = that; setInterval(function(){ that.push_code(that.get_code()) }, timer) }

    //
    this.init = function(){
      this.generate_editor();
      this.start_interval(this);
    }

};

// We'll stick the Initialisation to this file for now,
// I'll make a more powerfull constructor for this later on.
$(function(){
  var magic = new php_simulator();
  console.log(magic);
  magic.init();
})
