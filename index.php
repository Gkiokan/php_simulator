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

    <script src='assets/js/jquery-1.11.1.min.js'></script>
    <script src='assets/js/bootstrap.min.js'></script>
    <script src="assets/js/simulator-core.js"></script>
    </body>
</html>
