<?php   /* * * * * * * * * * * * * * *
         * Projekt: PHP Simulator
         * Author: Gkiokan Sali
         * Date: 07.09.2014
         *
         * * * * * * * * * * * * * * */

        // Prepare
        include_once("./error_object.php");
        include_once("./error_handler.php");


        // Get Variables
        $php = $_POST['code']['php'];
        // $check = $_POST['check'];

        // Sanitize the Code
        // $code = htmlentities($code);

        // Parse the Code
        $code = $php;
        try {
            eval($code);
        }
        catch(Exception $e){
            echo "<p class='alert alert-danger'>Try Catch Block won't get you anywhere.</p>";
            echo "<pre>";
            print_r($e);
            echo "</pre>";
        }


?>
