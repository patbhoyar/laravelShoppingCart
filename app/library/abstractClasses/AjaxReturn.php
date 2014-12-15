<?php
namespace library\abstractClasses;


abstract class AjaxReturn {

    public static function returnJSON($type, $code, $message){
        $ret = array(
            'type'      =>  $type,
            'code'      =>  $code,
            'message'   =>  $message
        );
        return json_encode($ret);
    }

} 