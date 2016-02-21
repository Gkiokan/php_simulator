<?php
/*

  Info: PHP Global Error Handler
  Comment: -//-
*/

// First, we set some PHP.ini Variables to stop showing
// the default Errors
ini_set('display_errors', 'Off');

Class PHPErrorHandler {

    // The Not official Constructor :P
    public static function shutdown() {
        $isError = false;
        $error   = null;

        // Let's check for errors
        if (is_null($error = error_get_last()) === false){

        // Any specific Error Type filtering goes here
        switch($error['type']){
            case E_ERROR:
            case E_CORE_ERROR:
            case E_COMPILE_ERROR:
            case E_USER_ERROR:
            case 4:
                self::render_error(self::generate_exception($error));
                break;
            }

        }
    }

    // Let's generate our self Exception Error Object
    public static function generate_exception($errors){
          //  Loop though the Fields
          // $obj = new PHP_Simulator_Error_Object();
          $obj = new PHP_Simulator_Error();

          // Loop though the Error Array
          foreach($errors as $key=>$val):
              $obj->$key = $val;

          endforeach;

          // Additional Modifiers
          $obj->time      = time();
          $obj->date_time = date("d.m.Y H:s:i", time());

          return $obj;
    }


    // Let's go for the Error Rendering
    public static function render_error($error=null){
        echo "<div class='alert alert-danger modified_alert'>";
            echo "<div class='heading'>Hupsa, there is some Error</div>";

            echo "<b>The Error in short</b><br>";
            echo "<div class='message'>";
            echo $error->message;
            echo "</div>";

            echo "<b>Source Error Object</b><br>";
            echo "<div class='source'><pre>";
            print_r ($error);//do whatever you need with it
            echo "</pre></div>";
        echo "</div>";
    }

}


register_shutdown_function(['\\PHPErrorHandler', 'shutdown']);
set_error_handler(['\\PHPErrorHandler', 'shutdown']);
