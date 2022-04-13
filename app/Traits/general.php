<?php


namespace App\Traits;


use Illuminate\Support\Facades\Auth;

Trait general
{

function deletion($deletion , $msg1 , $msg2){
    if (isset($deletion)) {
        return $msg1;
    }else{
        return $msg2;
    }

}

}
