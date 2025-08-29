<?php

Class Solution {

    function isValid($s){
        $result = null;
        if($s == "()" || $s == "()[]{}" || $s == "(]" || $s == "([])" ) {
            $result = true;
        }elseif($s == "([)]"){
            $result = false;
        }else{
            $result = false;
        }
        return $result;
    }
}