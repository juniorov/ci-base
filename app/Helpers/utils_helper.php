<?php

if ( ! function_exists('jrv_log')) {
    function jrv_log ( $log, $print = false, $bool = false )  {
        if($print) {
            echo '<pre style="min-height: 100px; border: 2px solid red;">'; print_r( $log ); echo '</pre>';

            if($bool) die;
        }

        if ( is_array( $log ) || is_object( $log ) ) {
            error_log( print_r( $log, true ) );
        } else {
            error_log( $log );
        }
    }
}

if ( ! function_exists('jrv_pr')) {
    function jrv_pr($data, $b = false)
    {
        echo '<pre style="min-height: 100px; border: 2px solid red;">';
        print_r($data);
        echo '</pre>';

        if ($b) die;
    }
}