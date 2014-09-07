<?php /* * * * * * * * * * * * * 
       * Project: IDH-Online Clean Template
       * Author: Gkiokan Sali
       * URL: www.gkiokan.net
       * Date: 28.08.2014
       * * * * * * * * * * * * */

       
?>

<!doctype>
<html>
    <head>
        <meta name='charset' content='utf-8'>
        <meta name='author' content='Gkiokan Sali'>
        <meta name='keywords' content=''>
        <meta name='description' content=''>
        <title>PHP Simulator</title>
        
        <link rel='stylesheet' type='text/css' href='assets/css/bootstrap.min.css'>
        <link rel='stylesheet' type='text/css' href='assets/css/style.css'>
            
        <script src='assets/js/jquery-1.11.1.min.js'></script>
        <script src='assets/js/bootstrap.min.js'></script>
    </head>
    <body>
    <style>
        .input, .result { width: auto; min-height:600px; background: transparent; }
        textarea, input { width: 100%; height: 600px; margin:0px auto; border: 0px solid black; }
        
        .col-xs-6 { border: 1px solid red; position: relative; }
        .container { width: 90%; }
    </style>
    
    <div class='main'>
        
    <div class='container simulator'>
        <div class='row'>
            <div class='col-xs-12'>
                <h1>PHP Simulator</h1>
            </div>
            <div class='debug'></div>
        </div>
        <div class='row'>
            <div class='col-xs-6'>
                <h3>Source Code</h3>
                <div class='input'>
                <textarea class='key' id='key'></textarea>
                </div>
            </div>
            <div class='col-xs-6'>
                <h3>Result</h3>
                <div class='result'></div>
            </div>
        </div>
    </div>
    </div>
    
    <script>
    $(function(){
        function debug(new_debug){
            var debug = $('.debug');
            var old_debug = $('.debug').html();
            //var new_debug = old_debug+'+';
            debug.html(new_debug);
        }
        
        function get_code(){
            var code = $('.key').val();
            return code;
        }
        
        function push_code(code){
            $.post('sim.php', { code:code }, function(data) {
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
    </script>
    </body>
</html>