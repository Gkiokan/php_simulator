<?php   /* * * * * * * * * * * * * * *
         * Projekt: PHP Simulator
         * Author: Gkiokan Sali
         * Date: 07.09.2014
         *
         * * * * * * * * * * * * * * */

        // Get Variables
        $code = $_POST['code'];
        // $check = $_POST['check'];
        
        // Sanitize the Code
        // $code = htmlentities($code);
        
        // Parse the Code
        eval($code);


?>