<?php
function fibonacci($position) {
    
    if ($position < 0) {
        return 'error';
    }elseif ($position < 2){
        return $position;
    }
    
    return fibonacci($position-1) + fibonacci($position-2);
}