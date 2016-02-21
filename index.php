<?php
/*
  Project: PHP Simulator
  Author: Gkiokan Sali
  URI: //gkiokan.net
  Date: 21.02.2016
  Comment: Creating update for this pretty alpha version.
*/
?>
<!doctype>
<html>
    <head>
        <meta name='charset' content='utf-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name='author' content='Gkiokan Sali'>
        <meta name='keywords' content=''>
        <meta name='description' content=''>
        <title>PHP Simulator</title>

        <link rel='stylesheet' type='text/css' href='assets/css/bootstrap.min.css'>
        <link rel='stylesheet' type='text/css' href='assets/css/style.css'>
        <link rel='stylesheet' type='text/css' href='assets/css/simulator-core.css'>
    </head>
    <body>
    <div class='main'>

        <div class='simulator'>
        <div class='container-fluid'>
            <div class='row heading'>
                <div class='col-xs-12'>
                    <h1>PHP Simulator</h1>
                    <div class='debug'></div>
                </div>
            </div>
            <div class='row settings'>
                <div class='col-xs-12'>
                    <div class='btn-group btn-group-xs'>
                        <div class='btn btn-info'>Setup Request Timer</div>
                        <div class='btn btn-success'>Code Theme </div>
                        <div class='btn btn-danger'>Run Code </div>
                    </div>
                </div>
            </div>
            <div class='row code_sides'>
                <div class='col-xs-6'>
                    <h3>Source Code</h3>
                    <div class='input' id='php'></div>
                </div>
                <div class='col-xs-6'>
                    <h3>Result</h3>
                    <div class='result'></div>
                </div>
            </div>
        </div>
        </div>

    </div>

    <script src='assets/js/jquery-1.11.1.min.js'></script>
    <script src='assets/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.3/ace.js'></script>
    <script src="assets/js/simulator-core.js"></script>
    </body>
</html>
